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
        return redirect('/dashboard')->with('edit','data kamu berhasil diedit');
    
    }

    public function claimVoucher(Request $request)
    {
        $poin = $request->poin;
        $poinKupon = $request->poinKupon;
        $kuponId = $request->kuponId;

        if ($poin < $poinKupon) {
            return redirect('/dashboard')->with('kurang', 'poin kamu kurang nih!');
        } else {

            $poinSekarang = $poin - $poinKupon;

            $updatePoin = DB::table('jumlah_poins')->where('user_id',auth()->user()->id)->update([
                'poin' => $poinSekarang
            ]);

            $updateRiwayatPoin = RiwayatPoin::create([
                'user_id' => auth()->user()->id,
                'pengeluaran' => $poinKupon,
                'sisa' => $poinSekarang
            ]);

            $updateKupon = RiwayatKupon::create([
                'user_id' => auth()->user()->id,
                'kupon_id' => $kuponId,
                'kode' => Str::random(10),
                'status_id' => 1
            ]);

            return redirect('/dashboard')->with('berhasil', 'klaim kamu berhasil');

        }
    }
}
