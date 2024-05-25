<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;

    Protected $table = 'pemesanans';

    Protected $Fillable = [
        'nama_pengunjung',
        'alamat_pengunjung',
        'no_telp',
        'tanggal_pemesanan',
        'total_transaksi',
    ];
}
