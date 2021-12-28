@extends('Fontend.layouts.main')

@section('title')
	Liên hệ
@endsection

@section('breadcrumb-text')
	<p>Hộ trợ 24/7</p>
	<h1>Liên hệ với chúng tôi</h1>
@endsection
	
@section('content')
	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Bạn có bất kỳ thắc mắc nào?</h2>
						<p>Nếu bạn có bất kỳ thắc mắc hay góp ý cho chúng tôi. Hay điền form dưới đây nhé!</p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
							<p>
								<input type="text" placeholder="Tên" name="name" id="name">
								<input type="email" placeholder="Email" name="email" id="email">
							</p>
							<p>
								<input type="tel" placeholder="Phone" name="phone" id="phone">
								<input type="text" placeholder="Chủ đề" name="topic" id="topic">
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Bạn thắc mắc gì?"></textarea></p>
							<p><input type="submit" value="Gửi"></p>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Địa chỉ</h4>
							<p>Số nhà 24 D7, KĐT Đại Kim - Định Công, P.Đại Kim, Q.Hoàng Mai, TP.HN</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Giờ hoạt động</h4>
							<p>Thứ 2- Thứ 6: 8AM đến 9PM <br> Thứ 7- Chủ nhật: 10AM đến 8PM</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Liên hệ</h4>
							<p>Điện Thoại: +00 111 222 3333 <br> Email: support@FFruit.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->
{{-- 
	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->

	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26432.42324808999!2d-118.34398767954286!3d34.09378509738966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf07045279bf%3A0xf67a9a6797bdfae4!2sHollywood%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1576846473265!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
	</div>
	<!-- end google map section --> --}}

@endsection