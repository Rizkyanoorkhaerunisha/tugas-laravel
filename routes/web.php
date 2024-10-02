<?php

use App\Http\Controllers\HomeController;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/form', 'form');

Route::post('/submit', function (Request $request) {
    $nama = $request->input('nama');
    $message = $request->input('message');

    return redirect('/home')->with([
        'nama' => $nama,
        'message' => $message
    ]);
});

Route::get('/home', function () {
    return view('home');
});


Route::get("/create",[HomeController::class,"store"]);

Route::get("/create1",[HomeController::class,"store1"]);

Route::get("/create2",[HomeController::class,"store2"]);

Route::get("/create3",[HomeController::class,"store3"]);

Route::get("/show", [HomeController::class, "show"]);

Route::get('/products', [HomeController::class, 'show']);

Route::get('/products/{id}/edit', [HomeController::class, 'edit']);

Route::put('/products/{id}', [HomeController::class, 'update']);

Route::delete('/products/{id}', [HomeController::class, 'destroy']);
