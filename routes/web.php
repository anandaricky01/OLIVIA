<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){
    return view('landingPage',[
        'title'=>'Home'
    ]);
});

Route::get('/about',function(){
    return view('about',[
        'title'=>'About'
    ]);
});

// artikel
Route::get('/artikel', [ArtikelController::class,'index']);

Route::get('/artikel/{artikel:slug}', [ArtikelController::class,'show']);

