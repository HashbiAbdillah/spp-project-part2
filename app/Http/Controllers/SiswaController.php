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
        $siswas= siswa::with('kelas')->get();
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
        $request->validate([
            'nisn' => 'required|string|max:10|unique:siswas,nisn',
            'nis' => 'required|string|max:8',
            'nama' => 'required|string|max:35',
            'id_kelas' => 'required|integer',
            'alamat' => 'nullable|string',
            'no_telp' => 'nullable|string|max:13',
            'id_spp' => 'required|integer',
        ]);
 
        $siswa = new Siswa();
        $siswa->nisn = $request->input('nisn');
        $siswa->nis = $request->input('nis');
        $siswa->nama = $request->input('nama');
        $siswa->id_kelas = $request->input('id_kelas');
        $siswa->alamat = $request->input('alamat');
        $siswa->no_telp = $request->input('no_telp');
        $siswa->id_spp = $request->input('id_spp');
    
        $siswa->save();

        return redirect()->route('siswa.tampil')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function viewsiswa(siswa $nisn)
    {
        return view('siswa.viewsiswa', data: compact('nisn'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editsiswa(siswa $nisn)
    {
        $siswa = siswa::all();
        $kelas = kelas::all(); 
        $spp = spp::all(); 
        return view('siswa.editsws', compact('nisn', 'kelas', 'spp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatesiswa(Request $request, siswa $nisn)
    {   
    // Validasi data
    $request->validate([
        'nis' => 'required|string',
        'nama' => 'required|string',
        'id_kelas' => 'required|integer',
        'alamat' => 'nullable|string',
        'no_telp' => 'nullable|string',
        'id_spp' => 'required|integer',
    ]);

    $nisn->update([
        'nis' => $request->input('nis'),
        'nama' => $request->input('nama'),
        'id_kelas' => $request->input('id_kelas'),
        'alamat' => $request->input('alamat'),
        'no_telp' => $request->input('no_telp'),
        'id_spp' => $request->input('id_spp'),
    ]);
    
    return redirect()->route('siswa.tampil', $nisn)->with('success', 'Data siswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function siswadestroy(siswa $nisn)
    {
        $nisn->delete();
    
        return redirect()->route('kelas.tampil')
                ->with('success','Data berhasil di hapus' );
    }
}
