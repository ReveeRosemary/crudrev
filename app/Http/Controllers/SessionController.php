<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\User;

class SessionController extends Controller
{
    public function index(){
        return view('sesi/index');
    }
    public function login (Request $request) {
        Session::flash('email', $request->email);

        $request->validate ([
            'email' => 'required',
            'password' => 'required',
        ]);
        [
            'email'=>'Email Harus Diisi',
            'password'=>'Password Harus Diisi',
        ];

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($infologin)) {
            return redirect('dosen')->with('success', 'Berhasil Login');
        } else {
            return redirect('sesi')->with('success', 'Username atau Password Salah');
        }
    }
    
    public function logout(){
        Auth::logout();
        return redirect('dosen')->with('success', 'Berhasil Logout');
    }
}
