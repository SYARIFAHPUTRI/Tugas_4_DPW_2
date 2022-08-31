<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
    function showlogin(){
        return view('template.login');
    }

    function showregister(){
        return view('template.login');
    }

    function logout(){
        Auth()->logout();
        return redirect('welcome');
    }

    function loginProcess(){
        if(Auth()->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('dashboard')->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Silahkan cek Email dan password anda');
        }
    }
}