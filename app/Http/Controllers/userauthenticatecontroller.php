<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userauthenticatecontroller extends Controller
{
    //
    public function loginshow(){
        return view('userlogin');
    }
    public function registershow(){
        return view('userregister');
    }
    public function usersubmit(Request $req){
//    $req->validate([
// 'name'=>'required',
// 'email'=>'required',
// 'password'=>'required',
// 'reenterpassword'=>'required',
//    ]);
//    dd("hello everyone");
    }

}
