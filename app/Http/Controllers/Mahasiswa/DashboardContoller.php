<?php

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\Falkultas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DashboardContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
{

    $userId = Auth::guard('web')->id();
    $user = Mahasiswa::find($userId);

    if (!$user) {
        // Handle the case where the user is not found
        return redirect()->route('login')->with('warning', 'User not found.');
    }

    // Check if the user has completed biodata
    if ($this->isBiodataComplete($user)) {
        // Access the related data
        // Other user details are available as well
        // Pass the data to the view
        return view('Mahasiswa.dashboard'  ,['judul' => 'Halaman Dashboard', 'user' => $user]);
    } else {
        // Redirect to a page for completing biodata
        return redirect()->route('edit-profil')->with('warning', 'Lengkapi biodata Anda untuk mengakses lain.');
    }
}

protected function isBiodataComplete($user)
{
    // Check if all required fields are filled
    return !empty($user->npm)
        && !empty($user->namalengkap)
        && !empty($user->email)
        && !empty($user->jk)
        && !empty($user->nohp)
        && !empty($user->alamat)
        && !empty($user->fakultas)
        && !empty($user->jurusan)
        && !empty($user->gambar)
        && !is_null($user->password) // Make sure password is not null or empty if it should not be
        && $user->aktif == 1;
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
    public function edit()
    {
        
        $prodix = Prodi::all();
        $fakultasx = Falkultas::all();

        return view('Mahasiswa.profil-edit',compact('prodix','fakultasx'), ['judul' => 'Edit Data Profil']);
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request)
{
    try {
        // Validate the incoming request data
        $validationRules = [
            'npm' => 'required|string',
            'namalengkap' => 'required|string',
            'email' => 'required|email|unique:mahasiswa,email,' . Auth::guard('web')->user()->id,
            'nohp' => 'required|numeric',
            'jk' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            // 'password' => 'nullable|string|min:6',
            'alamat' => 'nullable|string',
            'fakultas' => 'nullable|string',
            'jurusan' => 'nullable|string',
        ];

        $validator = Validator::make($request->all(), $validationRules);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Retrieve the authenticated user
        $mahasiswa = Auth::guard('web')->user();
        $existingImage = $mahasiswa->gambar;

        // Update the Mahasiswa model with the form data
        $mahasiswa->update([
            'npm' => $request->input('npm'),
            'namalengkap' => $request->input('namalengkap'),
            'email' => $request->input('email'),
            'nohp' => $request->input('nohp'),
            'jk' => $request->input('jk'),
            'alamat' => $request->input('alamat'),
            'fakultas' => $request->input('fakultas'),
            'jurusan' => $request->input('jurusan'),
            'aktif' => '1',
        ]);

        // Handle uploaded image
        if ($request->hasFile('gambar')) {
            // Delete the existing image if it exists
            if ($existingImage && file_exists(public_path($existingImage))) {
                unlink(public_path($existingImage));
            }

            // Upload the new image
            $gambarPath = $this->uploadImage($request->file('gambar'), $mahasiswa->id);
            $mahasiswa->gambar = $gambarPath;
        }

        // Handle uploaded image
        // if ($request->hasFile('gambar')) {
        //     $gambarPath = $this->uploadImage($request->file('gambar'), $mahasiswa->id);
        //     $mahasiswa->gambar = $gambarPath;
        // }

        // // Update password if provided
        // if ($request->has('password')) {
        //     $mahasiswa->password = bcrypt($request->input('password'));
        // }

        // Save changes to the Mahasiswa model
        $mahasiswa->save();

        return redirect()
            ->route('dashboard')
            ->with('success', 'Data berhasil diperbarui.');
    } catch (\Exception $e) {
        return redirect()
            ->back()
            ->with('error', 'Terjadi kesalahan: ' . $e->getMessage())
            ->withInput();
    }
}

private function uploadImage($image, $userId)
{
    $currentDate = now();
    $filename = "{$userId}-" . $currentDate->format('d-m-Y-l-H-i-s') . "." . $image->getClientOriginalExtension();

    try {
        // Move the image to the specified directory (e.g., 'public/gambar')
        $image->move(public_path('gambar'), $filename);

        // Set the image path in the user's 'gambar' attribute
        return 'gambar/' . $filename;
    } catch (\Exception $e) {
        // Handle any error that occurs during image upload
        throw new \Exception('Gagal mengunggah gambar: ' . $e->getMessage());
    }
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
