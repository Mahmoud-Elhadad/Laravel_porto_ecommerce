@extends("dashboard.layout.main")

@section("body")



<a href="{{ route("product.create") }}" class="btn btn-primary text-uppercase my-4">Go To Add Product</a>


 <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-uppercase mb-3">All Products</h4>
                    <div class="table-responsive">
                    <table class="table table-hover table-sm text-center" style="font-size: 0.9rem;">
                      <thead class="thead-dark">
                        <tr>
                          <th style="padding: 8px;">#</th>
                          <th style="padding: 8px;">Product Name</th>
                          <th style="padding: 8px;">Price</th>
                          <th style="padding: 8px;">Sale</th>
                          <th style="padding: 8px;">Count</th>
                          <th style="padding: 8px;">Category</th>
                          <th style="padding: 8px;">Image</th>
                          <th style="padding: 8px;">Edit</th>
                          <th style="padding: 8px;">Delete</th>
                        </tr>
                      </thead>
                      <tbody>


                        @foreach ($products as $key => $value )

                            <tr>
                                <td style="padding: 10px; vertical-align: middle;">{{ ++$key }}</td>
                                <td style="padding: 10px; vertical-align: middle;">{{ $value->name }}</td>
                                <td style="padding: 10px; vertical-align: middle;">${{ $value['price'] }}</td>
                                <td style="padding: 10px; vertical-align: middle;">{{ $value['sale'] }}%</td>
                                <td style="padding: 10px; vertical-align: middle;">{{ $value['count'] }}</td>
                                <td style="padding: 10px; vertical-align: middle;">{{ $value['cat']['name'] }}</td>
                                <td style="padding: 10px; vertical-align: middle;">
                                    @foreach ($value['image'] as $k => $v )
                                    <img src="{{ asset("storage/images/products/" . $v['name']) }}"
                                         alt="{{ $value->name }}"
                                         style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px; margin: 2px;"
                                         class="img-thumbnail">
                                    @endforeach
                                </td>
                                <td style="padding: 10px; vertical-align: middle;">
                                    <a href="{{ route("product.edit" , $value->id) }}" class="btn btn-success btn-sm" style="padding: 4px 12px; font-size: 0.85rem;">Edit</a>
                                </td>
                                <td style="padding: 10px; vertical-align: middle;">
                                    <button
                                    class="btn btn-danger btn-sm"
                                    style="padding: 4px 12px; font-size: 0.85rem;"
                                    type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop{{ $value->id }}">Delete</button>
                                </td>
                            </tr>

                            <?php $state = "product"; $role = "product" ?>

                            @include("dashboard.layout.modal" , compact("state" , "role"))


                        @endforeach
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
              </div>


@endsection
