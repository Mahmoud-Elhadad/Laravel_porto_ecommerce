<x-navbar/>
        <main class="main">
            <div class="page-header">
                <div class="container d-flex flex-column align-items-center">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav">
                        <div class="container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route("porto.index") }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Wishlist
                                </li>
                            </ol>
                        </div>
                    </nav>

                    <h1>Wishlist</h1>
                </div>
            </div>

            <div class="container">
                <div class="wishlist-title">
                    <h2 class="p-2">My wishlist on Porto Shop 4</h2>
                </div>
                <div class="wishlist-table-container">
                    <table class="table table-wishlist mb-0 text-center">
                        <thead>
                            <tr>
                                <th class="thumbnail-col"></th>
                                <th class="product-col">Product</th>
                                <th class="price-col">Price</th>
                                <th class="status-col">Stock Status</th>
                                <th class="action-col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wishlists as $item)

                                <tr class="product-row" >
                                    <td  style="width: 100px ; height: 100px;">
                                        <figure class="product-image-container w-100">
                                            <a href="{{ route("porto.product.details" , $item->product_id) }}" class="product-image">
                                                <img src="{{ asset("storage/images/products/".$item->product->image[0]->name) }}" alt="product" class="w-100">
                                            </a>


                                        </figure>
                                    </td>

                                    <td style="vertical-align: middle;">
                                        <h5 class="product-title">
                                            <a class="text-uppercase" href="{{ route("porto.product.details" , $item->product_id) }}">{{ $item->product->name }}</a>
                                        </h5>
                                    </td>
                                    <td style="vertical-align: middle;" class="price-box">${{ $item->product->price }}</td>
                                    <td style="vertical-align: middle;">
                                        <span class="stock-status">{{ $item->stock == "1" ? "In stock" : "Unavailable" }}</span>
                                    </td>
                                    <td class="action" style="vertical-align: middle;">
                                        <a href="{{ route("porto.product.details" , $item->product_id) }}" class="btn btn-primary "
                                            title="Quick View">Quick
                                            View</a>
                                        <button product_id = "{{ $item->product_id}}" class="btn btn-dark btn-add-cart product-type-simple btn-shop add_cart">
                                            ADD TO CART
                                        </button>
                                    </td>
                                </tr>

                            @endforeach


                        </tbody>
                    </table>
                </div><!-- End .cart-table-container -->
            </div><!-- End .container -->
        </main><!-- End .main -->

<x-footer/>
