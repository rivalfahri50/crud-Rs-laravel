<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class dokter extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'image',
        'jenis_kelamin',
        'tgl_lahir',
    ];

}
