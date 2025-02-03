<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\user;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showpembayaran()
    {
        $pembayarans= pembayaran::all();
        return view('pembayaran.tabelbayar', compact('pembayarans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function pembayaranregis()
    {
        $siswas = siswa::with('spp')->get();;
        $user = user::all();
        return view('pembayaran.formbayar', compact('siswas','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function submitpembayaranregis(Request $request)
    {
        
        //   dd($request) ; 
            $request->validate([
                'nisn' => 'required',
                'bulan_dibayar' => 'required',
                'tahun_dibayar' => 'required',
                'id_spp' => 'required',
                'jumlah_bayar' => 'required',
            ]);
    
            $pembayaran = new Pembayaran();
            $pembayaran->id = Auth::user()->id;
            $pembayaran->nisn = $request->input('nisn');
            $pembayaran->bulan_dibayar = $request->input('bulan_dibayar');
            $pembayaran->tahun_dibayar = $request->input('tahun_dibayar');
            $pembayaran->id_spp = $request->input('id_spp');
            $pembayaran->jumlah_bayar = $request->input('jumlah_bayar');
            $pembayaran->save();
            
            return redirect()->route('pembayaran.tabelbayar')->with('success', 'Pembayaran berhasil ditambahkan');
        
    }
    /**
     * Display the specified resource.
     */
    public function show(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pembayaran $pembayaran)
    {
        //
    }
}
