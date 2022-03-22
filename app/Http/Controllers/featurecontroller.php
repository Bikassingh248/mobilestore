<?php

namespace App\Http\Controllers;

use App\description;
use App\product;
use Illuminate\Http\Request;

class featurecontroller extends Controller
{
    //
    public function show(){
        $data=description::all();
        return view('frontend.topic.description',compact('data',$data));
    }
    public function description($id){
        $data=product::find($id);
    return view('frontend.topic.description',compact('data',$data));
    }
}
