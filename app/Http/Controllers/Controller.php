<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;






    //Log-in Register
    public function viewData(Request $request)
    {
        // $db = DB::select('select * from ik');
        // $db = new DB;
        // $db = $balka::select("INSERT INTO ik (id, name, email, contact) VALUES (NULL, 'z', 'y', 'x')");
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;


        $db = DB::select("INSERT INTO ik (id, name, email, contact) VALUES (NULL, '$name', '$email', '$password')");

        echo "Inserted";

        // $db = DB::select('select * from ik');

        // print_r($balka);
    }
}