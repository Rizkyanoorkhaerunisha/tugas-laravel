<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route untuk menampilkan form
Route::view('/form', 'form');

// Route untuk menangani pengiriman form
Route::post('/submit', function (Request $request) {
    // Ambil data dari form
    $nama = $request->input('nama');
    $message = $request->input('message');

    // Redirect ke halaman home dengan data yang dikirim
    return redirect('/home')->with([
        'nama' => $nama,
        'message' => $message
    ]);
});

// Route untuk menampilkan halaman home
Route::get('/home', function () {
    return view('home');
});
