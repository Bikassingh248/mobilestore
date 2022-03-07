<?php

namespace App\Http\Controllers;

use App\site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sitecontroller extends Controller
{
    //
   public function session(){
       $data=site::all();
       session()->put('data',$data);
       return session()->get('');

   }
   public function show(){
       return view("site");
   }
   public function save(Request $req){
       $data=[
           'name'=>$req->get('name'),
           'slogan'=>$req->get('slogan'),
           'mobile_no'=>$req->get('mobileno'),
           'telephone_no'=>$req->get('telephoneno'),
           'address'=>$req->get('address'),
           'logo'=>$req->get('logo'),
           'copyright'=>$req->get('copyright'),
           'facebook'=>$req->get('facebook'),
           'instragram'=>$req->get('instragram'),
           'linkedin'=>$req->get('linkedin'),
       ];
       DB::table('sites')->truncate();
       site::insert($data);
       return redirect()->back();
   }

}
