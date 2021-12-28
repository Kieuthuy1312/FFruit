@extends('Fontend.layouts.main')

@section('title')
	Về chúng tôi
@endsection

@section('breadcrumb-text')
	<p>Chúng tôi bán trái cây tươi</p>
	<h1>404 - Not Found</h1>
@endsection
@section('content')

<!-- error section -->
<div class="full-height-section error-section">
	<div class="full-height-tablecell">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="error-text">
						<i class="far fa-sad-cry"></i>
						<h1>Oops! Not Found.</h1>
						<p>The page you requested for is not found.</p>
						<a href="index.html" class="boxed-btn">Back to Home</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end error section -->
@include('Fontend.layouts.logo')
@endsection