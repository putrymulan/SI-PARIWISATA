<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    use HasFactory;

    Protected $table = 'hotels';

    Protected $fillable = [
        'id_pegawai',
        'nama_hotel',
        'jenis_hotel',
        'alamat',
        'harga',
    ];

    public function Pegawai()
    {
        return $this->belongsTo(pegawai::class, 'id_pegawai');
    }
}