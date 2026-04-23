<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    protected $fillable = [
        'nama',
        'no_antrian',
        'status',
        'created_at',
        'updated_at',
    ];
}