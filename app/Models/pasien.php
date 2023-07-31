<?php

namespace App\Models;

use App\Models\no_antrian;
use App\Models\RuangOperasi;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pasien extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',

    ];
    public function antrian(){
        return $this->belongsTo(no_antrian::class, 'antrian_id');
    }
    public function pasien(){
        return $this->hasMany(RuangOperasi::class, 'pasien_id');
    }
}
