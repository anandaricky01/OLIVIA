<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Artikel;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'user_id',
        'role_id',
        'email',
        'password',
    ];

        // protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function artikel(){
        return $this->hasMany(Artikel::class);
    }

    public function role(){
        return $this->belongsTo(Role::class,'role_id');
    }

    public function poin(){
        return $this->belongsTo(JumlahPoin::class);
    }

    public function riwayatPoin(){
        return $this->hasMany(RiwayatPoin::class);
    }

    public function riwayatKupon(){
        return $this->hasMany(RiwayatKupon::class);
    }

    public function riwayatAntar(){
        return $this->hasMany(RiwayatAntar::class);
    }
}
