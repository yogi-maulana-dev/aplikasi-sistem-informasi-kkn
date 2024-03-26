<?php

namespace App\Models;

use App\Traits\Sigerprojectuuid;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Tugas extends Model
{
    use HasApiTokens, HasFactory, Notifiable, Sigerprojectuuid;

    public $table = "tugas";



     /**
      * The attributes that are mass assignable.
      *
      * @var array<int, string>
      */
     protected $fillable = [
         'id',
         'kelompoktugas',
         'fotokegiatan',
         'tugas',
     ];
     
     public function mahasiswa()
     {
         return $this->belongsTo(Mahasiswa::class, 'npm', 'npm');
     }

     


}
