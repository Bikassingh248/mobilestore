<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    //
    public function show(){
        return view('backend.product.addproduct');
    }
    public function addproduct(Request $req){

        $image_url='';
        if($req->hasFile('image')){
            $file=$req->file('image');
            $new_name=str_random(5).time().$file->getClientOriginalName();
            $path=public_path('uploads');
            $file->move($path,$new_name);
            $image_url=asset('uploads/'.$new_name);

        }
        $data=[
                'p_id'=>$req->get('productid'),
                'p_name'=>$req->get('productname'),
                'p_brand'=>$req->get('productbrand'),
                'image'=>$image_url ?? '',
                'description'=>$req->get('description'),
                'price'=>$req->get('price'),
            ];
        product::insert($data);
        return redirect('addproduct');
            }

            public function showproduct(){

                $data=product::all();

                return view('backend.product.manageproduct',compact('data'));
            }

            public function editproduct($id){
                $data=product::where('id',$id)->first();
                return view('backend.product.productedit',compact('data'));
            }
            public function updateproduct(Request $req,$id){
                $data=[
                'p_id'=>$req->get('productid'),
                'p_name'=>$req->get('productname'),
                'p_brand'=>$req->get('productbrand'),
                'image'=>$image_url ?? '',
                'description'=>$req->get('description'),
                'price'=>$req->get('price'),
                ];
                product::where('id',$id)->update($data);
                return redirect('showproduct');
            }

            public function deleteproduct($id){
                dd(" This product is deleted sucessfully");
                product::destroy($id);
                return redirect()->back();
            }
            public function adshowproduct(){
                $data=product::all();
                return view('product',['products'=>$data]);
            }

}
