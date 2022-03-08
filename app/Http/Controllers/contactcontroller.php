<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    //
    public function save(Request $req){
$data=[
    'name'=>$req->get('name'),
    'email'=>$req->get('email'),
    'mobileno'=>$req->get('mobileno'),
    'subject'=>$req->get('subject'),
];
contact::insert($data);
return "contact saved successfully";
    }
    public function show(Request $req){
        $search=$req->get('search') ?? '';
        if($search !=''){
            $data=contact::where('name','Like',"%$search%")->orwhere('email','Like',"%$search%")->get();
        }else{
            $data=contact::paginate(20);
        }

        return view('backend.contact',compact('data',$data));
    }
}
