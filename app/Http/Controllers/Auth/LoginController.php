<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Anda perlu membuat file view untuk halaman login
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil login
            return redirect()->intended('/'); // Ganti '/' dengan rute yang Anda inginkan
        }

        // Jika gagal login, simpan pesan error di session
        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();  // Menghapus sesi pengguna
        $request->session()->invalidate();  // Invalidasi sesi
        $request->session()->regenerateToken();  // Regenerate token sesi

        return redirect('/');
    }
}
