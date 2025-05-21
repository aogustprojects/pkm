<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
    'tmt_golongan' => 'date',
    'tmt_jabatan' => 'date',
    'tmt_cpns' => 'date',
    'tmt_pns_pppk' => 'date',
    'tmt_mutasi' => 'date',
    'tgl_lahir' => 'date',
    ];
}
