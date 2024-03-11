<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\Sigerprojectuuid;

class Lokasi extends Model
{
    use HasApiTokens, HasFactory, Notifiable, Sigerprojectuuid;

    public $table = "lokasi_kkn";



     /**
      * The attributes that are mass assignable.
      *
      * @var array<int, string>
      */
     protected $fillable = [
         'id',
         'provinsi',
         'kota',
         'kecamatan',
         'desa',
         'alamat',
         'nama',
     ];

     public function provinsiData()
{
    return $this->belongsTo(Province::class, 'provinsi');
}

public function kotaData()
{
    return $this->belongsTo(Regency::class, 'kota');
}

public function kecamatanData()
{
    return $this->belongsTo(District::class, 'kecamatan');
}

public function desaData()
{
    return $this->belongsTo(Village::class, 'desa');
}


    }
