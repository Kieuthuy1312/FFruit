@extends('Fontend.layouts.main')

@section('title')
	Về chúng tôi
@endsection

@section('breadcrumb-text')
	<p>Chúng tôi bán trái cây tươi</p>
	<h1>Về chúng tôi</h1>
@endsection
@section('content')
	<!-- featured section -->
	<div class="feature-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="featured-text">
						<h2 class="pb-3">Tại sao chọn <span class="orange-text">FFruit</span></h2>
						<div class="row">
							<div class="col-lg-6 col-md-6 mb-4 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-shipping-fast"></i>
									</div>
									<div class="content">
										<h3>Giao hàng tận nhà</h3>
										<p>Miễn phí vận chuyển nội thành cho các đơn hàng trị giá từ 1 triệu đồng, khác phí từ 20,000đ đến 30,000đ mỗi đơn hàng tùy địa điểm.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-money-bill-alt"></i>
									</div>
									<div class="content">
										<h3>Giá tốt nhất</h3>
										<p>Mang lại sản phẩm có mức giá tốt nhất</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-briefcase"></i>
									</div>
									<div class="content">
										<h3>Tươi ngon</h3>
										<p>Hoa quả sạch luôn tươi ngon và được bảo quản sạch sẽ, không dùng hóa chất bảo quản.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-sync-alt"></i>
									</div>
									<div class="content">
										<h3>Hoàn tiền nhanh chóng</h3>
										<p>Đổi trả hoàn tiền nhanh chóng</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end featured section -->

	<!-- team section -->
	<div class="mt-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3>Nhóm <span class="orange-text">chúng tôi</span></h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<div class="team-bg team-bg-1"></div>
						<h4>Kiều Thị Thu Thúy</h4>
						<ul class="social-link-team">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<div class="team-bg team-bg-2"></div>
						<h4>Kiều Thị Thu Thúy</h4>
						<ul class="social-link-team">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-team-item">
						<div class="team-bg team-bg-3"></div>
						<h4>Kiều Thị Thu Thúy</h4>
						<ul class="social-link-team">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end team section -->
		<!-- testimonail-section -->
		<div class="testimonail-section mt-80 mb-150">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="section-title">
							<h3>Ý kiến<span class="orange-text"> khách hàng</span></h3>
						</div>
						<div class="testimonial-sliders">
							<div class="single-testimonial-slider">
								<div class="client-avater">
									<img src="Fontend/assets/img/avaters/avatar1.png" alt="feeback khách hàng">
								</div>
								<div class="client-meta">
									<h3>Ông Thanh </h3>
									<p class="testimonial-body">
										 "Có lần, tôi muốn đặt giỏ quà tặng sinh nhật đối tác, nhân viên đã gọi điện tư vấn rất nhiệt tình, 
										 trang trí rất đẹp và sáng tạo, tôi rất ưng ý và sẽ thường xuyên ghé mua hàng tại hệ thống HQS FFruit!"
									</p>
									<div class="last-icon">
										<i class="fas fa-quote-right"></i>
									</div>
								</div>
							</div>
							<div class="single-testimonial-slider">
								<div class="client-avater">
									<img src="Fontend/assets/img/avaters/avatar2.png" alt="feeback khách hàng">
								</div>
								<div class="client-meta">
									<h3>Bà Phương</h3>
									<p class="testimonial-body">
										“Tôi thích nhất chính sách đổi trả của Hoa quả sạch FFruit. 
										Có lần mình mua trái lựu bị khô bên trong, các bạn nhân viên đã tư vấn nhiệt tình và đổi trả 100% Miễn phí.
										 Từ đó, tôi không cần lo lắng về chất lượng sản phẩm mua tại hệ thống hoa quả sạch nhập khẩu FFruit”.

									</p>
									<div class="last-icon">
										<i class="fas fa-quote-right"></i>
									</div>
								</div>
							</div>
							<div class="single-testimonial-slider">
								<div class="client-avater">
									<img src="Fontend/assets/img/avaters/avatar3.png" alt="feeback khách hàng">
								</div>
								<div class="client-meta">
									<h3>Bà Tuyến</h3>
									<p class="testimonial-body">
										“Tôi thích nhất chính sách đổi trả của Hoa quả sạch FFruit. 
										Có lần mình mua trái lựu bị khô bên trong, các bạn nhân viên đã tư vấn nhiệt tình và đổi trả 100% Miễn phí.
										 Từ đó, tôi không cần lo lắng về chất lượng sản phẩm mua tại hệ thống hoa quả sạch nhập khẩu FFruit”.
									</p>
									<div class="last-icon">
										<i class="fas fa-quote-right"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end testimonail-section -->
	@include('Fontend.layouts.logo')
@endsection