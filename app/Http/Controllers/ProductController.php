<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;

class ProductController extends Controller
{
    //index
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('products.index',['products'=>$products,'categories'=>$categories]);
    }
    //store
    public function store(Request $request){
        $request->validate([
            'name'=>'required|min:8',
            'description'=>'required|min:8',
            'price'=>'required|numeric',
            'stock'=>'required|numeric',
            'category_id'=>'required|numeric'
        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->brand = $request->brand;
        $product->sku = $request->sku;
        $product->stock = $request->stock;
        $product->cost = $request->cost;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->route('products.index')->with('success','Producto creado correctamente');
    }

}
