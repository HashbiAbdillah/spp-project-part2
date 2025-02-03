<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\siswa;
use App\Models\kelas;
use App\Models\pembayaran;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahPetugas = User::count();
        $jumlahSiswa = siswa::count();
        $jumlahKelas =  kelas::count();
        $jumlahPembayaran = pembayaran::count();

        return view('home.dashboard', compact('jumlahPetugas', 'jumlahSiswa', 'jumlahKelas','jumlahPembayaran'));
    }
   
}
