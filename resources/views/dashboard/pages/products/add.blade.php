@extends("dashboard.layout.main")


@section("body")




<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-4 text-primary">Add Product</h4>
                    <form class="forms-sample" action="{{ route("product.store") }}" method="post" enctype="multipart/form-data">

                        @csrf

                        @error("name")
                            <div class="alert alert-danger" >{{ $message }}</div>
                        @enderror

                      <div class="form-group">
                        <label style="font-weight: bold; font-style: italic; text-transform: capitalize;" for="exampleInputName1">Name</label>
                        <input value="{{ old("name") }}" type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
                      </div>


                      @error("price")
                            <div class="alert alert-danger" >{{ $message }}</div>
                        @enderror

                      <div class="form-group">
                        <label style="font-weight: bold; font-style: italic; text-transform: capitalize;" for="exampleInputprice">Price</label>
                        <input value="{{ old("price") }}" type="text" class="form-control" id="exampleInputprice" placeholder="price" name="price">
                      </div>

                      @error("sale")
                            <div class="alert alert-danger" >{{ $message }}</div>
                        @enderror


                      <div class="form-group">
                        <label style="font-weight: bold; font-style: italic; text-transform: capitalize;" for="exampleInputsale">sale</label>
                        <input value="{{ old("sale") }}" type="text" class="form-control" id="exampleInputsale" placeholder="sale" name="sale">
                      </div>



                       @error("img")
                        <div class="alert alert-danger" >{{ $message }}</div>
                    @enderror

                     <div class="form-group" style=" display: flex; ;gap: 20px">


                        <div class="w-50">
                             <label style="font-weight: bold; font-style: italic; text-transform: capitalize;" for="exampleSelectGender">Category</label>
                        <select class="form-control" name="cat_id" id="exampleSelectGender">

                            @foreach ($cats as $value )

                            <option @selected(old("cat_id") == $value->id ) value="{{ $value->id }}">{{ $value->name }}</option>

                            @endforeach

                        </select>
                        </div>




                        <div class="w-50">
                            <label style="font-weight: bold; font-style: italic; text-transform: capitalize;" for="exampleInputImage">Select  image</label>
                            <input  type="file" class="form-control" id="exampleInputImage"  name="img[]" multiple>
                        </div>

                    </div>
                    @error("cat_id")
                          <div class="alert alert-danger" >{{ $message }}</div>
                      @enderror





                      @error("count")
                            <div class="alert alert-danger" >{{ $message }}</div>
                        @enderror

                      <div class="form-group">
                        <label style="font-weight: bold; font-style: italic; text-transform: capitalize;" for="exampleInputcount">count</label>
                        <input value="{{ old("count") }}" type="text" class="form-control" id="exampleInputcount" placeholder="count" name="count">
                      </div>



                      <button type="submit" class="btn btn-primary me-2">ADD PRODUCT</button>
                      <a href="{{ route("product.index") }}" class="btn btn-light" >Cancel</a>
                    </form>
                  </div>
                </div>
</div>

@endsection
