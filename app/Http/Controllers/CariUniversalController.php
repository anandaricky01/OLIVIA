<?php

namespace App\Http\Controllers;

use App\Models\Kolega;
use App\Models\Artikel;
use App\Models\Konten;
use Illuminate\Http\Request;

class CariUniversalController extends Controller
{
    public function index(Request $request){
        $search = $request->search;
        $artikel = Artikel::latest()->where('title','like','%' . $search . '%')->paginate(3);
        $kolega = Kolega::latest()->where('nama_kolega','like','%' . $search . '%')->paginate(3);
        $konten = Konten::latest()->where('konten','like','%' . $search . '%')->paginate(7);

        

        return view('cari',[
            'title' => 'Cari',
            'artikel' => $artikel,
            'kolega' => $kolega,
            'konten' => $konten
        ]);

    }
}
