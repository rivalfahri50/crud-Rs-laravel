<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
class pasien extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'no_antrian',
        'keluhan',
    ];
}
