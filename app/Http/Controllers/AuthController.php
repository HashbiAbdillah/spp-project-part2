<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showregis(){
        return view('user.registrasi');
    }

    public function submitregis(Request $request) 
    {
        $users = new User(); 
        $users->name = $request->name;
        $users->username = $request->username;
        $users->password = bcrypt($request->password) ;
        $users->level = $request->level;
        $users->save();
        // dd($users);
        return redirect()->route('petugas.tampil');


    }
    
    
    public function showLoginForm()
    {
        return view('home.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return redirect()->back()->withErrors([
            'login' => 'Username atau kata sandi salah',
        ])->withInput($request->only('username'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
