@extends('Backend.layouts.main')

@section('title')
  Trang hóa đơn
@endsection

@section('name_page')
    Hóa đơn
@endsection


@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Bảng hóa đơn</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              @if (request()->session()->has('message'))
                <p>{{ request()->session()->get('message') }}</p>
               @endif
                  <a class="btn btn-outline-danger d-inline-block ms-2" href="/show_create_bill">+Thêm</a>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th class="text-center">STT</th>
                        <th  class="text-center">ID</th>
                        <th  class="text-center">Tên người mua</th>
                        <th  class="text-center">Email</th>
                        <th  class="text-center">Số điện thoại</th>
                        <th  class="text-center">Địa chỉ</th>
                        <th  class="text-center">Ghi chú</th>
                        <th  class="text-center">Tên sản phẩm</th>
                        <th  class="text-center">Số lượng</th>
                        <th  class="text-center">Giá</th>
                        <th  class="text-center">Thành tiền</th>
                        <th  class="text-center">Hoạt động</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($bills as $key=>$bill)
                        <tr>
                            <td  class="text-center">{{ $key + 1 }}</td>
                            <td  class="text-center">{{ $bill->id }}</td>
                            <td  class="text-center">{{ $bill->name }}</td>
                            <td  class="text-center">{{ $bill->rmail }}</td>
                            <td  class="text-center">{{ $bill->phone_number }}</td>
                            <td  class="text-center">{{ $bill->address }}</td>
                            <td  class="text-center">{{ $bill->note }}</td>
                            <td  class="text-center">{{ $bill->product_id }}</td>
                            <td  class="text-center">{{ $bill->quantily }}</td>
                            <td  class="text-center">{{ $bill->price }}</td>
                            <td  class="text-center">{{ $bill->price * $bill->quantily }}</td>
                            <td class="text-center">
                                <a href="/show_update_bill_{{ $bill->id }}"  style="color: rgb(45, 113, 216)"><i class="fas fa-user-edit ms-3 me-3"></i></a>
                                {{-- <a href="/Bills_{{ $category->id }}" onclick="confirm('Bạn có chắc chắn muốn xóa?')" style="color: rgb(219, 57, 57)"><i class="fas fa-trash-alt"></i></a> --}}
                            </td>  
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="float-end me-5">
                    {{ $bills->links() }}
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection