<?php

namespace App\Models;

use App\Models\RuangOperasi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alat_Kesehatan extends Model
{
    use HasFactory;
    protected $guarded=[
        'id'
    ];
    public function alat(){
        return $this->hasMany(RuangOperasi::class, 'alat_id');
    }
}
