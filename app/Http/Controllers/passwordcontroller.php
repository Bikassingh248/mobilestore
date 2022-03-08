<?php

namespace App\Http\Controllers;

use App\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class passwordcontroller extends Controller
{
    //
    public function show(){
        return view('changepassword');
    }
    public function check(Request $req){
        $admin=admin::where('email',$req->email)->first();
        if($admin){
        if(Hash::check($req->currentpassword,$admin->password))
        {
            // dd("hello everyone");
            $data=[
                'name'=>$req->get('name'),
                'email'=>$req->get('email'),
                'password'=>bcrypt($req->get('currentpassword')),
            ];
            DB::table('admin')->truncate();
            admin::insert($data);

            return "password changed successfully";
        }
        else{
            echo "sorry you have entered wrong Email and Password";
        }
        }

    }
}
