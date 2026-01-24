<section class="new-products-section">
                <div class="container">
                    <h2 class="section-title heading-border ls-20 border-0">New Arrivals</h2>

                    <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center mb-2" data-owl-options="{
						'dots': false,
						'nav': true,
						'responsive': {
							'992': {
								'items': 4
							},
							'1200': {
								'items': 5
							}
						}
					}">
                    @foreach ($products as $product )

                        <div class="product-default appear-animate" data-animation-name="fadeInRightShorter" style="height: 350px; overflow: hidden;">
                            <figure>
                                <a href="{{ route("porto.product.details" , $product->id) }}">
                                    <img src="{{ asset("storage/images/products/".$product->image[0]->name) }}"  style="height: 200px; width: 200px; object-fit: cover; "   alt="product">
                                    @if (isset($product->image[1]))
                                        <img src="{{ asset("storage/images/products/".$product->image[1]->name) }}"  style="height: 200px; width: 200px; object-fit: cover; "   alt="product">
                                    @endif
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">{{$product->sale}}%</div>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="category-list">
                                    <a href="{{ route("porto.product.details" , $product->id) }}" class="product-category">{{ $product->cat->name }}</a>
                                </div>
                                <h3 class="product-title text-uppercase">
                                    <a href="{{ route("porto.product.details" , $product->id) }}">{{ $product->name }}</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <del class="old-price">${{ $product->price }}</del>
                                    <span class="product-price">${{ $product->price - ($product->price * ($product->sale / 100)) }}</span>
                                </div>
                                <!-- End .price-box -->
                                @if (Auth::guard("web")->check())

                                    <div class="product-action">
                                        <div class="add_success"></div>
                                        <div class="div_cart">


                                            <button product_id = "{{ $product->id }}" class="btn  add_wishlist" style="width: 30px; height: 35px; padding: 0; display: flex; align-items: center; justify-content: center; line-height: 1; display: inline;" title="wishlist">
                                                @if(\App\Models\PortoWishlist::where('user_id', auth()->id())->where('product_id', $product->id)->exists())
                                                    <i class="icon-heart d-none"></i>
                                                    <i class="fas fa-heart" style="color: red;"></i>
                                                @else
                                                    <i class="icon-heart"></i>
                                                    <i class="fas fa-heart d-none" style="color: red;"></i>
                                                @endif
                                            </button>
                                        <button product_id = "{{ $product->id }}" class="btn-icon btn-add-cart product-type-simple add_cart"><i
                                                class="icon-shopping-cart"></i><span>ADD TO CART</span></button>
                                        <a href="{{ route("porto.product.details" , $product->id) }}"  title="Quick View"><i
                                                class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                @else
                                   <div class="product-action">

                                        <a href="{{ route("porto.login") }}" class="btn-icon btn-add-cart"><i
                                                class="icon-shopping-cart"></i><span>ADD TO CART</span></a>

                                    </div>
                                @endif
                            </div>
                            <!-- End .product-details -->
                        </div>
                    @endforeach



                    </div>

                    <div  style="display: flex; justify-content: center;" >
                        {{ $products->links() }}
                    </div>
                    <!-- End .featured-proucts -->

                    <div class="banner banner-big-sale appear-animate" data-animation-delay="200" data-animation-name="fadeInUpShorter" style="background: #2A95CB center/cover url('assets/images/demoes/demo4/banners/banner-4.jpg');">
                        <div class="banner-content row align-items-center mx-0">
                            <div class="col-md-9 col-sm-8">
                                <h2 class="text-white text-uppercase text-center text-sm-left ls-n-20 mb-md-0 px-4">
                                    <b class="d-inline-block mr-3 mb-1 mb-md-0">Big Sale</b> All new fashion brands items up to 70% off
                                    <small class="text-transform-none align-middle">Online Purchases Only</small>
                                </h2>
                            </div>
                            <div class="col-md-3 col-sm-4 text-center text-sm-right">
                                <a class="btn btn-light btn-white btn-lg" href="category.html">View Sale</a>
                            </div>
                        </div>
                    </div>

                    <h2 class="section-title categories-section-title heading-border border-0 ls-0 appear-animate" data-animation-delay="100" data-animation-name="fadeInUpShorter">Browse Our Categories
                    </h2>

                    <div class="categories-slider owl-carousel owl-theme show-nav-hover nav-outer">
                        <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                            <a href="category.html">
                                <figure>
                                    <img src="{{asset("porto")}}/images/demoes/demo4/products/categories/category-1.jpg" alt="category" width="280" height="240" />
                                </figure>
                                <div class="category-content">
                                    <h3>Dress</h3>
                                    <span><mark class="count">3</mark> products</span>
                                </div>
                            </a>
                        </div>

                        <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                            <a href="category.html">
                                <figure>
                                    <img src="{{asset("porto")}}/images/demoes/demo4/products/categories/category-2.jpg" alt="category" width="220" height="220" />
                                </figure>
                                <div class="category-content">
                                    <h3>Watches</h3>
                                    <span><mark class="count">3</mark> products</span>
                                </div>
                            </a>
                        </div>

                        <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                            <a href="category.html">
                                <figure>
                                    <img src="{{asset("porto")}}/images/demoes/demo4/products/categories/category-3.jpg" alt="category" width="220" height="220" />
                                </figure>
                                <div class="category-content">
                                    <h3>Machine</h3>
                                    <span><mark class="count">3</mark> products</span>
                                </div>
                            </a>
                        </div>

                        <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                            <a href="category.html">
                                <figure>
                                    <img src="{{asset("porto")}}/images/demoes/demo4/products/categories/category-4.jpg" alt="category" width="220" height="220" />
                                </figure>
                                <div class="category-content">
                                    <h3>Sofa</h3>
                                    <span><mark class="count">3</mark> products</span>
                                </div>
                            </a>
                        </div>

                        <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                            <a href="category.html">
                                <figure>
                                    <img src="{{asset("porto")}}/images/demoes/demo4/products/categories/category-6.jpg" alt="category" width="220" height="220" />
                                </figure>
                                <div class="category-content">
                                    <h3>Headphone</h3>
                                    <span><mark class="count">3</mark> products</span>
                                </div>
                            </a>
                        </div>

                        <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                            <a href="category.html">
                                <figure>
                                    <img src="{{asset("porto")}}/images/demoes/demo4/products/categories/category-5.jpg" alt="category" width="220" height="220" />
                                </figure>
                                <div class="category-content">
                                    <h3>Sports</h3>
                                    <span><mark class="count">3</mark> products</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

