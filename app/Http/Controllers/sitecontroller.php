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
    //    $data=site::find(1);
       return view("site");
   }
   public function savedata(Request $req){
    // $req->validate([
    //     'name'=>'required | max:20',
    //     'slogan'=>'required| max:30',
    //     'mobile'=>'required | min:5 | max:12',
    //     'telephone'=>'required | min:5 | max:12',
    //     'address'=>'required| max:30',
    //     // 'logo'=>'required',
    //     'copyright'=>'required | max:30',
    //     'facebook'=>'required|min:5| max:50',
    //     'instragram'=>'required | min:5 |max:50',
    //     'linkedin'=>'required | max:15',

    // ]);
    $image_url='';
    if($req->hasFile('logo')){
        $file=$req->file('logo');
        $new_name=str_random(5).time().$file->getClientOriginalName();
        $path=public_path('/logo');
        $file->move($path,$new_name);
        $logo_url=asset('logo/'.$new_name);
}

       $data=[
           'name'=>$req->get('name'),
           'slogan'=>$req->get('slogan'),
           'mobile_no'=>$req->get('mobileno'),
           'telephone_no'=>$req->get('telephoneno'),
           'address'=>$req->get('address'),
           'logo'=>$logo_url,
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
