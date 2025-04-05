<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliGigiRujukan extends Model
{
    /** @use HasFactory<\Database\Factories\PoliGigiRujukanFactory> */
    use HasFactory;

    protected $table = 'poli_gigi_rujukan';

    protected $guarded = ['id'];
}
