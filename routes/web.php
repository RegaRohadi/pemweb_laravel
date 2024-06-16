<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpeedrunController;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/rank', [SpeedrunController::class, 'rank'])->name('rank');
Route::get('/create', [SpeedrunController::class, 'create'])->name('create');
Route::post('/store', [SpeedrunController::class, 'store'])->name('store');

