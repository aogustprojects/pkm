<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliGigi extends Model
{
    use HasFactory;

    protected $table = 'poli_gigi'; // Define the table name if it's different from Laravel's default naming convention

    protected $guarded = ['id'];
}
