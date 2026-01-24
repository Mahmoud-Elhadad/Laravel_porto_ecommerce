@extends("dashboard.layout.main")


@section("body")


@include("dashboard.layout.modal_view_ms")

<div class="alert alert-dark">Number of unread messages : <span class="text-danger unread_ms">{{ $num_unread_ms }}</span></div>

<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Users Messages</h4>
                    <p class="card-description"> Add class <code>.table-hover</code>
                    </p>
                    <table class="table table-hover text-center">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>User Name</th>
                          <th>User Email</th>
                          <th>(seen or unseen)</th>
                          <th>Message</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($messages as $key => $message)

                            <tr>
                            <td>{{ ++$key }}</td>
                            <td class="text-capitalize" style="font-weight: bold">{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td class="font-weight-bold seen {{ $message->view == 1 ? 'text-success' : ' text-danger' }}">{{ $message->view == 0 ? 'unseen' : 'seen'}}</td>


                            <td><button message_id = "{{ $message->id }}" type="button" class="btn btn-primary btn_mess" data-toggle="modal" data-target="#staticBackdrop">view</button></td>
                            <td><button  type="button" class="btn btn-danger del_ms" data-toggle="modal" data-target="#staticBackdropDelete{{ $message->id }}">Delete</button></td>
                            </tr>


                            @include("dashboard.layout.modal_delete_ms")

                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


@endsection
