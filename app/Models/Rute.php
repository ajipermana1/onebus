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

    public function bus()
    {
        return $this->hasMany(Bus::class);
    }
}