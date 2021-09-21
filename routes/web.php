<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

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
        'title'=>'Sampah Juga Berharga',
        'active' => 'home'
    ]);
});

Route::post('/', [FormController::class, 'send']);

Route::get('/about',function(){
    return view('about',[
        'title'=>'About',
        'active' => 'about'
    ]);
});

Route::get('/faq', function(){
    return view('faq',[
        'title'=>'faq',
        'active' => 'faq'
    ]);
});
// artikel
Route::get('/artikel', [ArtikelController::class,'index']);

Route::get('/artikel/{artikel:slug}', [ArtikelController::class,'show']);

// login dan register
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
