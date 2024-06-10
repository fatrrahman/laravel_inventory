<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index(){
        if(Auth::user())
        {
            return redirect()->intended('/dashboard');
        }

        $data = array(
            'title' => 'Login page',
        );
        return view('index', $data);
    }

    public function cek_login(Request $request)
    {
        $password = $request->input('password');
        $email    = $request->input('email');

        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return redirect()->intended('/dashboard')->with('success', 'Login Berhasil');
        }
        else
        {
            return redirect()->intended('/index')->with('error', 'Email atau Password Salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
