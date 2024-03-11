<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Kelompok;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

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
            'npm' => 'required|array|min:5|max:10', // Sesuaikan aturan validasi dengan kebutuhan
            // tambahkan aturan validasi lainnya jika diperlukan
        ]);

        // Proses penyimpanan data kelompok
        $isKetuaSet = false;
        // Simpan setiap NPM ke baris yang berbeda dalam tabel
        foreach ($request->npm as $npm) {
            $kelompok = new Kelompok(); // Buat objek baru untuk setiap NPM
            $kelompok->nokelompok = $request->nokelompok;
            $kelompok->npm = $npm;
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
     public function edit($nokelompok)
    {
        // Mengambil data kelompok berdasarkan nomor kelompok
        // $kelompok = Kelompok::where('nokelompok', $nokelompok)->firstOrFail();
        $kelompok = Kelompok::where('nokelompok', $nokelompok)->get()->reverse();
        // Mengambil data mahasiswa untuk pilihan pada dropdown
        $allkelompok = Kelompok::where('ketua', '1')
                      ->where('nokelompok', $nokelompok)
                      ->get();

        $mahasiswas = Mahasiswa::all();

        // Mengembalikan view edit dengan data kelompok yang akan diedit
        return view('SuperAdmin.kelompok-edit', compact('kelompok', 'mahasiswas','allkelompok'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, $nokelompok)
{
 
    try {
            // Validasi data yang diterima dari form jika diperlukan
        

            // Ambil data kelompok yang akan diupdate
            $kelompok = Kelompok::where('nokelompok', $nokelompok)->firstOrFail();

            // Loop melalui setiap entri mahasiswa yang ingin diupdate
            foreach ($request->id as $key => $id) {
                // Periksa apakah id valid dan terhubung dengan kelompok yang benar
                $mahasiswa = $kelompok->where('id', $id)->first();

                if ($mahasiswa) {
                    // Perbarui npm untuk mahasiswa yang sesuai
                    $mahasiswa->update(['npm' => $request->npm[$key]]);
                }
            }

            // Redirect kembali ke halaman yang sesuai setelah berhasil melakukan update
            return redirect()->route('superadmin.kelompok')->with('success', 'Data kelompok berhasil diperbarui.');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kembalikan ke halaman sebelumnya dengan pesan kesalahan
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan saat memperbarui data kelompok.']);
        }
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

            // Redirect kembali ke halaman yang sesuai setelah berhasil menghapus
            return redirect()->route('superadmin.kelompok')->with('success', 'Data kelompok dengan nokelompok '.$nokelompok.' berhasil dihapus.');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kembalikan ke halaman sebelumnya dengan pesan kesalahan
            return back()->withErrors(['error' => 'Terjadi kesalahan saat menghapus data kelompok.']);
        }
}

}
