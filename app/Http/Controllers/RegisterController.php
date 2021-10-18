<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\JumlahPoin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;

class RegisterController extends Controller
{
    public function index(){
        return view('register/index',[
            'title' => 'register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role_id'] = 1;
        $userIdNext = User::latest('id')->get();
        $validatedData['poin_id'] = $userIdNext[0]->id + 1;
        User::create($validatedData);
        JumlahPoin::create([
            'user_id' => $validatedData['poin_id'],
            'poin' => 0
        ]);

        $request->session()->flash('success', 'Pendaftaran berhasil');

        return redirect('/login');
    }
}
