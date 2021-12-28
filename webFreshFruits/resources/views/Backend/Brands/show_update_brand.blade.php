@extends('Backend.layouts.main1')

@section('title')
    Trang thương hiệu sản phẩm
@endsection

@section('name_page')
    Thương hiệu sản phẩm
@endsection
@section('content')
  <div class="container mx-auto">
    <h3 class="text-center ">Cập nhật thương hiệu sản phẩm</h3>
        <!-- form start -->
        <form method="POST" action="/Brands_{{ $brand->id }}">
            @csrf
            <div class="card-body">
            <div class="form-group mb-3">
                <label class="fw-bold" for="name">Tên danh mục</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Tên danh mục" value="{{ $brand->name }}"/>
                @error('name')
                        <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label  class="fw-bold" for="description">Mô tả</label>
                <textarea type="text" rows="10" name="description" class="form-control" id="description" placeholder="Mô tả">{{ $brand->description }}</textarea>
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
    