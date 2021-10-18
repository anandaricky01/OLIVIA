<?php

namespace App\Http\Controllers;

use App\Models\RiwayatKupon;
use Illuminate\Http\Request;

class RiwayatKuponController extends Controller
{
    public function index(){
        return view('dashboard/kupon/riwayat',[
            'kupon' => RiwayatKupon::select("*")->where("user_id", auth()->user()->id)->orderByDesc("created_at")->get(),
            'active' => 'register',
            'title' => 'register'
        ]);
    }
}
