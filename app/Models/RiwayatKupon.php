<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKupon extends Model
{
    protected $guarded = ['id']; 
    
    use HasFactory;

    public function kupon(){
        return $this->belongsTo(Kupon::class,'kupon_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
