<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
    public function showpetugas()
    {
        $users= User::all();
        return view('user.listpetugas', compact('users'));
    }

}
