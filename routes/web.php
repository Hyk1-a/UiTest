<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YourController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/table', function(){
    return view('table');
})->name('table');


Route::get('view/{id}', [YourController::class, 'view'])->name('view');

Route::get('/form', [YourController::class, 'index'])->name('form');
Route::post('/form-submit', [YourController::class, 'submit'])->name('submit');


require __DIR__.'/auth.php';
