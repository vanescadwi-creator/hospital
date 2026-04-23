<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'password',
        'role',
       
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
