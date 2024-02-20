<?php

use App\Http\Controllers\NewController;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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


Route::get('/Bosh sahifa', [Pagecontroller ::class, 'index'])->name('home');
Route::get('/', function(){return redirect('/Bosh sahifa');});
Route::resource('/yangiliklar', PostController::class);
Route::get('/tuman hokimligi apparati', function(){
    return ('tuman hokimligi apparati (jadvali)');
})->name('apparati');




