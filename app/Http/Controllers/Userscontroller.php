<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Userscontroller extends Controller
{
    public function showpetugas()
    {
        //
        $users= User::all();
        return view('user.listpetugas', compact('users'));
    }
    
        public function editpetugas(User $id)
    {
        //
        return view('user.edit', data: compact('id'));
    }
}
