<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\Sigerprojectuuid;

class Kelompok extends Model
{
    use HasApiTokens, HasFactory, Notifiable, Sigerprojectuuid;

    public $table = "kelompok";



     /**
      * The attributes that are mass assignable.
      *
      * @var array<int, string>
      */
     protected $fillable = [
         'id',
         'nokelompok',
         'npm',
         'ketua',
     ];
     
     public function mahasiswa()
     {
         return $this->belongsTo(Mahasiswa::class, 'npm', 'npm');
     }


}
