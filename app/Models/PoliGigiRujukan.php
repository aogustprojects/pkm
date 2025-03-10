<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PoliGigiRujukan extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'rujukan';

    // If you don't want timestamps (created_at, updated_at), set this to false
    public $timestamps = true;

    protected $guarded = ['id'];
}
