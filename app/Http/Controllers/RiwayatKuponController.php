<?php

namespace App\Http\Controllers;

use App\Models\RiwayatKupon;
use Illuminate\Http\Request;

class RiwayatKuponController extends Controller
{
    public function index(){
        return view('dashboard/kupon/riwayat',[
            'kupon' => RiwayatKupon::latest()->where('user_id', auth()->user()->id)->paginate(7)->withQueryString(),
            'active' => 'register',
            'title' => 'register'
        ]);
    }
}
