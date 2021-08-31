<?php

use App\Http\Controllers\MovieController;
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


Route::get('/movie', [MovieController::class, 'index'])->name('movie.index');
Route::get('/movie/create', [MovieController::class, 'create'])->name('movie.create');
Route::post('/movie/store', [MovieController::class, 'store'])->name('movie.store');
Route::post('/movie/update/{id}', [MovieController::class, 'update'])->name('movie.update');
Route::get('/movie/{id}', [MovieController::class, 'edit'])->name('movie.edit');
Route::get('/movie/destroy/{id}', [MovieController::class, 'destroy'])->name('movie.destroy');
Route::post('/movie/search', [MovieController::class, 'search'])->name('movie.search');
