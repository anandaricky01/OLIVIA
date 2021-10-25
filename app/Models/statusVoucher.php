<?php

namespace App\Models;

use App\Models\RiwayatKupon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statusVoucher extends Model
{
    protected $guarded = ['id'];

    public function kupon(){
        return $this->hasMany(RiwayatKupon::class);
    }
}
