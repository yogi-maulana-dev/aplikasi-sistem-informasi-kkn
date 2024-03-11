<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\Sigerprojectuuid;

class Falkultas extends Model
{
    use HasApiTokens, HasFactory, Notifiable, Sigerprojectuuid;

    public $table = "fakultas";



     /**
      * The attributes that are mass assignable.
      *
      * @var array<int, string>
      */
     protected $fillable = [
         'id',
         'nama',
     ];
}
