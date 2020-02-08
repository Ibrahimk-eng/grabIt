<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{

    public function viewForm()
    {

        $dbstd = DB::select('select * from form_db');
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
            'first_name' => 'required|max:12',
            'last_name' => 'max:10',
            'email_adress' => 'required|max:60|email',
            'password' => 'required|max:30',
            'phone_number' => 'required|max:11|min:11|digits:11',
            'adress' => 'required|max:200',
        ]);

        $firstname = $request->first_name;
        $lastname = $request->last_name;
        $emailadress = $request->email_adress;
        $password = $request->password;
        $phone = $request->phone_number;
        $birth = $request->date_of_birth;
        $adress = $request->adress;

        $db = DB::select("INSERT INTO form_db (firstname, lastname, emailadress, password, phone, birth, adress) VALUES ('$firstname', '$lastname', '$emailadress', '$password','$phone', '$birth', '$adress')");


        echo "Inserted";
    }
}