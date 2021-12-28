<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>@yield('title')</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="Fontend/assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="Fontend/assets/css/all.min.css">
	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- owl carousel -->
	<link rel="stylesheet" href="Fontend/assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="Fontend/assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="Fontend/assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="Fontend/assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="Fontend/assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="Fontend/assets/css/responsive.css">

</head>
<body>
    @include('Fontend.layouts.header');
    @yield('content')
	 <!-- Modal to display data in view -->
	 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title " id="exampleModalLabel">Giỏ hàng</h5>
			  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" id="cart">

			</div>
			<div class="modal-footer">
					<button type="button" class="cart-btn" class="btn btn-secondary" data-bs-dismiss="modal">Tiếp tục mua hàng</button>
					<a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Xem giỏ hàng</a>
				</div>
			</div>
		</div>
	</div>

	<!-- End modal -->
    @include('Fontend.layouts.footer');
    
	<!-- jquery -->
	<script src="Fontend/assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<!-- count down -->
	<script src="Fontend/assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="Fontend/assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="Fontend/assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="Fontend/assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="Fontend/assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="Fontend/assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="Fontend/assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="Fontend/assets/js/main.js"></script>
	
	{{-- AlertifyJS --}}
	<!-- JavaScript -->
	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
	<!-- Default theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
	<!-- Semantic UI theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
	<!-- Bootstrap theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

	{{-- Add cart ajax --}}
	<script>
		//  function loadData() {
        //     $.ajax({
        //         //gửi request lên url index.php với controller và action tương ứng
		// 		url: 'add_cart_'+id, 
        //         method: 'GET',
        //         //nếu thành công thì xoá nội dung trong <tbody> và append nội dung ajax vào <table>
        //         success: function(res) {
        //             $("#miniCart").remove();
		// 			$("#miniCart").html(res);
        //         },
        //         error: function(err) {
        //             console.error(err) 
        //         }
        //     });  
        // }
		function addCart(id){
			// console.log(id)
			$.ajax({
				url: 'add_cart_'+id, 
				type: 'GET',
			}).done(function(res){
				if(res != null){
					renderCart(res);
					alertify.success('Thêm sản phẩm thành công');
					}
			}).error(function(res){
				// console.log(res);
			});
		}
		function deleteItemCart(id){
			$.ajax({
				url: 'delete_item_cart_'+id, 
				type: 'GET',
			}).done(function(res){
				if(res != null){
					renderCart(res);
					deleteItemListCart(id)
					alertify.success('Xóa sản phẩm thành công');
					}
			}).error(function(res){
				// console.log(res);
			});
		}
		function renderCart(res){
				$("#miniCart").empty();
				 $("#miniCart").html(res);
				($('#total_quantily_cart').val() > 0) ?  $("#miniCart").html(res) : $("#miniCart").html('<p class="me-5 pe-5" >Chưa có sản phẩm nào trong giỏ hàng!</p>');
				// $("#totalQuantily").empty();
				// $("#totalQuantily").text($('#total_quantily_cart').val())
				($('#total_quantily_cart').val() > 0) ? $("#totalQuantily").text($('#total_quantily_cart').val()) : $("#totalQuantily").text('0');
				// ($('#total_quantily_cart').val() > 0) ? $('#listCart').html(res) : $('#listCart').html(`<p class="text-center fs-5">Chưa có sản phẩm nào trong giỏ hàng!
				// 		<div class="text-center fs-5">
				// 			Thật tiếc! Chúng tôi biết bạn đang muốn mua món đồ gì đó <br>

				// 			nhưng trước tiên bạn cần thêm món đồ đó vào giỏ hàng của mình.<br>
							
				// 			Nhấn <a href="/" > vào đây </a> để tiếp tục mua sắm.
				// 		</div>
				// 	</p>`);
			}
		function deleteItemListCart(id){
			// console.log(id)
			$.ajax({
				url: '/delete_item_list_cart/'+id, 
				type: 'GET',
			}).done(function(res){
				if(res != null){
					renderListCart(res)
					// deleteItemCart(id)
					alertify.success('Xóa sản phẩm thành công');
					}
			}).error(function(res){
				// console.log(res);
			});
		}
		function renderListCart(res){
			$("#listCart").empty();
				$("#listCart").html(res);
				($('#total_cart').val() > 0) ?  $("#miniCart").html(res) : $("#miniCart").html('<p class="me-5 pe-5" >Chưa có sản phẩm nào trong giỏ hàng!</p>');
				($('#total_cart').val() > 0) ? $("#totalQuantily").text($('#total_cart').val()) : $("#totalQuantily").text('0');
		
			}

			// SAVE LISTCART
		$('#edit-all').on('click', function(){
			var lists = [];
			$('#listCart table tbody tr td').each(function(){
				$(this).find('input').each(function(){
					var element = { key: $(this).data('id'), value: $(this).val()};
					lists.push(element);
				});
			});
			$.ajax({
				url: 'save-all', 
				type: 'POST',
				data: {
					"_token" : "{{ csrf_token()}}" ,
					"data" :  lists
				}
			}).done(function(res){
				location.reload();
			});
		});
	</script>
</body>
</html>