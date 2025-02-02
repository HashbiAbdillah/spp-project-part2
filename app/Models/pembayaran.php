<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $table = 'pembayarans';
    protected $primaryKey = 'id_pembayaran'; 
    public $incrementing = true; 
    protected $keyType = 'unsignedBigInteger'; 
    protected $fillable = [
        'id',
        'nisn',
        'bulan_dibayar',
        'tahun_dibayar',
        'id_spp',
        'jumlah_bayar',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }
    public function siswas()
    {
        return $this->belongsTo(siswa::class, 'nisn', 'nisn');
    }
}
