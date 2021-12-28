@extends('Backend.layouts.main')

@section('title')
  Trang danh mục sản phẩm
@endsection

@section('name_page')
    Danh mục sản phẩm
@endsection


@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Bảng sản phẩm</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              @if (request()->session()->has('message'))
                <p>{{ request()->session()->get('message') }}</p>
               @endif
                     <a class="btn btn-outline-danger d-inline-block ms-2" href="/show_create_product">+Thêm</a>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th class="text-center">STT</th>
                        <th class="text-center">ID</th>
                        <th class="text-center">Tên</th>
                        <th class="text-center">Ảnh</th>
                        <th class="text-center">Mô tả</th>
                        <th class="text-center">Nội dung</th>
                        <th class="text-center">Tên danh mục</th>
                        <th class="text-center">Tên thương hiệu</th>
                        <th class="text-center">Trạng thái</th>
                        <th class="text-center">Hoạt động</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($products as $key=>$product)
                        <tr>
                            <td class="text-center">{{ $key + 1 }}</td>
                            <td class="text-center">{{ $product->id }}</td>
                            <td class="text-center">{{ $product->title }}</td>
                            <td class="text-center"><img width="50px" height="50px" src="{{Storage::disk('avatar')->url($product->avatar)}}" /></td>
                            <td class="text-center">{{ $product->description }}</td>
                            <td class="text-center">{{ $product->content }}</td>
                            <td class="text-center">{{ $product->category->name}}</td>
                            <td class="text-center">{{ $product->brand->name}}</td>
                            <td  class="text-center">
                              @if ($product->status==0) 
                                 <a href="/active_product_{{ $product->id }}" class="fs-5" style="color: rgb(153, 177, 153)"> <i class="fas fa-toggle-off"></i>  </a>            
                               @else
                                 <a href="/unactive_product_{{ $product->id }}" class="fs-5" style="color: rgb(45, 216, 45)" > <i class="fas fa-toggle-on"></i></a>      
                               @endif
                            </td>
                            <td class="text-center">
                                <a href="/show_update_product_{{ $product->id }}" style="color: rgb(45, 113, 216)"><i class="fas fa-user-edit ms-3 me-3"></i></a>
                                <a href="/Products_{{ $product->id }}" onclick="confirm('Bạn có chắc chắn muốn xóa?')" style="color: rgb(219, 57, 57)"><i class="fas fa-trash-alt"></i></a>
                            </td>  
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection