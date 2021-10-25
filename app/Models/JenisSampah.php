<?php

namespace App\Models;

use App\Models\Kolega;
use App\Models\RiwayatAntar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisSampah extends Model
{
    protected $guarded = ['id']; 

    use HasFactory;

    public function kolega(){
        return $this->hasMany(Kolega::class);
    }

    public function riwayatAntar(){
        return $this->hasMany(RiwayatAntar::class);
    }

}
