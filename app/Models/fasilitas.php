<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    use HasFactory;

    Protected $table = 'fasilitases';

    Protected $Fillable = [
        'id_kamar',
        'id_tempatwisata',
    ];
}
