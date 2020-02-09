<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Image;

class ProductsController extends Controller
{

    public function viewForm()
    {

        $dbstd = DB::select('select * from product');
        dd($dbstd);

        // foreach ($dbstd as $value) {
        //     echo $value;
        // }
        // echo $db['0']['id'];
        // // return view('MainTheme/updateForm');

        return view('MainTheme/viewFormData');
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