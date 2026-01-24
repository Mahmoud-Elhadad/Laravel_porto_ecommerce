<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Mar 2025 12:52:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset("porto")}}/images/icons/favicon.png">


    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700,800', 'Oswald:300,400,500,600,700,800']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = "{{ asset('porto') }}/js/webfont.js";
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset("porto")}}/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset("porto")}}/css/demo4.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset("porto")}}/vendor/fontawesome-free/css/all.min.css">
</head>

<body>
    <div class="page-wrapper">
        <div class="top-notice bg-primary text-white">
            <div class="container text-center">
                <h5 class="d-inline-block">Get Up to <b>40% OFF</b> New-Season Styles</h5>
                <a href="category.html" class="category">MEN</a>
                <a href="category.html" class="category ml-2 mr-3">WOMEN</a>
                <small>* Limited time only.</small>
                <button title="Close (Esc)" type="button" class="mfp-close">×</button>
            </div>
            <!-- End .container -->
        </div>
        <!-- End .top-notice -->

        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left d-none d-sm-block">
                        <p class="top-message text-uppercase">FREE Returns. Standard Shipping Orders $99+</p>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right header-dropdowns ml-0 ml-sm-auto w-sm-100">
                        <div class="header-dropdown dropdown-expanded d-none d-lg-block">
                            <a href="#">Links</a>
                            <div class="header-menu">
                                <ul>
                                    <li>User : <span class="text-uppercase text-dark">{{ @Auth::guard('web')->user()->name }}</span> </li>
                                    <li><a href="{{ route("porto.about") }}">About Us</a></li>
                                    <li><a href="{{ route("porto.blog") }}">Blog</a></li>
                                    <li><a href="{{ route("porto.wishlistPage") }}">My Wishlist</a></li>
                                    @if (Auth::guard("web")->check())
                                     <li><a href="{{ route("porto.cartPage") }}">Cart</a></li>
                                     @else
                                     <li><a href="{{ route("porto.login") }}">Cart</a></li>
                                    @endif
                                    @if (Auth::guard("web")->check())
                                    <style>
                                        .user_logout:hover{
                                            color: red;
                                            transition: 0.3s
                                        }
                                    </style>
                                    <li><a href="{{ route("porto.logout") }}" class="user_logout">LOGOUT</a></li>
                                    @else
                                    <li><a href="{{ route("porto.register") }}">Register</a></li>
                                    <li><a href="{{ route("porto.login") }}">Log In</a></li>
                                    @endif
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <span class="separator"></span>

                        <div class="header-dropdown">
                            <a href="#"><i class="flag-us flag"></i>ENG</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                                    </li>
                                    <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                            <a href="#">USD</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <span class="separator"></span>

                        <div class="social-icons">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                            <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
                        </div>
                        <!-- End .social-icons -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-top -->

            <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
                <div class="container">
                    <div class="header-left col-lg-2 w-auto pl-0">
                        <button class="mobile-menu-toggler text-primary mr-2" type="button">
							<i class="fas fa-bars"></i>
						</button>
                        <a href="demo4.html" class="logo">
                            <img src="{{asset("porto")}}/images/logo.png" width="111" height="44" alt="Porto Logo">
                        </a>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right w-lg-max">
                        <div class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mt-0">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
											<option value="">All Categories</option>
											<option value="4">Fashion</option>
											<option value="12">- Women</option>
											<option value="13">- Men</option>
											<option value="66">- Jewellery</option>
											<option value="67">- Kids Fashion</option>
											<option value="5">Electronics</option>
											<option value="21">- Smart TVs</option>
											<option value="22">- Cameras</option>
											<option value="63">- Games</option>
											<option value="7">Home &amp; Garden</option>
											<option value="11">Motors</option>
											<option value="31">- Cars and Trucks</option>
											<option value="32">- Motorcycles &amp; Powersports</option>
											<option value="33">- Parts &amp; Accessories</option>
											<option value="34">- Boats</option>
											<option value="57">- Auto Tools &amp; Supplies</option>
										</select>
                                    </div>
                                    <!-- End .select-custom -->
                                    <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->

                        <div class="header-contact d-none d-lg-flex pl-4 pr-4">
                            <img alt="phone" src="{{asset("porto")}}/images/phone.png" width="30" height="30" class="pb-1">
                            <h6><span>User E-mail : <br> </span><span class="text-dark font1 " style="text-transform: none; font-size: 16px;">{{ @Auth::guard('web')->user()->email }}</span></h6>
                        </div>

                       @if (!Auth::guard("web")->check())
                        <a href="{{ route("porto.register") }}" class="header-icon" title="login"><i class="icon-user-2"></i></a>
                       @endif


                            <a href="{{ route("porto.wishlistPage") }}" class="header-icon" title="wishlist">
                                <i class="icon-wishlist-2"></i>

                            </a>
                       


                        <div class="dropdown cart-dropdown show_cart">
                            @if (!Auth::guard("web")->check())

                                <a href="{{ route("porto.login") }}" >
                                    <i class="minicart-icon"></i>
                                    <span class="cart-count badge-circle">0</span>
                                </a>
                            @else

                            <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="minicart-icon"></i>
                                <span class="cart-count badge-circle nums_in_cart">{{ $num_cart }}</span>
                            </a>
                            @endif

                            <div class="cart-overlay"></div>

                            <div class="dropdown-menu mobile-cart">
                                <a href="#" title="Close (Esc)" class="btn-close close_cart">×</a>

                                <div class="dropdownmenu-wrapper custom-scrollbar">
                                    <div class="dropdown-cart-header">Shopping Cart</div>
                                    <!-- End .dropdown-cart-header -->

                                            @php
                                                $total = 0;

                                            @endphp
                                    @if(Auth::guard("web")->check())

                                        <div class="dropdown-cart-products">
                                            @foreach ($carts as $cart)

                                                <div class="product">
                                                    <div class="product-details">
                                                        <h4 class="product-title">
                                                            <a href="product.html" class="text-uppercase" >{{ $cart->product->name }}</a>
                                                        </h4>

                                                        <span class="cart-product-info">
                                                            <span class="cart-product-qty">{{ $cart->count }}</span> × ${{ $cart->product->price }}
                                                        </span>
                                                    </div>
                                                    <!-- End .product-details -->

                                                    <figure class="product-image-container">
                                                        <a href="product.html" class="product-image">
                                                            <img src="{{ asset("storage/images/products/".$cart->product->image[0]->name) }}" alt="product" width="80" height="80">
                                                        </a>

                                                        <a product_id = "{{ $cart->product_id }}" class="btn-remove cart_remove" title="Remove Product" style="cursor: pointer"><span>×</span></a>
                                                    </figure>
                                                </div>

                                                @php

                                                    $total += ($cart->count * $cart->product->price)
                                                @endphp


                                            @endforeach
                                            <!-- End .product -->
                                        </div>

                                    @endif
                                    <!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>SUBTOTAL:</span>

                                        <span class="cart-total-price float-right">${{ $total }}</span>
                                    </div>
                                    <!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="{{ route("porto.cartPage") }}" class="btn btn-gray btn-block view-cart">View
											Cart</a>

                                    </div>
                                    <!-- End .dropdown-cart-total -->
                                </div>
                                <!-- End .dropdownmenu-wrapper -->
                            </div>
                            <!-- End .dropdown-menu -->
                        </div>
                        <!-- End .dropdown -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->

            <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
                <div class="container">
                    <nav class="main-nav w-100">
                        <ul class="menu">
                            <li class="active">
                                <a href="{{ route("porto.index") }}">Home</a>
                            </li>

                            <li>
                                <a href="product.html">Products</a>
                                <div class="megamenu megamenu-fixed-width">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="#" class="nolink">PRODUCT PAGES</a>
                                            <ul class="submenu" style="display: grid; grid-template-columns: repeat(2 , 1fr); gap: 5px;">
                                               @foreach ($num_products as $product)
                                               <li><a href="{{ route("porto.product.details" , $product->id) }}">{{ $product->name }}</a></li>

                                               @endforeach
                                            </ul>
                                        </div>
                                        <!-- End .col-lg-4 -->


                                        <!-- End .col-lg-4 -->

                                        <div class="col-lg-4 p-0">
                                            <div class="menu-banner menu-banner-2">
                                                <figure>
                                                    <img src="{{asset("porto")}}/images/menu-banner-1.jpg" width="182" height="317" alt="Menu banner" class="product-promo">
                                                </figure>
                                                <i>OFF</i>
                                                <div class="banner-content">
                                                    <h4>
                                                        <span class="">UP TO</span><br />
                                                        <b class="">50%</b>
                                                    </h4>
                                                </div>
                                                <a href="category.html" class="btn btn-sm btn-dark">SHOP NOW</a>
                                            </div>
                                        </div>
                                        <!-- End .col-lg-4 -->
                                    </div>
                                    <!-- End .row -->
                                </div>
                                <!-- End .megamenu -->
                            </li>

                            <li><a href="{{ route("porto.blog") }}">Blog</a></li>

                            <li><a href="{{ route("porto.message") }}">Contact Us</a></li>
                            <li class="float-right"><a href="#" rel="noopener" class="pl-5" target="_blank">Buy Porto!</a></li>
                            <li class="float-right"><a href="#" class="pl-5">Special Offer!</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-bottom -->
        </header>
        <!-- End .header -->
