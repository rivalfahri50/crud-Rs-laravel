<?php

namespace App\Models;

use App\Models\RuangOperasi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class dokter extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function dokter(){
        return $this->hasMany(RuangOperasi::class, 'dokter_id');
    }

}
