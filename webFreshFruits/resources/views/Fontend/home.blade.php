@extends('Fontend.layouts.main')

@section('title')
	Trang chủ
@endsection

@section('breadcrumb-text')
	<p class="subtitle">Tươi & Hữu cơ</p>
	<h1>Trái cây ngon theo mùa</h1>
	<div class="hero-btns">
		<a href="shop.html" class="boxed-btn">Trái cây</a>
		<a href="contact.html" class="bordered-btn">Về chúng tôi</a>
	</div>
@endsection
	
@section('content')

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Miễn phí vận chuyển</h3>
							<p>Khi đặt hàng trên 200.000VNĐ</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>Hỗ trợ 24/7</h3>
							<p>Nhận hỗ trợ mọi lúc</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Đổi trả</h3>
							<p>Hoàn trả trong vòng 3 ngày</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->
{{-- 
	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3>Sản phẩm<span class="orange-text"> của chúng tôi</span></h3>
						<p>Với tôn chỉ “Mang đến cho khách hàng không chỉ là những sản phẩm trái cây an toàn, chất lượng cao, mà kèm theo đó là những dịch vụ tiện ích thân thiện. 
							”Công ty CP FFruit” - đơn vị chuyên cung cấp các loại trái cây cao cấp từ các nước trên thế giới đang từng bước phát triển và chiếm được lòng tin của người tiêu dùng Việt Nam. 
							Hiện tại, công ty có hệ thống các cửa hàng mang thương hiệu Hoa quả sạch FFruit được phân bố rộng khắp trên địa bàn các tỉnh phía Bắc phục vụ đủ nhu cầu cho mọi khách hàng. Bằng những nỗ lực không ngừng theo thời gian,
							 hệ thống Hoa quả sạch FFruit từng ngày hoàn thiện hơn về tất cả mọi mặt.
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img width="400px" height="200px" src="https://allimages.sgp1.digitaloceanspaces.com/photographercomvn/2020/10/1603664017_Tuyen-chon-50-hinh-anh-dep-nhat-ve-qua-tao.jpg" alt=""></a>
						</div>
						<h3>Táo Envy New Zealand</h3>
						<p class="product-price"><span>Kg</span> 200.000VNĐ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm giỏ hàng</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img width="400px" height="200px" src="https://minhphuongfruit.com/upload/images/z2071347522385_7966f1f8ef92b8aa82f4ed363bd1332a.jpg" alt=""></a>
						</div>
						<h3>Lê Xanh Hàn Quốc</h3>
						<p class="product-price"><span> Kg</span> 300.000VNĐ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm giỏ hàng</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img width="400px" height="200px" src="https://www.trieuphunongdan.com/wp-content/uploads/2018/06/buoi-tri-ho-dam.jpg" alt=""></a>
						</div>
						<h3>Bưởi da xanh Phú Quý</h3>
						<p class="product-price"><span> Kg</span> 30.000VNĐ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm giỏ hàng</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section --> --}}
	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<h2>Chúng tôi là <span class="orange-text">FFruit</span></h2>
						<p>Với tôn chỉ “Mang đến cho khách hàng không chỉ là những sản phẩm trái cây an toàn, chất lượng cao, mà kèm theo đó là những dịch vụ tiện ích thân thiện. 
							”Cửa hàng hoa quả sạch FFruit” - đơn vị chuyên nhập khẩu các loại trái cây cao cấp từ các nước trên thế giới đang từng bước phát triển và chiếm được lòng tin của người tiêu dùng Việt Nam. 
							Hiện tại, công ty có hệ thống các cửa hàng mang thương hiệu Hoa quả sạch Fuji được phân bố rộng khắp trên địa bàn các tỉnh phía Bắc phục vụ đủ nhu cầu cho mọi khách hàng. 
							Bằng những nỗ lực không ngừng theo thời gian, hệ thống Hoa quả sạch Fuji từng ngày hoàn thiện hơn về tất cả mọi mặt.</p>
						<a href="about.html" class="boxed-btn mt-4">Giới thiệu chung</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
	
	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<h3>Giảm giá tháng 12 đang diễn ra! <br> với <span class="orange-text"> CHƯƠNG TRÌNH GIẢM GIÁ LỚN ...</span></h3>
            <div class="sale-percent"><span>Giảm giá! <br> lên tới</span>50% </div>
            <a href="shop.html" class="cart-btn btn-lg">Mua ngay</a>
        </div>
    </section>
	<!-- end shop banner -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3> SẢN PHẨM MỚI NHẤT </h3>
						<p>Đây là những sản phẩm mới nhất</p>
					</div>
				</div>
			</div>

			<div class="row">
				@foreach ($products_new as $product)
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-1"> <img width="100%" height="200px" src="{{Storage::disk('avatar')->url($product->avatar)}}"/></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">{{ $product->title }}</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i>{{ $product->updated_at }}</span>
							</p>
							<p class="excerpt">{{ $product->description }}</p>
							<a onclick="addCart({{ $product->id }})" href="javascript:" class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
						</div>
					</div>
				</div>
				@endforeach
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="news.html" class="boxed-btn">Xem ngay</a>
				</div>
			</div>
		  </div>
		</div>
	</div>
	<!-- end latest news -->
	<div class="latest-news pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3> Đặc sản <span class="orange-text"> hoa quả Việt</span></h3>
						<p>Đây là những sản phẩm bán chạy nhất trong thời gian vừa qua</p>
					</div>
				</div>
			</div>

			<div class="row">
				@foreach ($products_highlight as $product)
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-1"> <img width="100%" height="200px" src="{{Storage::disk('avatar')->url($product->avatar)}}"/></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">{{ $product->title }}</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i>{{ $product->updated_at }}</span>
							</p>
							<p class="excerpt">{{ $product->description }}</p>
							<a onclick="addCart({{ $product->id }})" href="javascript:" class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="news.html" class="boxed-btn">Xem ngay</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->
	{{-- <!-- testimonail-section -->
<div class="testimonail-section mt-80 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 text-center">
				<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
						<div class="section-title">	
							<h3><span class="orange-text">Thương hiệu</span> nổi bật</h3>
							<p></p>
						</div>
						<div class="carousel-item active">
							<div class="single-testimonial-slider">
								<div class="client-avater">
									<img src="Fontend/assets/img/company-logos/1.png" alt="">
								</div>
								<div class="client-meta">
									<h3>Jacob Sikim <span>Local shop owner</span></h3>
									<p class="testimonial-body">
										" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
									</p>
									<div class="last-icon">
										<i class="fas fa-quote-right"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="single-testimonial-slider">
								<div class="client-avater">
									<img src="Fontend/assets/img/company-logos/1.png" alt="">
								</div>
								<div class="client-meta">
									<h3>Jacob Sikim <span>Local shop owner</span></h3>
									<p class="testimonial-body">
										" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
									</p>
									<div class="last-icon">
										<i class="fas fa-quote-right"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="single-testimonial-slider">
								<div class="client-avater">
									<img src="Fontend/assets/img/company-logos/1.png" alt="">
								</div>
								<div class="client-meta">
									<h3>Jacob Sikim <span>Local shop owner</span></h3>
									<p class="testimonial-body">
										" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
									</p>
									<div class="last-icon">
										<i class="fas fa-quote-right"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
			</div>
	 	</div>
  	</div>
</div>
<!-- end testimonail-section --> --}}
@include('Fontend.layouts.logo')
@endsection