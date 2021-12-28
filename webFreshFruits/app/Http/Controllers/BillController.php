<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    public function index(){
        $bills = DB::table('bills')->orderBy('id','DESC')->paginate(5);
        return view('Backend.bills.index_bill' , [
            'bills' => $bills
        ]);
    }

    // public function showUpdateCategory($id){
    //     return view('Backend.categories.show_update_category', ['category' => Category::findOrFail($id)]);
    // }
    // public function updateCategory(Request $request, $id){
    //         $request->validate([
    //             'name' => ['required', Rule::unique('categories', 'name')->ignore($id)], //hàm unique dùng để sửa name duy nhất không trùng lặp, hàm ignore để nó so với tất cả các record khác trừ record dùng để so sánh
    //             'description' => 'required'    
    //         ]);
    //         $Category=  Category::findOrFail($id);
    //         $isSuccess=$Category->update([
    //                 'name' => $request->input('name'),
    //                 'description' => $request->input('description'),
    //         ]);
    //         if($isSuccess){
    //             $request->session()->flash('message', 'Cập nhật danh mục thành công!');
    //             return redirect('/Categories');
    //         }
    //     }
    //     public function delete(Request $request, $id){
    //         $Category =Category::findOrFail($id);
    //         $isSuccess= $Category->delete();
    //         if($isSuccess){
    //             $request->session()->flash('message', 'Xóa danh mục thành công!');
    //             return redirect('/Categories');
    //         }
    //      }
    //      public function unactiveCategory(Request $request, $id){
    //        DB::table('categories')->where('id', $id)->update(['status'=>0]);
    //             $request->session()->flash('message', 'Ẩn danh mục thành công!');
    //             return redirect('/Categories');
    //      }
    //      public function activeCategory(Request $request, $id){
    //         $category= DB::table('categories')->where('id', $id)->update(['status'=>1]);
    //         if( $category){
    //             $request->session()->flash('message', 'Kích hoạt danh mục thành công!');
    //             return redirect('/Categories');
    //         }
    //      }
}

