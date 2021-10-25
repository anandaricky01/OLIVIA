<?php

namespace App\Http\Controllers;

use App\Models\JenisSampah;
use App\Models\Kolega;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KolegaController extends Controller
{
    public function index(){

        return view('kolega', [
            "title" => "Kolega",
            "kolega" => Kolega::latest()->filter(request(['search', 'jenis_sampah']))->paginate(5)->withQueryString(),
            "jenis" => JenisSampah::all(),
            'active' => 'artikel'
        ]);
    }

}
