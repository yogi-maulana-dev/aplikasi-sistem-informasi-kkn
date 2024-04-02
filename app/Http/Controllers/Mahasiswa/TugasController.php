<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Models\Tugas;
use App\Models\Kelompok;
use App\Models\TabungTugas;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data kelompok berdasarkan user saat ini
        $kelompok = Kelompok::where('npm', Auth::user()->npm)
            ->where('ketua', '1')
            ->first();
    
        if ($kelompok) {
            $tabungtugas = TabungTugas::where('kelompoktugas', $kelompok->nokelompok)
                ->latest()
                ->take(5)
                ->get();
            // Jika kelompok ditemukan, ambil tugas yang terkait dengan kelompok tersebut
            $tugas = Tugas::where('kelompoktugas', $kelompok->nokelompok)
                ->get();
    
            // Kirim data tugas ke view
            return view('Mahasiswa.tugas', compact('tugas', 'tabungtugas'));
        } else {
            // Jika kelompok tidak ditemukan, kirim pesan kosong ke view
            return redirect()->route('peringatan')->with('error', 'Anda belum menjadi ketua kelompok, jika belum silakan hubungi admin.');
        }
    }

    public function peringatan(){
        return view('Mahasiswa.peringatan');
    }
    
    

    /**
     * Show the form for creating a new resource.
     */

     public function updateStatus($id)
{
    // Mulai transaksi database
    DB::beginTransaction();

    try {
        // Ambil data tugas berdasarkan nokelompok
        $dataTugas = Tugas::where('id', $id)->get();

        // Loop untuk setiap data tugas
        foreach ($dataTugas as $tugas) {
            // Simpan data ke tabel tabungtugas
           $tes= TabungTugas::create([
                'kelompoktugas' => $tugas->kelompoktugas,
                'fotokegiatan' => $tugas->fotokegiatan,
                'tugas' => $tugas->tugas,
                'status' => '0', // Atur status sesuai kebutuhan
                'created_at' => $tugas->created_at
            ]);

            // Hapus data tugas dari tabel tugas
            $tugas->delete();
        }

        // Commit transaksi jika semua operasi berhasil
        DB::commit();

        // Kembalikan respons JSON jika digunakan sebagai API
        return response()->json(['message' => 'Data berhasil dipindahkan dan dihapus.', 'tes' => $tes]);
        dd($tes);
        // Atau, jika digunakan dalam aplikasi web dan ingin melakukan redirect
        // return redirect()->route('tugas'); // Redirect ke route yang ditentukan
    } catch (\Exception $e) {
        // Rollback transaksi jika terjadi kesalahan
        DB::rollback();

        // Kembalikan pesan error jika terjadi kesalahan
        return response()->json(['message' => 'Terjadi kesalahan saat memindahkan data.'], 500);
    }
    
}

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
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keterangan' => 'required|string',
        ], [
            'gambar.required' => 'Wajib Ada Gambar Kegiatan',
            'gambar.image' => 'Berkas harus berupa gambar',
            'gambar.mimes' => 'Format gambar harus jpeg, png, jpg, atau gif',
            'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 2048 KB',
            'keterangan.required' => 'Keterangan harus diisi',
            'keterangan.string' => 'Keterangan harus berupa teks',
        ]);
        

        // Cari kelompok pengguna
        $kelompok = Kelompok::where('npm', Auth::user()->npm)
            ->where('ketua', '1')
            ->first();

        // Jika kelompok ditemukan
        if ($kelompok) {
            // Simpan gambar ke dalam folder
            $gambar = $request->file('gambar');
            $nama_gambar = $kelompok->nokelompok . '_' . time() . '.' . $gambar->getClientOriginalExtension();
            $lokasi = public_path('uploads/mahasiswa/tugas');
            $gambar->move($lokasi, $nama_gambar);

            // Buat dan simpan tugas ke database
            $tugas = new Tugas();
            $tugas->fotokegiatan = 'uploads/mahasiswa/tugas/' . $nama_gambar;
            $tugas->tugas = $request->keterangan;
            $tugas->kelompoktugas = $kelompok->nokelompok;
            $tugas->created_at = Carbon::now('Asia/Jakarta');
            $tugas->save();

            return redirect()->route('tugas'); // Redirect ke route yang ditentukan
        } else {
            // Lakukan penanganan jika kelompok tidak ditemukan
            echo 'Kelompok tidak ditemukan.';
        }
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
