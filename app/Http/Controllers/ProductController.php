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

	public function getShow($id){
		$produits = Product::find($id);
		return view('oneProduct', ['produits'=>$produits]);
	}
	public function stockMore($id){
		$produits = Product::find($id);
		$produits->stock++;
		$produits->save();
		return back();

	}
	public function stockLess($id){
		$produits = Product::find($id);
		$produits->stock--;
		$produits->save();
		return back();

	}
}
