<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class BrandController extends Controller
{
    public function index(){
        $brands = DB::table('brands')->orderBy('id','DESC')->paginate(5);
        return view('Backend.brands.index_brand' , [
            'brands' => $brands
        ]);
    }
    public function showCreateBrand(){
        return view('Backend.brands.show_create_brand');
    }
    public function createBrand(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);
          $name = $request->input('name');
          $status = $request->input('status');
          $description = $request->input('description');
         $Brand=Brand::create([
             'name' => $name,
             'description' => $description,
             'status' => $status
        ]);
          if($Brand){
            $request->session()->flash('message', 'Thêm danh mục thành công!');
            return redirect('/Brands');
          }

    }
    public function showUpdateBrand($id){
        return view('Backend.brands.show_update_brand', ['brand' => Brand::findOrFail($id)]);
    }
    public function updateBrand(Request $request, $id){
            $request->validate([
                'name' => ['required', Rule::unique('brands', 'name')->ignore($id)], //hàm unique dùng để sửa name duy nhất không trùng lặp, hàm ignore để nó so với tất cả các record khác trừ record dùng để so sánh
                'description' => 'required'    
            ]);
            $Brand=  Brand::findOrFail($id);
            $isSuccess=$Brand->update([
                    'name' => $request->input('name'),
                    'description' => $request->input('description'),
            ]);
            if($isSuccess){
                $request->session()->flash('message', 'Cập nhật danh mục thành công!');
                return redirect('/Brands');
            }
        }
        public function delete(Request $request, $id){
            $Brand =Brand::findOrFail($id);
            $isSuccess= $Brand->delete();
            if($isSuccess){
                $request->session()->flash('message', 'Xóa danh mục thành công!');
                return redirect('/Brands');
            }
         }
         public function unactiveBrand(Request $request, $id){
           DB::table('brands')->where('id', $id)->update(['status'=>0]);
                $request->session()->flash('message', 'Ẩn danh mục thành công!');
                return redirect('/Brands');
         }
         public function activeBrand(Request $request, $id){
            $Brand= DB::table('brands')->where('id', $id)->update(['status'=>1]);
            if( $Brand){
                $request->session()->flash('message', 'Kích hoạt danh mục thành công!');
                return redirect('/Brands');
            }
         }
}

