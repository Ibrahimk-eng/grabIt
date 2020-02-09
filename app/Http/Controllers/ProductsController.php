<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{

    public function viewProducts()
    {

        $products = Product::get();
        return view('MainTheme/productsList',compact('products'));
        
    }
    //Form area
    public function addForm(Request $request)
    {
        $product = new Product;

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',

        ]);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->image = $request->file('image')->store('images/products');
        
        $product->save();

        echo "Inserted";
    }
}