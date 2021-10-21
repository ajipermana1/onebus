<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    public function hometowns()
    {
        return $this->belongsToMany(Hometown::class);
    }
    public function terminalTujuan()
    {
        return $this->hasMany(TerminalTujuan::class);
    }
    public function rutes()
    {
        return $this->hasMany(Rute::class);
    }
}