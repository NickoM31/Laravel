<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function getIndex(){
    	$produits = Product::all();
    	return view('viewPanier', ['produits'=> $produits]);
    	

    }
}
