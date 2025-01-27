<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswas';
    protected $primaryKey = 'nisn'; 
    public $incrementing = false; 
    protected $keyType = 'string'; 
    protected $fillable = [
        'nisn',
        'nis',
        'nama',
        'id_kelas',
        'alamat',
        'no_telp',
        'id_spp',
    ];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id_kelas');
    }
    public function spp()
    {
        return $this->belongsTo(spp::class, 'id_spp', 'id_spp');
    }
}
