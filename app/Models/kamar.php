<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;

    Protected $table = 'kamars';

    Protected $Fillable = [
        'tipe_kamar',
        'no_kamar',
        'jumlah',
        'harga',
    ];
}
