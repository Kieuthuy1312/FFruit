<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use SebastianBergmann\Environment\Console;

class CartController extends Controller
{
    public function addCart(Request $request, $id){
        $product= Product::findOrFail($id);
        if($product != null){
           $oldCart = Session('cart') ? Session('cart') : null ;
           $newCart = new Cart($oldCart); // tạo 1 đối tượng mới 
           $newCart->addCart($product, $id);
           $request->session()->put('cart', $newCart);
        //    dd($newCart);
        }
        return view('Fontend.mini-cart');
    }
    public function deleteItemCart(Request $request, $id){
           $oldCart = Session('cart') ? Session('cart') : null ;
           $newCart = new Cart($oldCart); // tạo 1 đối tượng mới 
           $newCart->deleteCart($id);
        //    $request->session()->put('cart', $newCart);
           if(count($newCart->products) > 0){
                 $request->session()->put('cart', $newCart);
           }else{
                 $request->session()->forget('cart', $newCart);
           }
           return view('Fontend.mini-cart');
        
    }
   
    public function viewListCart(){
        return view('Fontend.cart');
    }
    public function deleteItemListCart(Request $request, $id){
        $oldCart = Session('cart') ? Session('cart') : null ;
        $newCart = new Cart($oldCart); // tạo 1 đối tượng mới 
        $newCart->deleteCart($id);
     //    $request->session()->put('cart', $newCart);
        if(count($newCart->products) > 0){
              $request->session()->put('cart', $newCart);
        }else{
              $request->session()->forget('cart', $newCart);
        }
        return view('Fontend.list-cart');
     
    }
    public function saveListCart(Request $request){
           $data = $request->data; 
           foreach($data as $item){
                 $oldCart = Session('cart') ? Session('cart') : null ;
                $newCart = new Cart($oldCart);
                $newCart->updateCart($item['key'], $item['value']);
                $request->session()->put('cart', $newCart);
           }
           
        
    }
}
