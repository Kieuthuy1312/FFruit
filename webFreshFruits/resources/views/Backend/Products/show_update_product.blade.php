@extends('Backend.layouts.main1')

@section('title')
  Trang sản phẩm
@endsection

@section('name_page')
    Sản phẩm
@endsection
@section('content')
  <div class="container mx-auto">
    <h3 class="text-center ">Cập nhật sản phẩm</h3>
 <!-- form start -->
    <form method="POST" action="/Products_{{ $product->id }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body"> 
        <div class="form-group mb-3">
            <label class="fw-bold" for="name">Tên sản phẩm</label>
            <input type="text" name="title" class="form-control" id="name" placeholder="Tên sản phẩm" value="{{ $product->title }}"/>
            @error('title')
                    <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mb-3">
            <img width="100px" height="100px" src="{{Storage::disk('avatar')->url($product->avatar)}}"/>
        </div>
        <div class="form-group mb-3">
            <label class="fw-bold" for="price">Giá sản phẩm</label>
            <input type="number" name="price" class="form-control" id="price" value="{{ $product->price }}"/>
            @error('price')
                    <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="fw-bold" for="description">Mô tả</label>
            <input type="text" name="description" class="form-control" id="description"  value="{{ $product->description }}"/>
            @error('description')
                    <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="fw-bold" for="content">Nội dung</label>
            <input type="text" name="content" class="form-control" id="content"  value="{{ $product->content }}"/>
            @error('content')
                    <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="fw-bold" for="content">Danh mục</label>
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
        <button type="submit" class="btn btn-danger ">Thêm</button>
     </div>
 </form>
</div>
@endsection