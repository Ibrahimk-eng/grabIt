<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        ]);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;



        // $product = Product::select("INSERT INTO products (name, price, description) VALUES ('$name', '$price', '$description')");
        $product->save();

        echo "Inserted";
    }
}