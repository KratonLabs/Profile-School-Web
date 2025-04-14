<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request) {
        // dd($request);
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string|min:6',
         ]);


         if (Auth::attempt($request->only('email', 'password'))) {

            if (Auth::user()) {
                session()->flash('swal', [
                    'title' => 'Berhasil!',
                    'text' => 'Selamat Datang di Dashboard Admin.',
                    'icon' => 'success'
                ]);

                return redirect()->route('dashboard');
            }
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Email dan Password anda tidak ada dalam sistem.',
                'icon' => 'error'
            ]);
            return redirect('/login');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        // Hapus session
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');

    }
}
