<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RuangOperasi extends Model
{
    use HasFactory;

    protected $guarded=[
        'id'
    ];

    public function dokter(){
        return $this->belongsTo(dokter::class,'dokter_id');
}
public function pasien(){
    return $this->belongsTo(pasien::class,'pasien_id');
}
public function alat(){
    return $this->belongsTo(Alat_Kesehatan::class,'alat_id');
}
}
