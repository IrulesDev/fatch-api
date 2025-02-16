<?php

use App\Http\Controllers\alquranController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth'])->group(function(){

Route::get('user', [homeController::class, 'users']);

Route::get('/', [homeController::class, 'users'])->name('home');

Route::get('getalquran', [alquranController::class, 'getalquran']);

Route::get('/alquran',[alquranController::class, 'getalquran'])->name('alquran');

// });