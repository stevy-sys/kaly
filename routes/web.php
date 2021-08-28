<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReceipeController;
use App\Http\Controllers\CategorieController;

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
Route::get('/', [IndexController::class, 'index'])->name('accueil');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profil/{user}', [ProfilController::class, 'index'])->name('profil');
Route::get('/post/{blog}', [PostController::class, 'showBlog'])->name('post.show');
Route::get('/post/create/blog', [PostController::class, 'createBlog'])->name('post.create-blog');
Route::get('/post/create/receipe', [PostController::class, 'createReceipe'])->name('post.create-receipe');
Route::get('/receipe', [PostController::class, 'showReceipe'])->name('receipe.show');
Route::get('/categorie', [CategorieController::class, 'index'])->name('categorie.index');
Route::get('/message', [MessageController::class, 'index'])->name('message.index');
