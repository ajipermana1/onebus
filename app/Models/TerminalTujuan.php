<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TerminalTujuan extends Model
{
    protected $table      = 'terminal_tujuan';
    protected $primaryKey = 'id';

    protected $guarded = [];
    use HasFactory;
    public function destinations()
    {
        return $this->belongsTo(Destination::class);
    }
}