<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('Login',[
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password'=> 'required|min:5|max:255',
        ]);

        if(Auth::attempt($credentials)){
            $request>session()->regenerate();
            if(Auth::user()->Role == 2)
            {
                return redirect()->intended('/Home');
            }
            return redirect()->intended('/Home');
        }
        return back()->with('loginError','Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->intended('/LogOut');
    }
}
