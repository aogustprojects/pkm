<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;

    protected $fillable = [
        'asal_keluhan',
        'nama_pengirim',
        'email_pengirim',
        'perihal',
        'isi_pesan'
    ];

    protected $casts = [
        'asal_keluhan' => 'string',
    ];
} 