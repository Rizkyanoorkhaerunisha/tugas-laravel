<?php

use  App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('<h1> judul web <h1>');
});
Route::get('/admin', [HomeController::class, "index"]);
