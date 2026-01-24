<x-navbar/>


<main class="main">
			<div class="container">


				<div class="row">
					<div class="col-lg-12 mt-3">
						<div class="cart-table-container">
							<table class="table table-cart">
								<thead>
									<tr>
										<th class="thumbnail-col">ProductImage</th>
										<th class="product-col">ProductName</th>
										<th class="price-col">Price</th>
										<th class="qty-col">Quantity</th>
										<th class="text-right">Subtotal</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($carts as $cart)

                                        <tr class="product-row">
                                            <td>
                                                <figure class="product-image-container">
                                                    <a href="{{ route("porto.product.details" , $cart->product_id) }}" class="product-image">
                                                        <img src="{{ asset("storage/images/products/".$cart->product->image[0]->name) }}" alt="product">
                                                    </a>


                                                </figure>
                                            </td>
                                            <td class="product-col">
                                                <h5 class="product-title">
                                                    <a href="{{route("porto.product.details" , $cart->product_id)}}" class="text-uppercase">{{ $cart->product->name }}</a>
                                                </h5>
                                            </td>
                                            <td>${{ $cart->product->price }}</td>
                                            <td>
                                                <div class="product-single-qty">
                                                    <input product_id = "{{ $cart->product_id }}" class="text-center w-75 input_count" type="number" value="{{ $cart->count }}">
                                                </div><!-- End .product-single-qty -->
                                            </td>
                                            <td class="text-right"><span class="subtotal-price">${{ $cart->count * $cart->product->price }}</span></td>
                                        </tr>

                                    @endforeach
								</tbody>


								<tfoot>
									<tr>
										<td colspan="5" class="clearfix" >


										</td>

									</tr>
								</tfoot>
							</table>
						</div><!-- End .cart-table-container -->
					</div><!-- End .col-lg-8 -->

					<!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-6"></div><!-- margin -->
		</main><!-- End .main -->

	<style>
		.table.table-cart .product-image-container {
			width: 8rem;
			max-width: 8rem;
		}
		.table.table-cart .product-image-container img {
			max-width: 100%;
			width: 100%;
			height: auto;
			object-fit: cover;
		}
		.table.table-cart .product-image-container .product-image {
			display: block;
			width: 100%;
		}
		.table.table-cart td {
			vertical-align: middle;
		}
	</style>

<x-footer/>
