<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    public $incrementing = false; // kalo ga auto increment
    protected $primaryKey = 'id_kelas';  // primary key
    protected $fillable = [
        'id_kelas',
        'nama_kelas',
        'kompetensi_keahlian',
    ];
     
}
