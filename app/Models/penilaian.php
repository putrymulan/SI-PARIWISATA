<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penilaian extends Model
{
    use HasFactory;

    Protected $table = 'penilaians';

    Protected $Fillable = [
        'komentar',
        'tanggal_penilaian',
    ];
}
