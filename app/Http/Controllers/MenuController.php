<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $getProdukAll = Produk::all();

        return view('menu',[
            'produk' => $getProdukAll
        ]);
        
    }
}
