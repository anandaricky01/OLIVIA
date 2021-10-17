<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kupon extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function riwayatKupon(){
        return $this->hasMany(RiwayatKupon::class);
    }
}
