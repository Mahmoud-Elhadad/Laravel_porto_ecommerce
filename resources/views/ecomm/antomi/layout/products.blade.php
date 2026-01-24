

<div class="tab-pane fade show active" id="Computer3" role="tabpanel" >
    <div class="product_carousel product_style product_column5 owl-carousel" >
                            @foreach ($products as $product)
                                <article class="single_product" style="height: 350px">
                                    <figure>

                                        <div class="product_thumb" >
                                            @if (isset($product->image[0]) && $product->image[0])
                                                <a class="primary_img"  href="{{ route("antomi.product.details" , $product->id) }}"><img style="height: 200px; width: 200px; object-fit: cover; " src="{{ asset("storage/images/products/".$product->image[0]->name) }}" alt=""></a>
                                                @if (isset($product->image[1]))

                                                    <a class="secondary_img" href="{{ route("antomi.product.details" , $product->id) }}"><img src="{{ asset("storage/images/products/".$product->image[1]->name) }}" alt=""></a>

                                                @endif
                                            @else
                                                <a class="primary_img"  href="{{ route("antomi.product.details" , $product->id) }}"><img style="height: 200px; width: 200px; object-fit: cover; " src="{{ asset("antomi") }}/assets/img/product/product1.jpg" alt=""></a>
                                            @endif
                                            <div class="label_product">
                                                <span class="label_sale">{{$product->sale}}%</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content" >
                                            <div class="product_content_inner">
                                                <h4 class="product_name text-uppercase"><a href="{{ route("antomi.product.details" , $product->id) }}">{{ $product->name }}</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">${{ $product->price }}</span>
                                                    <span class="current_price">${{ $product->price - ($product->price * ($product->sale/100)) }}</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                            @endforeach
    </div>
</div>
