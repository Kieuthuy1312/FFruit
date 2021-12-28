@extends('Backend.layouts.main1')

@section('title')
  Trang sản phẩm
@endsection

@section('name_page')
    Sản phẩm
@endsection
@section('content')
  <div class="container mx-auto">
    <h3 class="text-center ">Thêm sản phẩm</h3>
        <!-- form start -->
        <form method="POST" action="/Products" enctype="multipart/form-data">
            @csrf
            <div class="card-body"> 
            <div class="form-group mb-3">
                <label class="fw-bold" for="name">Tên sản phẩm</label>
                <input type="text" name="title" class="form-control" id="name" placeholder="Tên sản phẩm" value="{{ old('title') }}"/>
                @error('title')
                        <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="fw-bold" for="avatar">Ảnh đại diện</label>
                <input type="file" name="avatar" class="form-control" id="avatar"  value="{{ old('avatar') }}"/>
                @error('avatar')
                        <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="fw-bold" for="price">Giá sản phẩm</label>
                <input type="number" name="price" class="form-control" id="price" value="{{ old('price') }}"/>
                @error('price')
                        <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="fw-bold" for="description">Mô tả</label>
                <textarea type="text" rows="5" name="description" class="form-control" id="description" >{{ old('description') }}</textarea>
                @error('description')
                        <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="fw-bold" for="content">Nội dung</label>
                <textarea type="text" rows="10" name="content" class="form-control" id="content">{{ old('content') }}</textarea>
                @error('content')
                        <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="fw-bold" for="category_id">Danh mục</label>
                <select name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category_id')
                        <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="fw-bold" for="brand_id">Thương hiệu</label>
                <select name="brand_id">
                    @foreach ($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                </select>
                @error('brand_id')
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
            <button type="submit" class="btn btn-danger ">Thêm</button>
        </div>
    </form>
</div>
 @endsection
    