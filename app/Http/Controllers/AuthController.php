<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showSignInForm()
    {
        return view('signin');
    }

    public function processSignIn(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/')->with('success', 'Sign In berhasil!');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function showSignUpForm()
    {
        return view('signup');
    }

    public function processSignUp(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect('/sign-in')->with('success', 'Akun berhasil dibuat! Silakan masuk.');
    }
}
