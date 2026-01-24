@extends("dashboard.layout.main")


@section("body")


   <form class="m-3 mb-5" method="post" action="{{ route("cat.store") }}">

    @csrf

    @error('cat_name')
      <div class="alert alert-danger " style="width: max-content">{{ $message }}</div>
    @enderror

    <div class="mb-3">
        <label for="exampleInputName" class="form-label" style="font-size: 18px; font-style: italic;">Category Name : </label>
        <input type="text" name="cat_name" class="form-control w-25" id="exampleInputName" placeholder="Name..."  />
    </div>
    <button type="submit" class="btn btn-primary"  >Add Category</button>
</form>


 <table class="table table-striped w-50 m-3 text-center text-capitalize">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Category Name</th>
        <th scope="col" class="text-danger">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cats as $key => $value )

            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td style="font-weight: bold">{{ $value->name }}</td>
                <td class="align-middle">
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop{{ $value->id }}">
                            Delete
                        </button>

                </td>

            </tr>
             <?php $state = "cat" ; $role = "category" ?>

            @include("dashboard.layout.modal" , compact("state" , "role"))
        @endforeach

    </tbody>
</table>


@endsection
