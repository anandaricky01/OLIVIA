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
            $user = User::firstWhere('username', request('user'));
            $title = ' by ' . $user->name;
        }

        return view('artikel', [
            "title" => "Artikel " . $title,
            "artikel" => Artikel::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString(),
            "listCategory" => Category::all()
        ]);
    }

    public function show( Artikel $artikel ){
        return view('artikelSingle',[
            "title" => $artikel->title,
            "artikel" => $artikel
        ]);
    }
}