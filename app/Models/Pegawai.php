<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'nama',
        'nip',
        'golongan',
        'tmt_golongan',
        'jabatan',
        'tmt_jabatan',
        'tmt_cpns',
        'tmt_pns_pppk',
        'pendidikan',
        'tahun_lulus',
        'tmt_mutasi',
        'tgl_lahir',
        'umur',
        'status_perkawinan',
        'photo_url',
        'touched_at'
    ];

    protected $casts = [
        'tmt_golongan' => 'date',
        'tmt_jabatan' => 'date',
        'tmt_cpns' => 'date',
        'tmt_pns_pppk' => 'date',
        'tmt_mutasi' => 'date',
        'tgl_lahir' => 'date',
        'touched_at' => 'datetime',
    ];

    protected static function booted()
    {
        static::saving(function ($pegawai) {
            $pegawai->touched_at = now();
        });
    }
}
