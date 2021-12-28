@extends('Fontend.layouts.main')

@section('title')
	Chi tiết sản phẩm	
@endsection

@section('breadcrumb-text')
	<p>TƯƠI VÀ HỮU CƠ</p>
	<h1>Chi tiết sản phẩm</h1>
@endsection
	
@section('content')

	<!-- single product -->
	<div class="single-product mt-150 mb-30">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img width="100%" height="400px"  src="{{ Storage::disk('avatar')->url($product->avatar) }}" alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3>{{ $product->title }}</h3>
						<p class="single-product-pricing"><span>Kg</span> {{number_format($product->price).'VNĐ'}}</p>
						<p><strong>Mã sản phẩm: </strong>{{ $product->id }}</p>
						<p><strong>Thương hiệu: </strong>{{ $product->brand->name }}</p>
						<p><strong>Mô tả sản phẩm: </strong>{{ $product->description }}</p>
						<div class="single-product-form">
							<form method="POST" action="/save_cart" >
								@csrf
								<input type="number" min="1" name="quantily" value="1">
								<input type="hidden" name="product_hidden" value="{{ $product->id }}">
								<a onclick="addCart({{ $product->id }})" href="javascript:" class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
							</form>
						</div>
						<h4>Share:</h4>
						<ul class="product-share">
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single product -->

	<!-- nav content tabs product -->
	<div class="mt-50 mb-150">
		<div class="container">
			<div class="row">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
					  <button class="nav-link active text-warning" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Mô tả</button>
					</li>
					<li class="nav-item" role="presentation">
					  <button class="nav-link"  id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Nội dung</button>
					</li>
				  </ul>
				  <div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="container mt-3">
							{{ $product->description }}
						</div>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="container mt-3">
							<div class="row">
								<div class="col-md-4">
									<img width="100%" height="400px"  src="{{ Storage::disk('avatar')->url($product->avatar) }}" alt="">
								</div>
								<div class="col-md-8">
									{{ $product->content }}
								</div>
							</div>
				  		</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- end nav tabs content product -->
	@include('Fontend.layouts.logo')
@endsection
