 <!-- Modal -->
    <div class="modal fade " id="staticBackdropDelete{{ $message->id }}" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabeldelete" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-uppercase" id="staticBackdropLabeldelete"><span class="text-danger">Delete </span>Message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" style="font-size: 20px">
            Are you sure to delete this message ?
        </div>
        <div class="modal-footer">
            <a href="" type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
            <form action="{{ route("dashboard.delete.message" , $message->id) }}" method="post">

                @csrf
                @method("delete")

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
        </div>
    </div>
    </div>


