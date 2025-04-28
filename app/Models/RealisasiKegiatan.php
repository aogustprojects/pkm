<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RealisasiKegiatan extends Model
{
    use HasFactory;

    protected $table = 'realisasi_kegiatans';

    protected $casts = [
        'goals' => 'array',
        'target_bulanan' => 'array', // Cast target_bulanan as an array
    ];

    protected $guarded = ['id'];

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id', 'id');
    }
}