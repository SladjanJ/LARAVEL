<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Korisnik je uspješno prijavljen
            return redirect()->intended('/dashboard');
        } else {
            // Pogrešni korisnički podaci, prikaz greške
            return redirect()->back()->withErrors(['error' => 'Pogrešno korisničko ime ili lozinka.']);
        }
    }
}

