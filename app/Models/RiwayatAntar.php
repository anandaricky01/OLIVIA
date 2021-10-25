<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatAntar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function user(){
        return $this->belongsTo(User::class,'kupon_id');
    }

    public function jenis_sampah(){
        return $this->belongsTo(JenisSampah::class,'kupon_id');
    }
}
