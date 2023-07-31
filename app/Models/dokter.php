<?php

namespace App\Models;

use App\Models\RuangOperasi;
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
    public function ruang(){
        return $this->hasMany(RuangOperasi::class, 'nama');
    }

}
