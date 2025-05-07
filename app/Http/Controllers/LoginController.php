<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showPageLogin()
    {
        return view('login');
    }

    public function Autentikasi(Request $request)
    {
        $HardcodeUsername = 'billie';
        $HardcodePassword = 'billie123';

        if ($request->username === $HardcodeUsername && $request->password === $HardcodePassword) {
            session(['username' => $request->username]);
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->withErrors(['loginError' => 'Username atau Password salah']);
        }
    }
}
