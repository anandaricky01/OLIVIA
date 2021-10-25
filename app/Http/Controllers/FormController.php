<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function send(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'deskripsi' => 'required|min:5|max:255'
        ]);

        Form::create($validatedData);

        $request->session()->flash('terkirim', 'Pesan kamu udah dikirim!');

        return view('landingPage',[
            'title' => 'Sampah Juga Berharga',
            'active' => 'beranda'
        ]);
    }
}
