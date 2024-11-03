<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PinjamController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('pinjam', PinjamController::class);