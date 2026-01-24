@extends("dashboard.layout.main")



@section("body")


    <a href="{{ route("admin.create") }}" class="btn btn-primary text-uppercase my-4">Go To Add Admin</a>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Striped Table</h4>
                <p class="card-description">Add class <code>.table-striped</code></p>

                <table class="table table-striped text-center table-hover ">
                    <thead>
                        <tr class="text-uppercase">
                            <th>#</th>
                            <th>Admin</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Edit</th>
                            <th class="text-danger">Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($admins as $key => $value )
                            <tr>
                                <td class="align-middle" style="font-weight: 900;">{{ ++$key }}</td>

                                <td class="align-middle py-1" style=" overflow: hidden;">
                                    <img style="width: 70px ; height: 70px; border-radius: 50%;" src="{{ asset("storage/images/admins/$value->img") }}" alt="">
                                </td>

                                <td class="align-middle text-capitalize">{{$value->name}}</td>
                                <td class="align-middle">{{$value->email}}</td>
                                <td class="align-middle text-capitalize">{{$value->gender}}</td>
                                <td class="align-middle" style="font-weight: 700;">{{$value->phone}}</td>

                                <td class="align-middle">
                                    <a href="{{ route("admin.edit" , $value->id) }}" class="btn btn-primary">Edit</a>
                                </td>

                                <td class="align-middle">
                                <!-- Button trigger modal -->
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop{{ $value->id }}">
                                        Delete
                                   </button>

                                </td>

                            </tr>
                            <?php $state = "admin"; $role = "admin" ?>

                            @include("dashboard.layout.modal" , compact("state" , "role"))

                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>



@endsection
