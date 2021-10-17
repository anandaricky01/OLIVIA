<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function send(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'deskripsi' => 'required|min:5|max:255'
        ]);

        Form::create($validatedData);

        $request->session()->flash('success', 'Pesan kamu udah dikirim!');

        return view('landingPage',[
            'title' => 'Sampah Juga Berharga',
            'active' => 'home'
        ]);
    }
}
