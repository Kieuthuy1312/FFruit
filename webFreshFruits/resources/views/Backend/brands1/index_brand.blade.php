@extends('Backend.layouts.main')

@section('title')
  Trang nhãn hiệu sản phẩm
@endsection

@section('name_page')
    Nhãn hiệu sản phẩm
@endsection


@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Bảng nhãn hiệu sản phẩm</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              @if (request()->session()->has('message'))
                <p>{{ request()->session()->get('message') }}</p>
               @endif
                  <a class="btn btn-outline-danger d-inline-block ms-2" href="/show_create_brand">+Thêm</a>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th class="text-center">STT</th>
                        <th  class="text-center">ID</th>
                        <th  class="text-center">Tên</th>
                        <th  class="text-center">Mô tả</th>
                        <th  class="text-center">Trạng thái</th>
                        <th  class="text-center">Hoạt động</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($brands as $key=>$brand)
                        <tr>
                            <td  class="text-center">{{ $key + 1 }}</td>
                            <td  class="text-center">{{ $brand->id }}</td>
                            <td  class="text-center">{{ $brand->name }}</td>
                            <td  class="text-center">{{ $brand->description }}</td>
                            <td  class="text-center">
                              @if ($brand->status==0) 
                              <a href="/active_brand_{{ $brand->id }}" class="fs-5" style="color: rgb(153, 177, 153)"> <i class="fas fa-toggle-off"></i>  </a>            
                            @else
                              <a href="/unactive_brand_{{ $brand->id }}" class="fs-5" style="color: rgb(45, 216, 45)" > <i class="fas fa-toggle-on"></i></a>      
                          @endif
                            </td>
                            <td class="text-center">
                                <a href="/show_update_brand_{{ $brand->id }}"  style="color: rgb(45, 113, 216)"><i class="fas fa-user-edit ms-3 me-3"></i></a>
                                <a href="/Brands_{{ $brand->id }}" onclick="confirm('Bạn có chắc chắn muốn xóa?')" style="color: rgb(219, 57, 57)"><i class="fas fa-trash-alt"></i></a>
                            </td>  
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="float-end me-5">
                    {{ $brands->links() }}
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection