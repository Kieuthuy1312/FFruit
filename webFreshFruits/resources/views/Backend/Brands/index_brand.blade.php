@extends('Backend.layouts.main1')

@section('title')
    Trang thương hiệu sản phẩm
@endsection

@section('name_page')
    Thương hiệu sản phẩm
@endsection
@section('content')
  <div class="container mx-auto">
    <h3 class="text-center ">Danh sách thương hiệu sản phẩm</h3>
    @if (request()->session()->has('message'))
    <p>{{ request()->session()->get('message') }}</p>
   @endif
    <table class="table table-dark">
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
@endsection
