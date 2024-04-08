<?php

namespace App\Http\Controllers\Dosen;

use App\Models\TabungTugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $allkegiatan=TabungTugas::all(); 
        return view('Dosen.kegiatan', compact('allkegiatan'),['judul', 'Kegiatan Mahasiswa']);
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

    public function aktif(Request $request, $id)
    {
        //
        $validator = Validator::make(
            $request->all(),
            [
                
                'keterangan' => 'required',
            ],
            [
                'keterangan.required' => 'wajib diisi',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $tugastabung = TabungTugas::findOrFail($id);
        
        $tugastabung->aktif ='1';

        $tugastabung->save();

        return redirect()->back()->with('success', 'Kegiatan Mahasiswa berhasil diperbarui.');
    }
}
