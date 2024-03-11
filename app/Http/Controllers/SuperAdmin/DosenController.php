<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\Falkultas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //
        $prodix = Prodi::all();
        $fakultasx = Falkultas::all();
        $alldosen = Dosen::all();

        return view('SuperAdmin.dosen', compact('prodix', 'fakultasx', 'alldosen'), ['judul' => 'Halaman Dosen']);
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
                'nip' => 'required|unique:dosen_pembimbing,nip',
                'nama' => 'required',
                'email' => 'required|email|unique:dosen_pembimbing,email',
                'nohp' => 'required|numeric',
                'program_studi' => 'required',
            ],
            [
                'nip.required' => 'Nomor Induk Pegawai wajib diisi',
                'nip.unique' => 'Nomor Induk Pegawai sudah ada dalam database',
                'nama.required' => 'Nama lengkap wajib diisi',
                'email.required' => 'Alamat email wajib diisi',
                'email.email' => 'Format email tidak valid',
                'email.unique' => 'Alamat email sudah digunakan',
                'program_studi.required' => 'Program Studi wajib dipilih',
                'program_studi.in' => 'Pilih program_studi yang sesuai',
                'nohp.required' => 'Nomor handphone wajib diisi',
                'nohp.numeric' => 'Nomor handphone harus berupa angka',
                'program_studi.required' => 'Program Studi wajib dipilih',
            ],
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $dosen = new Dosen();
        $dosen->nip = $request->input('nip');
        $dosen->password = Hash::make($request->input('nip'));
        $dosen->nama = $request->input('nama');
        $dosen->email = $request->input('email');
        $dosen->nohp = $request->input('nohp');
        $dosen->program_studi = $request->input('program_studi');
        $dosen->aktif = '1';

        // Upload gambar (jika ada)

        $dosen->save();

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
        $dosen = Dosen::findOrFail($id);
        return response()->json($dosen);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         // Validate the request data
         $validator = validator()->make($request->all(), [
            'nip' => [
                'required',
                Rule::unique('dosen_pembimbing')->ignore($id),
            ],
            'nama' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('dosen_pembimbing')->ignore($id),
            ],
            'nohp' => 'required|numeric',
            'program_studi' => 'required',
        ], [
            'nip.required' => 'Nomor Induk Pegawai wajib diisi',
            'nip.unique' => 'Nomor Induk Pegawai sudah ada dalam database',
            'nama.required' => 'Nama lengkap wajib diisi',
            'email.required' => 'Alamat email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Alamat email sudah digunakan',
            'program_studi.required' => 'Program Studi wajib dipilih',
            'nohp.required' => 'Nomor handphone wajib diisi',
            'nohp.numeric' => 'Nomor handphone harus berupa angka',
        ]);

        // If validation fails, return the validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // If validation passes, proceed with update
        $dosenPembimbing = Dosen::find($id);
        if (!$dosenPembimbing) {
            return response()->json(['errors' => 'Dosen Pembimbing not found'], 404);
        }

        // Update the dosen_pembimbing record
        $dosenPembimbing->update($request->all());

        return redirect()->back()->with('success', 'Data mahasiswa berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id); // Pindahkan baris ini ke atas pengecekan apakah gambar tersedia atau tidak
    
        // Periksa apakah file gambar tersedia
    
        $dosen->delete();
    
        return redirect()->back()->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
