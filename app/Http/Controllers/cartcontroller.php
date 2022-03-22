<?php

namespace App\Http\Controllers;

use App\cart;
use Illuminate\Http\Request;

class cartcontroller extends Controller
{
    //
    public function index(Request $req){
$data=[
    'product_id'=>$req->get('productid'),
    'user_id'=>'3',
];
cart::insert($data);
return redirect()->route('fr.productshow');
    }
}
