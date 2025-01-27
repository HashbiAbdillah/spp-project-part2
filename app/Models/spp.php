<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class spp extends Model
{
    protected $table = 'spps';
    protected $primaryKey = 'id_spp'; 
    public $incrementing = false; 
    protected $keyType = 'integer'; 
    protected $fillable = [
        'id_spp',
        'tahun',
        'nominal',
    ];
    public function siswas()
    {
        return $this->hasMany(siswa::class, 'id_spp', 'id_spp');
    }
}
