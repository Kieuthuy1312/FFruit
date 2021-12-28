@extends('Backend.layouts.main')

@section('title')
  Trang thêm danh mục sản phẩm
@endsection

@section('name_page')
  Thêm danh mục sản phẩm
@endsection
@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Thêm danh mục sản phẩm</h3>
  </div>
  <!-- form start -->
  <form method="POST" action="/Categories">
    @csrf
    <div class="card-body"> 
      <div class="form-group mb-3">
        <label class="fw-bold" for="name">Tên danh mục</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Tên danh mục" value="{{ old('name') }}"/>
         @error('name')
                <p>{{ $message }}</p>
          @enderror
      </div>
      <div class="form-group mb-3">
        <label  class="fw-bold" for="description">Mô tả</label>
        <textarea type="text" name="description" class="form-control" id="description" placeholder="Mô tả" >{{ old('description') }}</textarea>
           @error('description')
             <p>{{ $message }}</p>
          @enderror
      </div>   
      <div class="form-group mb-3">
        <label  class="fw-bold" for="status">Trạng thái</label>
        <select  name="status" class="form-control" id="status" >
          <option value="0">Ẩn</option>
          <option value="1">Hiện</option>
        </select>
        @error('status') 
             <p>{{ $message }}</p>
          @enderror
      </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-danger">Thêm</button>
    </div>
  </form>
</div>
@endsection