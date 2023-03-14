<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\ImageController;


use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\RegisterController;



Route::get('/', HomeController::class)->name('home');



Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);
Route::post('/logout',[LogoutController::class, 'store'])->name('logout');

Route::get('/edit-perfil', [PerfilController::class, 'index'])->name('perfil.index');
Route::post('/edit-perfil', [PerfilController::class, 'store'])->name('perfil.store');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/{user:username}/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::delete('/posts/{post}', [PostController::class,'destroy'])->name('posts.destroy');


Route::post('/{user:username}/posts/{post}', [CommentController::class, 'store'])->name('comments.store');
Route::post('/imagens', [ImageController::class, 'store'])->name('images.store');


Route::post('/posts/{post}/likes', [LikeController::class, 'store'])->name('posts.likes.store');
Route::delete('/posts/{post}/likes', [LikeController::class, 'destroy'])->name('posts.likes.destroy');


Route::post('/{user:username}/follow', [FollowerController::class, 'store'])->name('users.follow');
Route::delete('/{user:username}/unfollow', [FollowerController::class, 'destroy'])->name('users.unfollow');

Route::get('/{user:username}', [PostController::class, 'index'])->name('posts.index');
