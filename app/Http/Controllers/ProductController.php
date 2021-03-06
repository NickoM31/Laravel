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
	public function postProduct(Request $request){
		Product::create($request->all()); 
		return redirect()->action('ProductController@getIndex');
	}

	public function deletProduct($id){
		$produits = Product::find($id);
		$produits->delete();
		return redirect()->action('ProductController@getIndex');
	}

	public function modifProduct(Request $request){
		$produits = Product::find($request->id);
		$produits->name = $request->name;
		$produits->description = $request->description;
		$produits->price = $request->price;
		$produits->stock = $request->stock;
		$produits->save();
		return redirect()->action('ProductController@getIndex');
	}
}
