@extends('Fontend.layouts.main')

@section('title')
	Sản phẩm
@endsection

@section('breadcrumb-text')
	<p>TƯƠI VÀ HỮU CƠ</p>
	<h1>Sản phẩm</h1>
@endsection
	
@section('content')

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<h2 class="text-center mb-5">HOA QUẢ NHẬP KHẨU</h2>
		<div class="container"> 
			<div class="row product-lists">
				@foreach ($products as $product)
					<div class="col-lg-4 col-md-6 text-center strawberry">
						<div class="single-product-item">
							<div class="product-image">
								<a href="/product_detail_{{ $product->id }}"><img width="100%" height="200px"  src="{{Storage::disk('avatar')->url($product->avatar)}}" alt=""></a>
							</div>
							<h3>{{ $product->title }}</h3>
							<p class="product-price"><span> Kg</span>{{ $product->price }} </p>
							<p class="excerpt">{{ $product->description }}</p>
							<a  onclick="addCart({{ $product->id }})" href="javascript:" class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
						</div>
					</div>
				@endforeach
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="pagination-wrap">
							<ul>
								<li><a href="#">Prev</a></li>
								<li><a href="#">1</a></li>
								<li><a class="active" href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">Next</a></li>
								{{-- {{ $products->links() }} --}}
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
	<!-- end products -->								
	@include('Fontend.layouts.logo')
@endsection