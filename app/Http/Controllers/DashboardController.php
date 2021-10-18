<?php

namespace App\Http\Controllers;

use App\Models\Kupon;
use App\Models\RiwayatPoin;
use App\Models\RiwayatKupon;
use App\Models\JumlahPoin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function view(){
        return view('dashboard/index',[
            'kupon' => Kupon::all()
        ]);
    }

    public function ubahData(Request $request)
    {
        $dataValid = DB::table('users')->where('id',auth()->user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat
        ]);
        // passing data pegawai yang didapat ke view edit.blade.php
        return redirect('/dashboard');
    
    }

    public function claimVoucher(Request $request)
    {
        $poin = $request->poin;
        $poinKupon = $request->poinKupon;
        $kuponId = $request->kuponId;
        if ($poin < $poinKupon) {
            redirect('/dashboard')->with('gagal', 'kupon kamu kurang!');
        } 

        $poinSekarang = $poin - $poinKupon;

        $updatePoin = DB::table('jumlah_poins')->where('user_id',auth()->user()->id)->update([
            'poin' => $poinSekarang
        ]);

        $updateRiwayatPoin = RiwayatPoin::create([
            'user_id' => auth()->user()->id,
            'pengeluaran' => $poinKupon,
            'sisa' => $poin
        ]);

        $updateKupon = RiwayatKupon::create([
            'user_id' => auth()->user()->id,
            'kupon_id' => $kuponId,
            'kode' => Str::random(10)
        ]);

        return redirect('/dashboard');


    }
}
