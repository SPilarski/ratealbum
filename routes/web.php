<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/albums', [\App\Http\Controllers\AlbumController::class, 'index']) ->name('index')-> middleware('auth')->middleware('can:isAdmin');
Route::get('/albums/create', [\App\Http\Controllers\AlbumController::class, 'create']) ->name('albums.create')-> middleware('auth');
Route::post('/albums', [\App\Http\Controllers\AlbumController::class, 'store']) ->name('albums.store')-> middleware('auth');
Route::get('/albums/edit/{album}', [\App\Http\Controllers\AlbumController::class, 'edit']) ->name('albums.edit')-> middleware('auth');
Route::post('/albums/{album}', [\App\Http\Controllers\AlbumController::class, 'update']) ->name('albums.update')-> middleware('auth');
Route::delete('/albums/{id}', [\App\Http\Controllers\AlbumController::class, 'destroy']) -> middleware('auth');
Route::get('/home', [App\Http\Controllers\WelcomeController::class, 'index'])->middleware('auth');
Route::post('/home/{id}', [App\Http\Controllers\HomeController::class, 'store'])->middleware('auth');
Route::post('/home#/{id}', [App\Http\Controllers\HomeController::class, 'store'])->middleware('auth');

Route::get('/mylist', [App\Http\Controllers\HomeController::class, 'index']) ->name('index')-> middleware('auth');
Auth::routes();


