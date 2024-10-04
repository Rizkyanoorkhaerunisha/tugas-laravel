<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
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

    public function store(Request $request){

        $validator = validator::make($request->all(), [
            'nama' => 'required|string|max:225',
            'stok' => 'required|integer|min:50',
            'harga' => 'required|numeric|min:2',
            'deskripsi' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $Product = new product();
        $Product->nama = $request->nama;
        $Product->harga = $request->harga;
        $Product->stok = $request->stok;
        $Product->deskripsi = $request->deskripsi;
        $Product->save();

        return redirect()->back();
    }

    public function show()
    {
        $Products = Product::Paginate(4);
        return view('tableProduct', ['Products' => $Products]);

        }

    public function edit($id)
    {

        $Product =  product::findOrFail($id);

        return view("editProduct",compact("Product"));
    }

    public function update (Request $request, $id){

        $Product = Product::findOrFail ($id);
        $Product->nama = $request->nama;
        $Product->harga = $request->harga;
        $Product->stok = $request->stok;
        $Product->deskripsi = $request->deskripsi;
        $Product->save();
        return redirect('/show');

    }

    public function destroy($id){
        $Product = Product::findOrFail($id);
        $Product->delete();
        return redirect('/show');
    }

    public function input(){
        return view("inputProduct");
    }

}
