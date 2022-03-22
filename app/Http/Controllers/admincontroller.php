<?php

namespace App\Http\Controllers;

use App\admin;
use Exception;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class admincontroller extends Controller
{
    //

 public function login(){

        return view('adminlogin');
    }


    public function submit(Request $req){
        if(!$req->get('email') || !$req->get('password')){
            return redirect()->back();
        }

        try
        {
$admin=admin::where('email',$req->email)->first();
if($admin){
if(Hash::check($req->password,$admin->password))
{
    // Auth::login($admin);
    session()->put('admin',$admin);
    return redirect('dashboard');
}
else{
    return redirect()->back();
}
}else{
    return redirect()->back();
}
        }catch(Exception $exception){
            dd($exception);
        }

    }
    public function logout(){
        if(Auth::check()){

            Auth::logout();
            // Session::forget('admin');
            return redirect()->route('admin.login');
        }
        dd("admin is already logout");
    }

}
