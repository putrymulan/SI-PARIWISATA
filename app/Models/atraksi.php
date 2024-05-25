<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class atraksi extends Model
{
    use HasFactory;

    Protected $table = 'atraksis';

    Protected $Fillable = [
        'nama_atraksi',
        'jenis_atraksi',
        'tarif_atraksi',
    ];
}