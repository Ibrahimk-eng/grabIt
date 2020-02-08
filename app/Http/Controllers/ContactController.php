<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function viewContact()
    {

        // $db = DB::select('select * from contact_us');
        return view('MainTheme/contact');
    }
    public function addContact(Request $request)
    {
        $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|max:60|email',
            'subject' => 'required|max:100',
            'message' => 'required|max:1000'
        ]);

        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        $db = DB::select("INSERT INTO contact_us (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')");

        echo "Inserted";
        return view('MainTheme/contact');
    }
}