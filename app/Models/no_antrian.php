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
        'nama',
        'tgl_berobat',
    ];

      protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $lastNoAntrian = self::orderByDesc('no_antrian')->value('no_antrian');
            $model->no_antrian = $lastNoAntrian + 1;
        });
    }
    public function pasien(){
        return $this->hasMany(pasien::class, 'no_antrian');

    }
}
