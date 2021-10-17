<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Category;
use App\Models\User;

class ArtikelController extends Controller
{
    public function index(){

        $title = '';

        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('user')){
            $user = User::firstWhere('name', request('user'));
            $title = ' by ' . $user->name;
        }

        return view('artikel', [
            "title" => "Artikel " . $title,
            "artikel" => Artikel::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString(),
            "listCategory" => Category::all(),
            'active' => 'artikel'
        ]);
    }

    public function show( Artikel $artikel ){
        return view('artikelSingle',[
            "title" => $artikel->title,
            "artikel" => $artikel,
            "artikelLain" => Artikel::select("*")->where("category_id", mt_rand(1,5))->orderByDesc("id")->get(),
            'active' => 'artikel'
        ]);
    }
}
