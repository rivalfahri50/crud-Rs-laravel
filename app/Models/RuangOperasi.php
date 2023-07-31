<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RuangOperasi extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function dokter(){
        return $this->belongsTo(dokter::class,'nama_dokter');
}
public function pasien(){
    return $this->belongsTo(pasien::class,'nama_pasien');
}
public function alat(){
    return $this->belongsTo(Alat_Kesehatan::class,'nama_alat');
}
}
