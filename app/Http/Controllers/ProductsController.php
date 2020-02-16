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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        
        //get file extension
        $imageName = time().'.'.$request->image->extension();  
        //store file to the public / given path
        $product->image = $request->image->move(public_path('images'), $imageName);
        //store with only file name to retrieve with the name only.
        $product->image = $imageName;
        
        $product->save();

        echo "Inserted";
    }

    public function product_edit($id)
    {
        $product = Product::find($id);
        return view('MainTheme.updateProduct')->with('product', $product);
        // 
    }
}