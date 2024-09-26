<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $data =["nama" =>"rizkya noor khaerunisha"];
        return view("home", $data);
    }
}
