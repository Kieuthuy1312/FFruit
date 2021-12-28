@extends('Backend.layouts.main1')

@section('title')
  Trang danh mục sản phẩm
@endsection

@section('name_page')
    Danh mục sản phẩm
@endsection
@section('content')
  <div class="container mx-auto">
    <h3 class="text-center ">Danh sách danh mục sản phẩm</h3>
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
        @foreach ($categories as $key=>$category)
          <tr>
              <td  class="text-center">{{ $key + 1 }}</td>
              <td  class="text-center">{{ $category->id }}</td>
              <td  class="text-center">{{ $category->name }}</td>
              <td  class="text-center">{{ $category->description }}</td>
              <td  class="text-center">
                @if ($category->status==0) 
                <a href="/active_category_{{ $category->id }}" class="fs-5" style="color: rgb(153, 177, 153)"> <i class="fas fa-toggle-off"></i>  </a>            
              @else
                <a href="/unactive_category_{{ $category->id }}" class="fs-5" style="color: rgb(45, 216, 45)" > <i class="fas fa-toggle-on"></i></a>      
            @endif
              </td>
              <td class="text-center">
                  <a href="/show_update_category_{{ $category->id }}"  style="color: rgb(45, 113, 216)"><i class="fas fa-user-edit ms-3 me-3"></i></a>
                  <a href="/Categories_{{ $category->id }}" onclick="confirm('Bạn có chắc chắn muốn xóa?')" style="color: rgb(219, 57, 57)"><i class="fas fa-trash-alt"></i></a>
              </td>  
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="float-end me-5">
      {{ $categories->links() }}
    </div>
  </div>
@endsection
