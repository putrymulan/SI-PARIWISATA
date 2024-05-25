<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;

    Protected $table = 'pegawais';

    Protected $fillable = [
        'nama_pegawai',
        'username',
        'password',
        'no_telp',
        'alamat',
    ];
}
