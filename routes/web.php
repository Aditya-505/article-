<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\FrontController;
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

//Route::get('/', function () {
//  return view('welcome');
//});


Route::get('/',[FrontController::class,'index']);

Route::get('/penjelasan/{$id}', [FrontController::class, 'show'])->name('penjelasan');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('genre', GenreController::class);
Route::resource('game', GameController::class);

Route::prefix('admin')->middleware('auth', isadmin::class)->group(function () {

});



