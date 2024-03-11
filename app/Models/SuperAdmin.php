<?php

namespace App\Models;

use App\Traits\Sigerprojectuuid;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class SuperAdmin extends Model implements Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Sigerprojectuuid, AuthenticatableTrait;


    public $table = "superadmin";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'namalengkap',
        'email',
        'password',
        'nohp',
        'aktif',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'token',
    ];
    
}
