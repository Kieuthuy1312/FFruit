	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="#" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="/">Trang chủ</a>
								</li>
								<li><a href="/about">Về chúng tôi</a></li>
								<li><a href="/shop">Sản phẩm</a>
									{{-- <ul class="sub-menu">
										@foreach ($categories as $category)
											<li><a href="#">{{$category->name}}</a></li>
										@endforeach
										
									</ul> --}}
								</li>
								<li><a href="news.html">Tin tức</a>
									{{-- <ul class="sub-menu">
										<li><a href="news.html">News</a></li>
										<li><a href="single-news.html">Single News</a></li>
									</ul> --}}
								</li>
								<li><a href="contact.html">Liên hệ</a></li>
								<li class="float-end">
									<a class="shopping-cart" href="/list_cart" ><i class="fas fa-shopping-cart">
										@if (Session::has('cart')!=null)	
											<span id="totalQuantily">{{ Session::get('cart')->totalQuantily }}</span>
										@else
											<span id="totalQuantily">0<span>
										@endif
									</i></a>
										<ul class="mini-cart">
											<li id="miniCart">	
												@if (Session::has('cart')!=null)	
													<table class="cart-table">
														<thead class="cart-table-head">
															<tr class="table-head-row">
																<th class="product-remove"></th>
																<th class="product-image">Ảnh</th>
																<th class="product-name">Sản phẩm</th>
																<th class="product-price">Giá</th>
																<th class="product-quantity">Số lượng</th>
																{{-- <th class="product-total">Total</th> --}}
															</tr>
														</thead>
														<tbody>
																@foreach (Session::get('cart')->products as $product)
																	<tr class="table-body-row">
																		<td class="product-remove text-center"><a onclick="deleteItemCart({{ $product['productInfo']->id }})" href="javascript:"><i class="far fa-window-close"></i></a></td>
																		<td class="product-image text-center"><img width="100%" height="50px"  src="{{ Storage::disk('avatar')->url($product['productInfo']->avatar) }}" alt=""></td>
																		<td class="product-name text-center" >{{ $product['productInfo']->title }}</td>
																		<td class="product-price text-center">{{ number_format($product['productInfo']->price) }}</td>
																		<td class="product-quantity text-center">x{{ $product['quantily'] }}</td>
																		{{-- <td class="product-total">{{ number_format($product['quantily']* $product['productInfo']->price) }}</td> --}}
																	</tr>
															@endforeach		
															<input id="total_quantily_cart" hidden type="number" value="{{ Session::get('cart')->totalQuantily }}">					
													</tbody>
												</table>
											@else
												<p class="me-5 pe-5" >Chưa có sản phẩm nào trong giỏ hàng!</p>
											@endif
										</li>
									</ul>
								</li>
								<li class="float-end">
									<a href="news.html"><i class="fas fa-user">@auth
										{{ auth()->user()->name }}
										@endauth</i></a>

										<ul class="sub-menu">
											@if (isset(auth()->user()->name))
												<li><a href="/account"><i class="fas fa-sign-out-alt me-3"></i> Đăng xuất</a></li>
											@else
												<li><a href="/account"><i class="fas fa-sign-in-alt me-3"></i>Đăng nhập</a></li>
											@endif			
										</ul>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
    	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg" id="breadcrumb-img" >
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						@yield('breadcrumb-text')
						<div class="input-group input-group-lg mt-5">
							<span class="input-group-text" id="inputGroup-sizing-lg"><i class="fas fa-search"></i></span>
							<input type="text" name="name_product" class="form-control" placeholder="Tìm kiếm sản phẩm">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	




