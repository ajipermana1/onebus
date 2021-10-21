<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;
    protected $table      = 'hometown_destination';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function buses()
    {
        return $this->hasMany(Bus::class);
    }
    public function destinations()
    {
        return $this->belongsTo(Destination::class, 'id_kota_tujuan');
    }
    public function hometowns()
    {
        return $this->belongsTo(Hometown::class, 'id_kota_asal');
    }
}