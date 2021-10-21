<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hometown extends Model
{
    use HasFactory;
    public function destinations()
    {
        return $this->belongsToMany(Destination::class);
    }

    public function rutes()
    {
        return $this->hasMany(Rute::class);
    }
}