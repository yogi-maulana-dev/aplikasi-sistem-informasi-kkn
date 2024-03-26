<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\Prodi;
use App\Models\Falkultas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PDF;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $prodix = Prodi::all();
        $fakultasx = Falkultas::all();
        $allmahasiswa = Mahasiswa::all();

        return view('SuperAdmin.mahasiswa', compact('prodix', 'fakultasx', 'allmahasiswa'), ['judul' => 'Halaman Mahasiswa']);
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
        //

        $validator = Validator::make(
            $request->all(),
            [
                'npm' => 'required|string|max:255|unique:mahasiswas,npm,' . $request->input('npm'),
                'namalengkap' => 'required|string|max:255',
                'email' => 'required|email|unique:mahasiswas,email',
                'jk' => 'required|string|max:255',
                'nohp' => 'required|string|max:255',
                'gambar' => 'required|image|max:5120', // Ubah sesuai kebutuhan Anda
                'gambarbayar' => 'required|image|max:5120', // Ubah sesuai kebutuhan Anda
                'alamat' => 'required|string|max:255',
                'fakultas' => 'required|string|max:255',
                'jurusan' => 'required|string|max:255',
                'sizebaju' => 'required|string|max:255',
            ],
            [
                'npm.required' => 'Nomor Pokok Mahasiswa wajib diisi',
                'npm.unique' => 'Nomor Pokok Mahasiswa sudah ada dalam database',
                'namalengkap.required' => 'Nama lengkap wajib diisi',
                'email.required' => 'Alamat email wajib diisi',
                'email.email' => 'Format email tidak valid',
                'email.unique' => 'Alamat email sudah digunakan',
                'jk.required' => 'Jenis kelamin wajib dipilih',
                'jk.in' => 'Pilih jenis kelamin yang sesuai',
                'fakultas.required' => 'Fakultas wajib dipilih',
                'fakultas.in' => 'Pilih fakultas yang sesuai',
                'jurusan.required' => 'Jurusan wajib dipilih',
                'jurusan.in' => 'Pilih Jurusan yang sesuai',
                'nohp.required' => 'Nomor handphone wajib diisi',
                'nohp.numeric' => 'Nomor handphone harus berupa angka',
                'alamat.required' => 'Alamat wajib diisi',
                'fakultas.required' => 'Fakultas wajib dipilih',
                'jurusan.required' => 'Jurusan wajib dipilih',
                'gambar.image' => 'File harus berupa Foto',
                'gambar.mimes' => 'Format Foto harus jpeg, png, jpg, atau gif',
                'gambar.max' => 'Ukuran foto maksimal 2MB',
                'gambarbayar.image' => 'File harus berupa Bukti Pembayaran',
                'gambarbayar.mimes' => 'Format Bukti Pembayaran harus jpeg, png, jpg, atau gif',
                'gambarbayar.max' => 'Ukuran Bukti Pembayaran maksimal 2MB',
            ],
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $mahasiswa = new Mahasiswa();
        $mahasiswa->npm = $request->input('npm');
        $mahasiswa->namalengkap = $request->input('namalengkap');
        $mahasiswa->email = $request->input('email');
        $mahasiswa->jk = $request->input('jk');
        $mahasiswa->nohp = $request->input('nohp');
        $mahasiswa->alamat = $request->input('alamat');
        $mahasiswa->fakultas = $request->input('fakultas');
        $mahasiswa->jurusan = $request->input('jurusan');
        $mahasiswa->sizebaju = $request->input('sizebaju');
        $mahasiswa->password = Hash::make($request->input('npm'));

        // Upload gambar (jika ada)
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $npm = $request->input('npm'); // Mengambil NPM dari input form
            $nama_gambar = $npm . '_' . time() . '.' . $gambar->getClientOriginalExtension(); // Menambahkan NPM ke nama gambar
            $lokasi = public_path('uploads/mahasiswa/foto');
            $gambar->move($lokasi, $nama_gambar);
            $mahasiswa->gambar = 'uploads/mahasiswa/foto/' . $nama_gambar;
        }

        if ($request->hasFile('gambarbayar')) {
            $gambarbayar = $request->file('gambarbayar');
            $npm = $request->input('npm'); // Mengambil NPM dari input form
            $nama_gambarbayar = $npm . '_' . time() . '.' . $gambarbayar->getClientOriginalExtension(); // Menambahkan NPM ke nama gambarbayar
            $lokasi = public_path('uploads/mahasiswa/bukti');
            $gambarbayar->move($lokasi, $nama_gambarbayar);
            $mahasiswa->gambarbayar = 'uploads/mahasiswa/bukti/' . $nama_gambarbayar;
        }

        $mahasiswa->save();

        return redirect()->back()->with('success', 'Data mahasiswa berhasil disimpan.');
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
    public function edit($id)
    {
        //
        $mahasiswa = Mahasiswa::findOrFail($id);
        return response()->json($mahasiswa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make(
            $request->all(),
            [
                'npm' => 'required|unique:mahasiswas,npm,'.$id,
                'namalengkap' => 'required',
                'email' => 'required|email|unique:mahasiswas,email,'.$id,
                'jk' => 'required|in:Laki - Laki,Wanita',
                'nohp' => 'required|numeric',
                'alamat' => 'required',
                'fakultas' => 'required',
                'jurusan' => 'required',
                'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // validasi untuk gambar
            ],
            [
                'npm.required' => 'Nomor Pokok Mahasiswa wajib diisi',
                'npm.unique' => 'Nomor Pokok Mahasiswa sudah ada dalam database',
                'namalengkap.required' => 'Nama lengkap wajib diisi',
                'email.required' => 'Alamat email wajib diisi',
                'email.email' => 'Format email tidak valid',
                'email.unique' => 'Alamat email sudah digunakan',
                'jk.required' => 'Jenis kelamin wajib dipilih',
                'jk.in' => 'Pilih jenis kelamin yang sesuai',
                'fakultas.required' => 'Fakultas wajib dipilih',
                'fakultas.in' => 'Pilih fakultas yang sesuai',
                'jurusan.required' => 'Jurusan wajib dipilih',
                'jurusan.in' => 'Pilih Jurusan yang sesuai',
                'nohp.required' => 'Nomor handphone wajib diisi',
                'nohp.numeric' => 'Nomor handphone harus berupa angka',
                'alamat.required' => 'Alamat wajib diisi',
                'fakultas.required' => 'Fakultas wajib dipilih',
                'jurusan.required' => 'Jurusan wajib dipilih',
                'gambar.image' => 'File harus berupa gambar',
                'gambar.mimes' => 'Format gambar harus jpeg, png, jpg, atau gif',
                'gambar.max' => 'Ukuran gambar maksimal 2MB',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->npm = $request->input('npm');
        $mahasiswa->namalengkap = $request->input('namalengkap');
        $mahasiswa->email = $request->input('email');
        $mahasiswa->jk = $request->input('jk');
        $mahasiswa->nohp = $request->input('nohp');
        $mahasiswa->alamat = $request->input('alamat');
        $mahasiswa->fakultas = $request->input('fakultas');
        $mahasiswa->jurusan = $request->input('jurusan');

        // Upload gambar (jika ada)
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($mahasiswa->gambar) {
                if (file_exists(public_path($mahasiswa->gambar))) {
                    unlink(public_path($mahasiswa->gambar));
                }
            }
            
            // Upload gambar baru
            $gambar = $request->file('gambar');
            $npm = $request->input('npm');
            $nama_gambar = $npm . '_' . time() . '.' . $gambar->getClientOriginalExtension();
            $lokasi = public_path('uploads/mahasiswa');
            $gambar->move($lokasi, $nama_gambar);
            $mahasiswa->gambar = 'uploads/mahasiswa/' . $nama_gambar;
        }
        

        $mahasiswa->save();

        return redirect()->back()->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function aktif(Request $request, $id)
    {
        //
        $validator = Validator::make(
            $request->all(),
            [
                
                'aktif' => 'required',
            ],
            [
                'aktif.required' => 'wajib diisi',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $mahasiswa = Mahasiswa::findOrFail($id);
        
        $mahasiswa->aktif =$request->aktif;

        $mahasiswa->save();

        return redirect()->back()->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id); // Pindahkan baris ini ke atas pengecekan apakah gambar tersedia atau tidak
    
        // Periksa apakah file gambar tersedia
        if ($mahasiswa->gambar && file_exists(public_path($mahasiswa->gambar))) {
            unlink(public_path($mahasiswa->gambar)); // Hapus file gambar jika ada
        }
    
        $mahasiswa->delete();
    
        return redirect()->back()->with('success', 'Data mahasiswa berhasil dihapus.');
    }

    public function cetakPDF($id)
{
    $mahasiswa = Mahasiswa::findOrFail($id);

    $pdf = PDF::loadView('superadmin.mahasiswa.pdf', compact('mahasiswa'));

    return $pdf->stream('mahasiswa_' . $mahasiswa->namalengkap . '.pdf');
}

    
}
