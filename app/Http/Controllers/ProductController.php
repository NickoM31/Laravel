<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getIndex(){
    	$produits = Product::all();
    	return view('welcome', [$produits]);

    }
}
