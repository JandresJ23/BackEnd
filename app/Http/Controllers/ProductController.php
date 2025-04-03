<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $listProducts= Product::all();
        //dd($listProduct);


        return view('products.index',[
            'listProducts' => $listProducts
        ]);
        
    }

    public function create(){

        return view('products.create'); //retoma el formulario para crear un prodcuto
    }

    public function show($name){

        echo "PRODUCTO $name";
        return view('products.show');
    }

}
