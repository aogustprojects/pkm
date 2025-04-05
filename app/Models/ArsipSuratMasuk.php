<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArsipSuratMasuk extends Model
{
    /** @use HasFactory<\Database\Factories\ArsipSuratMasukFactory> */
    use HasFactory;

    protected $table = 'surat_masuks';

    protected $guarded = ['id'];
    
}
