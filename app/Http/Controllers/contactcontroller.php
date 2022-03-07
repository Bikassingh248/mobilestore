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
}
