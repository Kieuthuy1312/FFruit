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
@endif