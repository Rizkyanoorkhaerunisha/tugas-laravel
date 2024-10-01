<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){

        // Data array yang berisi daftar buku
        $book = [
            ['title' => 'Laut Bercerita', 'author' => 'Leila Salikha Chudori', 'year' => 2017],
            ['title' => 'Laskar Pelangi', 'author' => 'Andera Hirata', 'year' => 2005],
            ['title' => 'Sumur', 'author' => 'Eka Kurniawan', 'year' => 2021],
            ['title' => 'Bumi Manusia', 'author' => 'Pramoedya Ananta Toer', 'year' => 1980],
            ['title' => 'Cantik Itu Luka', 'author' => 'Eka Kurniawan', 'year' => 2002],
        ];

        // Mengirim data buku ke view 'home'
        return view('home', ['book' => $book]);
    }

    public function form(Request $request){
        $dataMessage = $request->message;

}

public function store(){
        $Product = new Product();
        $Product->nama = "Laptop";
        $Product->harga = 10000;
        $Product->stok = 10;
        $Product->deskripsi ="laptop murah";
        $Product->save();

        return ('data sukses dikirim');

}

    public function show()
    {
        $Product = Product::all();
        return view("tableProduct",compact("Product"));
    }
        }
