<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArsipSuratKeluar extends Model
{
    /** @use HasFactory<\Database\Factories\ArsipSuratKeluarFactory> */
    use HasFactory;

    protected $table = 'surat_keluars';

    protected $guarded = ['id'];
}
