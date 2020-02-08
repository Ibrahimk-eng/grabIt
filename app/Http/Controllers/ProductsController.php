<?php

namespace App\Http\Controllers;

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
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            
        ]);

        $name = $request->name;
        $price = $request->price;
        $description = $request->description;
        

        $db = DB::select("INSERT INTO product (name, price, description) VALUES ('$name', '$price', '$description')");


        echo "Inserted";
    }
}