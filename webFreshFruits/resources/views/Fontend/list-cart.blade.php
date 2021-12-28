
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
                                        <form action="save-all" method="POST">
                                             <input name="quantily" data-id="{{ $product['productInfo']->id  }}" type="number" placeholder="0" value="{{ $product['quantily'] }}">
                                        </form>
                                    </td>
                                    <td class="product-total" id="total-product">{{ number_format($product['quantily']* $product['productInfo']->price) }}<sup>đ</sup></td>
                                </tr>
                            @endforeach
                            <input id="total_cart" hidden type="number" value="{{ Session::get('cart')->totalQuantily }}">
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
                
                Nhấn <a href="/" > <span>Vào đây</span> </a> để tiếp tục mua sắm.
            </div>
        </p>
@endif