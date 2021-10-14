<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $table      = 'bus';
    protected $primaryKey = 'id';

    protected $guarded = [];
    public function hometown_destinations()
    {
        return $this->belogsTo(HometownDestination::class);
    }
    public function rute()
    {
        return $this->belongsTo(Rute::class);
    }
}