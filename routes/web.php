<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ComentarioController;


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

#crear publicación
Route::get('/posts/create',[PostController::class,'create'])->name('post.create');
Route::post('/posts',[PostController::class,'store'])->name('post.store');
Route::get('/{user:username}/posts/{post}',[PostController::class,'show'])->name('post.show');
Route::delete('/post/{post}',[PostController::class,'destroy'])->name('post.destroy');

#Imagen publicacion
Route::post('/imagenes',[ImagenController::class,'store'])->name('imagenes.store');

#comentarios
Route::post('/{user:username}/posts/{post}',[ComentarioController::class,'store'])->name('comentario.store');

#Likes
Route::post('/post/{post}/likes',[LikeController::class,'store'])->name('post.like.store');
Route::delete('/post/{post}/likes',[LikeController::class,'destroy'])->name('post.like.destroy');


#perfil
Route::get('/{user:username}/editar-perfil',[PerfilController::class,'index'])->name('perfil.index');
Route::post('/{user:username}/editar-perfil',[PerfilController::class,'store'])->name('perfil.store');


#principal
Route::get('/{user:username}',[PostController::class, 'index'])->name('post.index');

#seguidores
Route::post('/{user:username}/follow',[FollowerController::class,'store'])->name('user.follow');
Route::delete('/{user:username}/unfollow',[FollowerController::class,'destroy'])->name('user.unfollow');