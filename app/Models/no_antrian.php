<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class no_antrian extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_antrian',
        'nama',
        'tgl_berobat',
    ];
}
