<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tempat_wisata extends Model
{
    use HasFactory;

    Protected $table = 'tempat_wisatas';

    Protected $Fillable = [
        'lokasi',
        'fasilitas',
        'jam_kerja',
    ];
}
