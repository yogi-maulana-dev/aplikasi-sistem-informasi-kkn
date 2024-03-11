<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use App\Traits\Sigerprojectuuid;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Prodi extends Model
{
    use HasApiTokens, HasFactory, Notifiable, Sigerprojectuuid;

    public $table = "prodi";



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
