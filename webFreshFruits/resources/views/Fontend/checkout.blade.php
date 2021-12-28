@extends('Fontend.layouts.main')

@section('title')
	Thông tin thanh toán đơn hàng
@endsection

@section('breadcrumb-text')
	<p>TƯƠI VÀ HỮU CƠ</p>
	<h1>Đặt hàng và thanh toán</h1>
@endsection
	
@section('content')

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									ĐẶT HÀNG VÀ THANH TOÁN
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form action="index.html">
						        		<p><input type="text" name="name" placeholder="Tên"></p>
						        		<p><input type="email" name="email"  placeholder="Email"></p>
						        		<p><input type="text" name="address"  placeholder="Địa chỉ"></p>
						        		<p><input type="tel" name="phone_number"  placeholder="Điện thoại"></p>
						        		<p><textarea type="text" name="note" cols="30" rows="10" placeholder="Ghi chú"></textarea></p>
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>
						<div class="mt-3">
							<a href="#" class="boxed-btn"><i class="fas fa-arrow-circle-left me-2"></i>Quay lại giỏ hàng</a>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Hình ảnh</th>
									<th>Tên sản phẩm</th>
									<th>Số lượng</th>
									<th>Giá</th>
									<th>Thành tiền</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
								<tr>
									<td>Product</td>
									<td>Total</td>
									<td>Total</td>
									<td>Total</td>
									<td>Total</td>
								</tr>
								<tr>
									<td>Product</td>
									<td>Total</td>
									<td>Total</td>
									<td>Total</td>
									<td>Total</td>
								</tr>
								<tr>
									<td>Product</td>
									<td>Total</td>
									<td>Total</td>
									<td>Total</td>
									<td>Total</td>
								</tr>
								<tr>
									<td>Product</td>
									<td>Total</td>
									<td>Total</td>
									<td>Total</td>
									<td>Total</td>
								</tr>
							</tbody>
						</table>
						<a href="#" class="boxed-btn">Xác nhận và thanh toán</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

	@include('Fontend.layouts.logo')
@endsection