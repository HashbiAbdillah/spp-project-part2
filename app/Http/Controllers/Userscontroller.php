<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function showpetugas()
    {
        $users= User::all();
        return view('user.listpetugas', compact('users'));
    }
    
        public function editpetugas(User $id)
    {
        //
        return view('user.edit', data: compact('id'));
    }
    public function updatepetugas(Request $request, User $id)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
            'level' => 'nullable|string',
        ]);

        
        $id->update([
            'name' => $request->input('name'),
            'password' => $request->input('password'),
            'level' => $request->input('level'),
        ]);

        return redirect()->route('petugas.tampil');
    }
    public function viewpetugas(User $id)
    {
        //
        return view('user.view', data: compact('id'));
    }

    public function petugasdestroy(User $id)
{
    $id->delete();
    
    return redirect()->route('petugas.tampil')
            ->with('success','Data berhasil di hapus' );
}
}
