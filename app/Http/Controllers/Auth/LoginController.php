<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('Auth.login-request');
    }
public function store(Request $request)
{
        $loginMessages = [
            'loginEmail.required' => 'The email field is required.',
            'loginEmail.email' => 'The email must be a valid email address.',
            'loginPassword.required' => 'The password field is required.',
        ];

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], $loginMessages);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/dashboard');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->withInput($request->only('email'));
}

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
