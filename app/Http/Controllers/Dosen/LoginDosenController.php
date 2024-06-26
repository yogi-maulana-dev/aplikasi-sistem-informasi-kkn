<?php

namespace App\Http\Controllers\Dosen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('LoginDosen.index', ['judul' => 'Dosen']);
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

    public function loginAction(Request $request)
    {
        $credentials = $request->validate([
            'login_identifier' => ['required', 'string', function ($attribute, $value, $fail) {
                // Check if the input is a valid email or NPM
                if (!filter_var($value, FILTER_VALIDATE_EMAIL) && !is_numeric($value)) {
                    $fail('The '.$attribute.' must be a valid email or NPM.');
                }
            }],
            'password' => 'required',
        ], [
            'login_identifier.required' => 'The email or NPM field is required.',
            'login_identifier.string' => 'Isi harus email atau NPM.',
            'password.required' => 'Password Harus Diisi.',
        ]);
    
        // Determine if the login identifier is an email or NPM
        $field = filter_var($credentials['login_identifier'], FILTER_VALIDATE_EMAIL) ? 'email' : (is_numeric($credentials['login_identifier']) ? 'nip' : null);
    
        if ($field && Auth::guard('dosen')->attempt([$field => $credentials['login_identifier'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
    
            return redirect()->intended(route('dosen.home'));
        }
    
        return back()->withInput()->withErrors(['loginError' => 'Login gagal! Email, NPM, atau password salah cek kembali.']);
    }

    public function logout()
    {
        Auth::guard('dosen')->logout(); // Use the 'dosen' guard for logout
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect(route('dosen.login'));
    }
    
}
