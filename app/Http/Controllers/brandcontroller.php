<?php

namespace App\Http\Controllers;

use App\brand;
use App\product;
use Illuminate\Foundation\Http\Middleware\ValidatePostSize;
use Illuminate\Http\Request;

class brandcontroller extends Controller
{
    //
    public function create(){
        return view('backend.brand.addbrand');
    }
    public function submit(Request $req){
        $req->validate([
            'name'=>'required',
            'date'=>'required',
            'status'=>'required',
        ]);
$data=[
    'b_name'=>$req->name,
    'status'=>$req->status,
    'date'=>$req->date,
];
brand::insert($data);
return redirect()->back();
    }

    public function show(Request $req){
        $search=$req->get('search') ?? '';
    if($search !=''){
        $data=brand::where('b_name','Like',"%$search%")->get();
    }else{
        $data=brand::paginate(15);
    }

        return view('backend.brand.managebrand',compact('data'));
    }
    public function delete($id){
        // dd("This brand is deleted sucessfully");
        brand::destroy($id);
        return redirect()->back();
    }
    public function edit($id){
        $data=brand::find($id);
        return view('backend.brand.editbrand',compact('data'));
    }
    public function update(Request $req, $id){
        $data=[
            'b_name'=>$req->name,
            'date'=>$req->date,
            'status'=>$req->status,
        ];
        brand::where('id',$id)->update($data);
        return redirect('brandshow');
    }
    public function frshowbrand(){
        $data=brand::all();
        return view('frontend.layouts.includes.sidebar',['brands'=>$data]);
    }
}

