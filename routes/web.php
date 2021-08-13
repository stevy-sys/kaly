<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfilController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/post', [PostController::class, 'show'])->name('post.show');
Route::get('/receipe', [ReceipeController::class, 'show'])->name('receipe.show');
Route::get('/categorie', [CategorieController::class, 'index'])->name('categorie.index');
Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
