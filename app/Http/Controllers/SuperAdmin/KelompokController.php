<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\Dosen;
use App\Models\Lokasi;
use App\Models\Village;
use App\Models\Kelompok;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TabungTugas;

class KelompokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allkelompok = Kelompok::where('ketua', '1')->get();

        // Mendapatkan nomor kelompok terakhir
        $lastKelompok = Kelompok::orderBy('id', 'desc')->first();

        // Inisialisasi nomor kelompok baru
        $nokelompok = 1;

        // Jika sudah ada kelompok sebelumnya, tambahkan satu ke nomor kelompok baru
        if ($lastKelompok) {
            $nokelompok = $lastKelompok->nokelompok + 1;
        }

        return view('SuperAdmin.kelompok', compact('allkelompok'), ['nokelompok' => $nokelompok]);
    }

    public function search(Request $request)
{
    $searchTerm = $request->input('search');

    $mahasiswas = Mahasiswa::where(function($query) use ($searchTerm) {
            $query->where('npm', 'like', '%' . $searchTerm . '%')
                ->orWhere('namalengkap', 'like', '%' . $searchTerm . '%');
        })
        ->whereNotIn('npm', function($query) {
            $query->select('npm')->from('kelompok');
        })
        ->get();

    return response()->json($mahasiswas);
}

    public function searchedit(Request $request)
{
    $searchTerm = $request->input('search');

    $mahasiswas = Mahasiswa::where(function($query) use ($searchTerm) {
            $query->where('npm', 'like', '%' . $searchTerm . '%')
                ->orWhere('namalengkap', 'like', '%' . $searchTerm . '%');
        })
        ->get();

    return response()->json($mahasiswas);
}

public function cariDosen(Request $request)
{
    $term = $request->input('term'); // Ambil kata kunci pencarian dari request
    $dosens = Dosen::where('nama', 'like', '%' . $term . '%')->get(); // Lakukan pencarian berdasarkan nama dosen

    return response()->json($dosens); // Mengembalikan hasil pencarian dalam format JSON
}

public function cariLokasi(Request $request)
{
    $termlokasi = $request->input('term'); // Ambil kata kunci pencarian dari request
    $lokasis = Lokasi::where('nip', 'like', '%' . $termlokasi . '%')
                     ->orWhere('villages.name', 'like', '%' . $termlokasi . '%')
                     ->join('villages', 'lokasi_kkn.desa', '=', 'villages.id')
                     ->select('lokasi_kkn.desa', 'lokasi_kkn.nip', 'villages.name AS village_name')
                     ->get();

    return response()->json($lokasis); // Mengembalikan hasil pencarian dalam format JSON
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nokelompok' => 'required',
            'npm' => 'required|array|min:3|max:10', // Sesuaikan aturan validasi dengan kebutuhan
            // tambahkan aturan validasi lainnya jika diperlukan
            'dosen'=>'required',
            'lokasi'=>'required',
        ]);

        // Proses penyimpanan data kelompok
        $isKetuaSet = false;
        // Simpan setiap NPM ke baris yang berbeda dalam tabel
        foreach ($request->npm as $npm) {
            $kelompok = new Kelompok(); // Buat objek baru untuk setiap NPM
            $kelompok->nokelompok = $request->nokelompok;
            $kelompok->npm = $npm;
            $kelompok->dosen = $request->dosen;
            $kelompok->lokasi = $request->lokasi;
            // Set ketua hanya untuk NPM pertama
            if (!$isKetuaSet) {
                $kelompok->ketua = '1';
                $isKetuaSet = true;
            }

            $kelompok->save();
        }
        // Redirect atau tampilkan pesan berhasil
        return redirect()->route('superadmin.kelompok')->with('success', 'Data kelompok berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit(Request $request,$nokelompok)
    {
        $dosens = Dosen::all();
        // $lokasi = Lokasi::findOrFail($id);
        // $desas = Village::pluck('name', 'id');

        $allkelompok = Kelompok::where('ketua', '1')
        ->where('nokelompok', $nokelompok)
        ->get();

        $lokasiIds = $allkelompok->pluck('lokasi'); // Mengambil semua lokasi_id dari kumpulan kelompok

        $desas = Village::whereIn('id', $lokasiIds)->get();
        
        // Mengambil data kelompok berdasarkan nomor kelompok
        // $kelompok = Kelompok::where('nokelompok', $nokelompok)->firstOrFail();
        $kelompok = Kelompok::where('nokelompok', $nokelompok)->get()->reverse();
        // Mengambil data mahasiswa untuk pilihan pada dropdown
       

                      $lokasis = Lokasi::join('villages', 'lokasi_kkn.desa', '=', 'villages.id')
                 ->select('lokasi_kkn.id', 'lokasi_kkn.nip', 'villages.name AS village_name')
                 ->get();

        $mahasiswas = Mahasiswa::all();

        // Mengembalikan view edit dengan data kelompok yang akan diedit
        return view('SuperAdmin.kelompok-edit', compact('kelompok', 'mahasiswas','allkelompok','lokasis','dosens','desas'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, $nokelompok)
{
 
    

    $request->validate([
        'dosen' => 'required', // Sesuaikan dengan aturan validasi yang Anda inginkan
        'lokasi' => 'required',
        'npm' => 'required|array', // Jika Anda ingin memastikan npm yang dikirim adalah sebuah array
    ]);

    // Cari kelompok berdasarkan nomor kelompok
    $kelompok = Kelompok::where('nokelompok', $nokelompok)->firstOrFail();

    // Update dosen pembimbing dan lokasi kelompok

    // Hapus semua mahasiswa yang terhubung dengan kelompok ini
    foreach ($request->id as $key => $id) {
                    // Periksa apakah id valid dan terhubung dengan kelompok yang benar
                    $mahasiswa = $kelompok->where('id', $id)->first();
    
                    if ($mahasiswa) {
                        // Perbarui npm, dosen, dan lokasi untuk mahasiswa yang sesuai
                        $mahasiswa->dosen = $request->dosen;
                        $mahasiswa->lokasi = $request->lokasi;
                        $mahasiswa->npm = $request->npm[$key];
                        $mahasiswa->save();
                    }

          
                }

    return redirect()->route('superadmin.kelompok')->with('success', 'Data kelompok berhasil diperbarui.');
}




    /**
     * Remove the specified resource from storage.
     */
   // Method untuk menghapus data kelompok dan data terkait
public function destroy($nokelompok)
{
    try {
            // Hapus semua data kelompok dengan nokelompok yang sesuai
            Kelompok::where('nokelompok', $nokelompok)->delete();
            TabungTugas::where('kelompoktugas', $nokelompok)->delete();

            // Redirect kembali ke halaman yang sesuai setelah berhasil menghapus
            return redirect()->route('superadmin.kelompok')->with('success', 'Data kelompok dengan nokelompok '.$nokelompok.' berhasil dihapus.');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kembalikan ke halaman sebelumnya dengan pesan kesalahan
            return back()->withErrors(['error' => 'Terjadi kesalahan saat menghapus data kelompok.']);
        }
}

}
