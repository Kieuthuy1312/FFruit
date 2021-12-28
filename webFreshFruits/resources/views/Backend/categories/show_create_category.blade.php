@extends('Backend.layouts.main1')

@section('title')
  Trang danh mục sản phẩm
@endsection

@section('name_page')
    Danh mục sản phẩm
@endsection
@section('content')
  <div class="container mx-auto">
    <h3 class="text-center ">Thêm danh mục sản phẩm</h3>
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
                <textarea type="text" rows="10" name="description" class="form-control" id="description" placeholder="Mô tả" >{{ old('description') }}</textarea>
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
            <button type="submit" class="btn btn-danger ">Thêm</button>
        </form>
    </div>
 @endsection
    