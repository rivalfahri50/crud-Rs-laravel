<?php
namespace App\Models;

use App\Models\pasien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class no_antrian extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'no_antrian',
        'nama',
        'tgl_berobat',
    ];
    public function pasien(){
        return $this->hasMany(pasien::class, 'no_antrian');
    }
}
