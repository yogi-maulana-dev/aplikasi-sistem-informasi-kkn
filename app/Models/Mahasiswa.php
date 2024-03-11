<?php

namespace App\Models;

use App\Traits\Sigerprojectuuid;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable; // Import kontrak Authenticatable

class Mahasiswa extends Model implements Authenticatable // Implementasi kontrak Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Sigerprojectuuid;

    protected $table = 'mahasiswas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'npm',
        'namalengkap',
        'email',
        'password',
        'nohp',
        'jk',
        'alamat',
        'fakultas',
        'jurusan',
        'gambar',
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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Metode yang diperlukan untuk memenuhi kontrak Authenticatable
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }


}
