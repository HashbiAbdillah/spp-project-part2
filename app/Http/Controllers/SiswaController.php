<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\Kelas;
use App\Models\spp;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showsiswa()
    {
        $siswas= siswa::all();
        return view('siswa.listsiswa', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function siswaregis()
    {
        $kelas = Kelas::all(); 
        $spp = Spp::all();
        return view('siswa.addsiswa', compact('kelas','spp'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function submitsiswaregis(Request $request)
    {
        // Validasi data
        $request->validate([
            'nisn' => 'required|string|max:10|unique:siswas,nisn',
            'nis' => 'required|string|max:8',
            'nama' => 'required|string|max:35',
            'id_kelas' => 'required|integer',
            'alamat' => 'nullable|string',
            'no_telp' => 'nullable|string|max:13',
            'id_spp' => 'required|integer',
        ]);
    
        // Buat instance baru dari model Siswa
        $siswa = new Siswa();
        $siswa->nisn = $request->input('nisn');
        $siswa->nis = $request->input('nis');
        $siswa->nama = $request->input('nama');
        $siswa->id_kelas = $request->input('id_kelas');
        $siswa->alamat = $request->input('alamat');
        $siswa->no_telp = $request->input('no_telp');
        $siswa->id_spp = $request->input('id_spp');
    
        // Simpan data ke database
        $siswa->save();
    
        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('siswa.tampil')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(siswa $siswa)
    {
        //
    }
}
