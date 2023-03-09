<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Auth;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
     $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

     if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        auth()->user()->update([
            'logged_at' => Carbon::now()
        ]);

        activity()->log('oturum açtı');

        return redirect()->route('app.dashboard');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}

public function logout()
{
    activity()->log('çıkış yaptı');

    Auth::logout();

    return redirect()->route('login');
}
}
