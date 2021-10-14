<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TerminalAsal extends Model
{
    protected $table      = 'terminal_asal';
    protected $primaryKey = 'id';

    protected $guarded = [];
    use HasFactory;
    public function hometowns()
    {
        return $this->belongsTo(Hometown::class);
    }
}