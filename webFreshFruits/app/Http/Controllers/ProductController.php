<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index(){
        //$Posts= Post::all(); để như vậy sẽ bị lặp câu query khi thêm record vào bảng
        $products = Product::with(['category','brand'])->paginate(5); //cach 1 dung querybuidel, gọi post và lấy tất cả các category của post ra, category= hàm category(models)
         //$posts= Post::all()->load('category'); //cach 2 dungf collection
        return view('Backend.products.index_product',[
            'products'=> $products
        ]);
    }
    public function showProduct(){
        //$Posts= Post::all(); để như vậy sẽ bị lặp câu query khi thêm record vào bảng
        $products = Product::with(['category','brand'])->get(); //cach 1 dung querybuidel, gọi post và lấy tất cả các category của post ra, category= hàm category(models)
         //$posts= Post::all()->load('category'); //cach 2 dungf collection
         return view('Fontend.shop',[
            'products'=> $products
        ]);
    }
    
    public function showProductDetail($id){
        //$Posts= Post::all(); để như vậy sẽ bị lặp câu query khi thêm record vào bảng
        // $product = Product::with(['category','brand'])->where('id',$id)->firstOrFail()->get(); //cach 1 dung querybuidel, gọi post và lấy tất cả các category của post ra, category= hàm category(models)
        $product= Product::all()->load(['category','brand'])->where('id',$id)->firstOrFail(); //cach 2 dungf collection
         return view('Fontend.single-product',[
            'product'=> $product
        ]);
    }
    public function showCreateProduct(){
        $categories = Category::all();
        $brands = Brand::all();
        return view('Backend.products.show_create_product',[
            'categories'=> $categories,
            'brands'=> $brands
        ]);
    }
    public function createProduct(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'description' => 'required',
            'price' => 'required',
            'avatar' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
        ]);
        $file = $request->file('avatar');
        $product = $request->input(); 
        $product['avatar']=$file->getClientOriginalName();
        $file->storeAs('',$file->getClientOriginalName(),'avatar') ;//hàm dẫn để lưu trữ file
        $isSuccess= Product::create($product);
        if($isSuccess){
            return redirect('/Products');
        }
       
    }
    public function showUpdateProduct($id){
        $categories = Category::all();
        $brands = Brand::all();
        return view('Backend.products.show_update_product', [
            'product' => Product::findOrFail($id),
            'categories'=> $categories,
            'brands'=> $brands
    ]);
    }
    public function updateProduct(Request $request, $id){
        $request->validate([
            'title' => ['required', Rule::unique('products', 'title')->ignore($id)],
            'content' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required'
        ]);
            $Product=  Product::findOrFail($id);
            $isSuccess = $Product->update($request->input()); 
            if($isSuccess){
                $request->session()->flash('message', 'Cập nhật sản phẩm thành công!');
                return redirect('/Products');
            }
        }
        public function delete($id){
            $Product =Product::findOrFail($id);
            $Product->delete();
            return redirect('/Products');
        }
        public function unactiveProduct(Request $request, $id){
            DB::table('products')->where('id', $id)->update(['status'=>0]);
                $request->session()->flash('message', 'Ẩn sản phẩm thành công!');
                return redirect('/Products');
        }
        public function activeProduct(Request $request, $id){
            $product= DB::table('products')->where('id', $id)->update(['status'=>1]);
            if( $product){
                $request->session()->flash('message', 'Kích hoạt sản phẩm thành công!');
                return redirect('/Products');
            }
        }
}
