<?php

namespace App\Models;

use App\Models\JenisSampah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kolega extends Model
{
    protected $guarded = ['id']; 

    use HasFactory;

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, fn($query, $search)=>
            $query->where('nama_kolega', 'like', '%' . $search . '%')
        );
        
        $query->when($filters['jenis_sampah'] ?? false, fn($query, $jenis_sampah)=>
            $query->whereHas('jenis_sampah', fn($query)=>
            $query->where('slug', $jenis_sampah)
            )
        );
    }

    public function jenis_sampah(){
        return $this->belongsTo(JenisSampah::class);
    }
}
