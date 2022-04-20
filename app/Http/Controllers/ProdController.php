<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdController extends Controller
{
    //
    public function register()
    {
        return view('product.register');
    }
    public function store(Request $request)
    {
        $prod= new Prod();
        $prod->name=$request->name;
        $prod->unit=$request->unit;
        $prod->price=$request->price;
        $prod->quantity=$request->quantity;
    }
}
