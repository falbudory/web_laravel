<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $laptops = Product::where('type_id',1)->get();
        $phones = Product::where('type_id',2)->get();
        $phuKien = Product::where('type_id',3)->get();
        return view('home.index',compact('laptops','phones','phuKien'));
    }
    public function detailProduct( Request $request,$pid){
        $data = Product::where('id',$pid)->first();
        return view('home.detailProduct',compact('data'));
    }
    public function product($id){
        $data = Product::where('type_id',$id)->get();
        return view('home.products',compact('data'));
    }
    public function checkOut(){
        return view('home.checkOut');
    }
    public function contactUs(){
        return view('home.contactUs');
    }
    public function aboutUs(){
        return view('home.aboutUs');
    }

}
