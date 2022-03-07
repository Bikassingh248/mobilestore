<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class passwordcontroller extends Controller
{
    //
    public function show(){
        return view('changepassword');
    }
}
