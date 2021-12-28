@extends('Backend.layouts.main')

@section('title')
  Trang cập nhật danh mục sản phẩm
@endsection

@section('name_page')
  Cập nhật danh mục sản phẩm
@endsection
@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Cập nhật danh mục sản phẩm</h3>
  </div>
  <!-- form start -->
  <form method="POST" action="/Categories_{{ $category->id }}">
    @csrf
    <div class="card-body">
      <div class="form-group mb-3">
        <label class="fw-bold" for="name">Tên danh mục</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Tên danh mục" value="{{ $category->name }}"/>
         @error('name')
                <p>{{ $message }}</p>
          @enderror
      </div>
      <div class="form-group mb-3">
        <label  class="fw-bold" for="description">Mô tả</label>
        <textarea type="text"  name="description" class="form-control" id="description" placeholder="Mô tả">{{ $category->description }}</textarea>
           @error('description')
             <p>{{ $message }}</p>
          @enderror
      </div>  
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-danger">Cập nhật</button>
    </div>
  </form>
</div>
@endsection