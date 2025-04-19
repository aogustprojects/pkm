<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatans';

    protected $guarded = ['id'];

    public function realisasi()
    {
        return $this->hasMany(RealisasiKegiatan::class, 'kegiatan_id', 'id');
    }
}
