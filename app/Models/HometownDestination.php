<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class HometownDestination extends Pivot
{
    //
    protected $table      = 'hometown_destination';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function Bus()
    {
        return $this->hasMany(Bus::class);
    }
}