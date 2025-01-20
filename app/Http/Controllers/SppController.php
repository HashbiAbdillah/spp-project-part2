<?php

namespace App\Http\Controllers;

use App\Models\spp;
use Illuminate\Http\Request;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showspp()
    {
        $spps= spp::all();
        return view('spp.viewspp', compact('spps'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function sppregis()
    {
        return view('spp.bayar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function submitsppregis(Request $request)
    {
        $request->validate([
            'id_spp' => 'required|integer',
            'tahun' => 'required|integer',
            'nominal' => 'nullable|integer',
        ]);
    
        $spp = new spp();
        $spp->id_spp = $request->input('id_spp');
        $spp->tahun = $request->input('tahun');
        $spp->nominal = $request->input('nominal');
    
        $spp->save();
    
        return redirect()->route('spp.tampil')->with('success', 'Data kelas berhasil ditambahkan.');
        }
    

    /**
     * Display the specified resource.
     */
    public function show(spp $spp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(spp $spp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, spp $spp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(spp $spp)
    {
        //
    }
}
