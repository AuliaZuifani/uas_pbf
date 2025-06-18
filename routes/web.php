<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\BukuController;

Route::get('/buku', [BukuController::class, 'index']);
