<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    // fillable
    protected $fillable = [
        'nama',
        'status',
        'code_join',
        'created_by',
    ];
}
