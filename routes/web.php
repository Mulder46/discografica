<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiskController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ArtistController;

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
    return view('welcome');
});

//los mostrar todos
Route::get('artist',[ArtistController::class, 'index']);
Route::get('disk',[DiskController::class, 'index']);
Route::get('song',[SongController::class, 'index']);
//mostrar específico
Route::get('show-artist',[ArtistController::class, 'show']);
Route::get('show-artist-form',[ArtistController::class, 'select']);
Route::get('show-disk',[DiskController::class, 'show']);
Route::get('show-disk-form',[DiskController::class, 'select']);
Route::get('show-song',[SongController::class, 'show']);
Route::get('show-song-form',[SongController::class, 'select']);

//formularios y creaciones
Route::get('new-artist-form',[ArtistController::class, 'create']);
Route::post('new-artist',[ArtistController::class, 'store']);
Route::get('new-disk-form',[DiskController::class, 'create']);
Route::post('new-disk',[DiskController::class, 'store']);
Route::get('new-song-form',[SongController::class, 'create']);
Route::post('new-song',[SongController::class, 'store']);
//formularios para editar
Route::get('edit-artist-form',[ArtistController::class, 'edit']);
Route::post('update-artist',[ArtistController::class, 'update']);
Route::get('edit-disk-form',[DiskController::class, 'edit']);
Route::post('update-disk',[DiskController::class, 'update']);
Route::get('edit-song-form',[SongController::class, 'edit']);
Route::post('update-song',[SongController::class, 'update']);
