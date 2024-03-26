<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Models\Prodi;
use App\Models\Falkultas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('LoginUser.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function loginAction(Request $request)
    {
        $credentials = $request->validate(
            [
                'login_identifier' => [
                    'required',
                    'string',
                    function ($attribute, $value, $fail) {
                        // Check if the input is a valid email or NPM
                        if (!filter_var($value, FILTER_VALIDATE_EMAIL) && !is_numeric($value)) {
                            $fail('Inputkan email atau password yang benar');
                        }
                    },
                ],
                'password' => 'required',
            ],
            [
                'login_identifier.required' => 'The email or NPM field is required.',
                'login_identifier.string' => 'Isi harus email atau NPM.',
                'password.required' => 'Password Harus Diisi.',
            ],
        );

        // Determine if the login identifier is an email or NPM
        $field = filter_var($credentials['login_identifier'], FILTER_VALIDATE_EMAIL) ? 'email' : (is_numeric($credentials['login_identifier']) ? 'npm' : null);

        $status = 0; // Default status: failed login

        if ($field) {
            if (Auth::guard('web')->attempt([$field => $credentials['login_identifier'], 'password' => $credentials['password']])) {
                $request->session()->regenerate();
                $status = 1; // Login successful
            } else {
                return back()
                    ->withInput()
                    ->withErrors(['loginError' => 'Login gagal! Email, NPM, atau password salah cek kembali.']);
            }
        } else {
            return back()
                ->withInput()
                ->withErrors(['loginError' => 'Invalid input format! Please enter a valid email or NPM.']);
        }

        // Redirect with status
        return redirect()
            ->route('dashboard')
            ->with(['aktif' => $status]);
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect(route('login'));
    }

    public function pengumuman()
    {
        return view('Pengumuman.index');
    }

    public function pendaftaraan()
    {
        $prodix = Prodi::all();
        $fakultasx = Falkultas::all();
        return view('DaftarUser.index', compact('prodix', 'fakultasx'));
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
        // Validasi data
        $request->validate(
            [
                'npm' => 'required|string|unique:mahasiswas,npm|max:255',
                'namalengkap' => 'required|string|max:255',
                'email' => 'required|email|unique:mahasiswas,email',
                'jk' => 'required|string|max:255',
                'nohp' => 'required|string|max:255',
                'gambar' => 'required|image|max:5204', // Ubah sesuai kebutuhan Anda
                'gambarbayar' => 'required|image|max:5204', // Ubah sesuai kebutuhan Anda
                'alamat' => 'required|string|max:255',
                'tempat' => 'required|string|max:255',
                'tgllahir' => 'required|date',
                'fakultas' => 'required|string|max:255',
                'jurusan' => 'required|string|max:255',
                'sizebaju' => 'required|string|max:255',
                'password' => 'required|string|min:8|confirmed',
                'password_confirmation' => 'required|string|min:8',
                'kelas' => 'required|string|in:a,b',
                'customCheck1' => 'required|accepted', // Pastikan checkbox diperiksa
            ],
            [
                'npm.required' => 'Nomor Pokok Mahasiswa wajib diisi',
                'npm.unique' => 'Nomor Pokok Mahasiswa sudah ada',
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
                'tempat.max' => 'Tempat lahir tidak boleh melebihi 255 karakter',
                'tgllahir.required' => 'Tanggal lahir wajib diisi',
                'fakultas.required' => 'Fakultas wajib dipilih',
                'jurusan.required' => 'Jurusan wajib dipilih',
                'gambar.image' => 'File harus berupa Foto',
                'gambar.mimes' => 'Format Foto harus jpeg, png, jpg, atau gif',
                'gambar.max' => 'Ukuran foto maksimal 5MB',
                'gambarbayar.image' => 'File harus berupa Bukti Pembayaran',
                'gambarbayar.mimes' => 'Format Bukti Pembayaran harus jpeg, png, jpg, atau gif',
                'gambarbayar.max' => 'Ukuran Bukti Pembayaran maksimal 5MB',
                'kelas.required' => 'Kelas wajib dipilih',
                'kelas.in' => 'Pilih kelas yang tersedia',
                'customCheck1.required' => 'Anda harus menyetujui syarat dan ketentuan',
                'customCheck1.accepted' => 'Anda harus menyetujui syarat dan ketentuan',
            ],
        );

        // Menyimpan data ke dalam database
        $user = new Mahasiswa();
        $user->npm = $request->npm;
        $user->namalengkap = $request->namalengkap;
        $user->email = $request->email;
        $user->jk = $request->jk;
        $user->nohp = $request->nohp;
        $user->tgllahir = $request->tgllahir;
        $user->tempat = $request->tempat;
        // Proses upload gambar
        // Upload gambar (jika ada)
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $npm = $request->input('npm'); // Mengambil NPM dari input form
            $nama_gambar = $npm . '_' . time() . '.' . $gambar->getClientOriginalExtension(); // Menambahkan NPM ke nama gambar
            $lokasi = public_path('uploads/mahasiswa/foto');
            $gambar->move($lokasi, $nama_gambar);
            $user->gambar = 'uploads/mahasiswa/foto/' . $nama_gambar;
        }
        if ($request->hasFile('gambarbayar')) {
            $gambarbayar = $request->file('gambarbayar');
            $npm = $request->input('npm'); // Mengambil NPM dari input form
            $nama_gambarbayar = $npm . '_' . time() . '.' . $gambarbayar->getClientOriginalExtension(); // Menambahkan NPM ke nama gambarbayar
            $lokasi = public_path('uploads/mahasiswa/bukti');
            $gambarbayar->move($lokasi, $nama_gambarbayar);
            $user->gambarbayar = 'uploads/mahasiswa/bukti/' . $nama_gambarbayar;
        }

        $user->alamat = $request->alamat;
        $user->fakultas = $request->fakultas;
        $user->jurusan = $request->jurusan;
        $user->sizebaju = $request->sizebaju;
        $user->password = bcrypt($request->password);
        $user->kelas = $request->kelas;
        $user->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
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
