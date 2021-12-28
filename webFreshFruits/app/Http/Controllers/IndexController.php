<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $products_new = Product::with(['category','brand'])->orderBy('updated_at','DESC')->get();
        $products_highlight = Product::with(['category','brand'])->where(['category_id' => 1])->get();
        return view('Fontend.home',[
            'products_new'=> $products_new,
            'products_highlight' =>$products_highlight
        ]);
    }
}
