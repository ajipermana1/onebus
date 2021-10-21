<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;

class HometownDestination extends Model
{
    //
    protected $table      = 'hometown_destination';
    protected $primaryKey = 'id';

    protected $guarded = [];
}