<?php

namespace App\Models;

class Cart
{
    public $products= null; //ds sp
    public $totalPrice = 0; //biến
    public $totalQuantily = 0; //biến

    public function __construct($cart)
    {
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuantily = $cart->totalQuantily;
        }
    }

    public function addCart($product, $id){
         $newProduct = [
             'quantily'=> 0,
             'price'=> 0,
             'productInfo'=>$product
            ];
        if($this->products){
            if(array_key_exists($id,$this->products)){ //nếu id có trong cart rồi, hàm tìm key $id trong hàm products
                $newProduct = $this->products[$id];
             }
         }
         $newProduct['quantily']++;
         $newProduct['price']=  $newProduct['quantily'] * $product->price;
         $this->products[$id] = $newProduct;
         $this->totalPrice +=  $product->price;
         $this->totalQuantily++;
    }
    public function deleteCart($id){
        $this->totalQuantily -= $this->products[$id]['quantily'];
        $this->totalPrice -=  $this->products[$id]['price'];
        unset($this->products[$id]);
    }
    public function updateCart($id, $quantily){
        // xóa toàn bộ quantily và price
        $this->totalQuantily -= $this->products[$id]['quantily'];
        $this->totalPrice -=  $this->products[$id]['price'];

        // cập nhật lại
        $this->products[$id]['quantily'] = $quantily;
        $this->products[$id]['price'] = $quantily * $this->products[$id]['productInfo']->price;

        // tính lại totalquantily và totalprice
        $this->totalQuantily += $this->products[$id]['quantily'];
        $this->totalPrice +=  $this->products[$id]['price'];
    }
}
