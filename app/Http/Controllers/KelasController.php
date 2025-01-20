<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showkelas()
    {
        $kelas= kelas::all();
        return view('kelas.listkelas', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function submitklsregis(Request $request)
    {
    $request->validate([
        'id_kelas' => 'required|string',
        'nama_kelas' => 'required|string',
        'kompetensi_keahlian' => 'nullable|string',
    ]);

    $kelas = new Kelas();
    $kelas->id_kelas = $request->input('id_kelas');
    $kelas->nama_kelas = $request->input('nama_kelas');
    $kelas->kompetensi_keahlian = $request->input('kompetensi_keahlian');

    $kelas->save();

    return redirect()->route('kelas.tampil')->with('success', 'Data kelas berhasil ditambahkan.');
    }    
      
    public function klsregis()
    {
        return view('kelas.tmbhkls');
    }

    /**
     * Display the specified resource.
     */
    public function viewkelas(kelas $id_kelas)
    {
        //
        return view('kelas.viewkls', data: compact('id_kelas'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function editkelas(kelas $id_kelas)
    {
        //
        return view('kelas.editkls', data: compact('id_kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatekelas(Request $request, kelas $id_kelas)
    {
    $request->validate([
        'id_kelas' => 'required|string',
        'nama_kelas' => 'required|string',
        'kompetensi_keahlian' => 'nullable|string',
    ]);

    $id_kelas->update([
        'id_kelas' => $request->input('id_kelas'),
        'nama_kelas' => $request->input('nama_kelas'),
        'kompetensi_keahlian' => $request->input('kompetensi_keahlian'),
    ]);

    return redirect()->route('kelas.tampil')->with('success', 'Data kelas berhasil ditambahkan.');
    }  

    /**
     * Remove the specified resource from storage.
     */
    public function kelasdestroy(kelas $id_kelas)
    {
        $id_kelas->delete();
    
        return redirect()->route('kelas.tampil')
                ->with('success','Data berhasil di hapus' );
    }
}
