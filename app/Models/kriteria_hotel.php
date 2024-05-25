<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteria_hotel extends Model
{
    use HasFactory;

    Protected $table = 'kriteria_hotels';

    Protected $Fillable = [
        'nama_tamu',
        'nilai',
    ];
}
