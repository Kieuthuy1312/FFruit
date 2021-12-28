@extends('Fontend.layouts.main')

@section('title')
	Cart
@endsection

@section('breadcrumb-text')
	<p>Fresh and Organic</p>
	<h1>Cart</h1>
@endsection

@section('content')
	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
				<div id="listCart" class="row">
					@if (Session::has('cart')!=null)	
						<div class="col-lg-8 col-md-12">
							<div class="cart-table-wrap">
									<table class="cart-table">
										<thead class="cart-table-head">
											<tr class="table-head-row">
												<th class="product-remove"></th>
												<th class="product-image">Product Image</th>
												<th class="product-name">Name</th>
												<th class="product-price">Price</th>
												<th class="product-quantity">Quantity</th>
												<th class="product-total">Total</th>
											</tr>
										</thead>
										<tbody>
												@foreach (Session::get('cart')->products as $product)
													<tr class="table-body-row">
														<td class="product-remove"><a  onclick="deleteItemListCart({{ $product['productInfo']->id  }})" href="javascript:"><i class="far fa-window-close"></i></a></td>
														<td><img width="70%" height="150px"  src="{{ Storage::disk('avatar')->url($product['productInfo']->avatar) }}" alt=""></td>
														<td class="product-name">{{ $product['productInfo']->title }}</td>
														<td class="product-price">{{  number_format($product['productInfo']->price) }}<sup>đ</sup></td>
														<td class="product-quantity">
															<input name="quantily" data-id="{{ $product['productInfo']->id  }}" type="number" placeholder="0" value="{{ $product['quantily'] }}">
														</td>
														<td class="product-total">{{ number_format($product['quantily']* $product['productInfo']->price) }}<sup>đ</sup></td>
													</tr>
												@endforeach
												{{-- <input id="total_quantily_cart" hidden type="number" value="{{ Session::get('cart')->totalQuantily }}"> --}}
										</tbody>
									</table>
							</div>
						</div>
						@else
							<p class="text-center fs-5">
								Chưa có sản phẩm nào trong giỏ hàng!
								<div class="text-center fs-5">
									Thật tiếc! Chúng tôi biết bạn đang muốn mua món đồ gì đó <br>
		
									nhưng trước tiên bạn cần thêm món đồ đó vào giỏ hàng của mình.<br>
									
									Nhấn <a href="/" > vào đây </a> để tiếp tục mua sắm.
								</div>
							</p>
						@endif
						@if (Session::has('cart')!=null)	
						<div class="col-lg-4">
							<div class="total-section">
								<table class="total-table">
									<thead class="total-table-head">
										<tr class="table-total-row">
											<th>Total</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
										<tr class="total-data">
											<td><strong>Subtotal: </strong></td>
											<td>{{ number_format(Session::get('cart')->totalPrice) }}<sup>đ</sup></td>
										</tr>
										<tr class="total-data">
											<td><strong>Shipping: </strong></td>
											<td>$45</td>
										</tr>
										<tr class="total-data">
											<td><strong>Total: </strong></td>
											<td>$545</td>
										</tr>
									</tbody>
								</table>
								<div class="cart-buttons">
									<a id="edit-all" class="boxed-btn">Update Cart</a>
									<a href="checkout.html" class="boxed-btn black">Check Out</a>
								</div>
							</div>

							<div class="coupon-section">
								<h3>Apply Coupon</h3>
								<div class="coupon-form-wrap">
									<form action="index.html">
										<p><input type="text" placeholder="Coupon"></p>
										<p><input type="submit" value="Apply"></p>
									</form>
								</div>
							</div>
						</div>
					@endif
				</div>
		</div>
	</div>
	<!-- end cart -->
	@include('Fontend.layouts.logo')
@endsection
