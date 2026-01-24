 <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2025</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you sure to logout ? 🤦‍♂️</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="{{ route("logout") }}">👋😒 Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('dashboard/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('dashboard/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{ asset('dashboard/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('dashboard/vendor/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('dashboard/vendor/datatables/dataTables.bootstrap4.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('dashboard/js/sb-admin.min.js') }}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{ asset('dashboard/js/demo/datatables-demo.js') }}"></script>
  <script src="{{ asset('dashboard/js/demo/chart-area-demo.js') }}"></script>

  <script>
      $('.btn_mess').click(function(e){
        let id =  $(this).attr("message_id");
        let _token = "{{ csrf_token() }}";


        $.ajax({
            url : "{{ route("dashboard.single.message") }}" ,
            method : "post" ,
            data : {
                id , _token
            } , success:function(data){

                let _message = data.split(".")


                $(".unread_ms").html(_message[2])

                $(".message").html(_message[1])
                $(".name_ms").html(_message[0])

            }
        })

        $(this).closest('tr').find('.seen').html('seen')


      })
    </script>


</body>

</html>
