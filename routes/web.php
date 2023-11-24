<?php

use App\Http\Controllers\ImagenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('principal');
});

// Route::get('/crear-cuenta', function(){
//     return view('auth.register');
// });

// Route::get('/app', function () {
//     return view('layouts.app');
// });

#crear cuenta
Route::get('/crear-cuenta',[RegisterController::class,'index'])->name('register');
Route::post('/crear-cuenta',[RegisterController::class,'store'])->name('register');

#login
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store'])->name('login');

#logout
Route::post('/logout',[LogoutController::class,'store'])->name('logout');

#principal
Route::get('/{user:username}',[PostController::class, 'index'])->name('post.index');


#crear publicación
Route::get('/posts/create',[PostController::class,'create'])->name('post.create');
Route::post('/posts',[PostController::class,'store'])->name('post.store');

#Imagen publicacion
Route::post('/imagenes',[ImagenController::class,'store'])->name('imagenes.store');