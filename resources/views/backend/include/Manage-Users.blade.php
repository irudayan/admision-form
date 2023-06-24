@extends('layouts.admin')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title" id="exampleModalLabel">Manage Users</h3></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="manager-user-form" name="manager-user-form">
          @csrf
          <input type="hidden" name="user_id" id="user_id">
          <div class="form-group">
            <label for="name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email</label>
            <input type="text" name="email" class="form-control" id="email">
          </div>

          <div class="form-group">
            <label for="uer-type" class="form-label">User Type </label>
            <select class="form-control" name="usertype" id="usertype">
              {{-- <option>User Type</option> --}}
              @foreach($usertype as $value)
              <option value="{{$value->usertype}}">{{ $value->usertype }}</option>
              @endforeach
            </select>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="managerusers-close" data-dismiss="modal">Close</button>
        <button type="button" id="saveBtn" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>

<div class="product-sales-area mg-tb-30">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="product-sales-chart">
          <div class="portlet-title">
            <div class="row">
              <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                <div class="caption pro-sl-hd">
                  <span class="caption-subject"><b>Manage Users</b></span>
                </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Name</th>
                      <th scope="col">Mail</th>
                      <th scope="col">User Type</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($usertype as $value)
                    <tr>
                      <td>{{ $value->id }}</td>
                      <td>{{ $value->name }}</td>
                      <td>{{ $value->email }}</td>
                      <td>{{ $value->usertype }}</td>
                      <td>
                        <a class="manageusers" id="{{ $value->id }}" >
                          <i class="fa fa-edit" style="color:brown" data-toggle="modal" data-target="#exampleModal"></i>
                        </a>

                        {{-- <a class="deletemanagerusers" id="{{ $value->id }}" >
                            <i class="fa fa-trash" style="color:red" data-toggle="modal" data-target="#exampleModal"></i>
                          </a> --}}

                        
                      </td>
                    </tr>

                    @endforeach
                  </tbody>
                </table>

              </div>

            </div>
          </div>

          <div id="extra-area-chart" style="height: 356px;"></div>
        </div>
      </div>

    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.slim.min.js" integrity="sha512-5NqgLBAYtvRsyAzAvEBWhaW+NoB+vARl6QiA02AFMhCWvPpi7RWResDcTGYvQtzsHVCfiUhwvsijP+3ixUk1xw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.3/dist/sweetalert2.min.js"></script><script type="text/javascript">
  $(function() {

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('#manager-user-form').click(function() {
      $('#saveBtn').val(" ");
    //   $('#manager-user-form').trigger("reset");
    //   $('#exampleModal').modal('hide');
    });

    // save
    $(function() {

      // button click
      $('#saveBtn').click(function(e) {
        e.preventDefault();
        $('#manager-user-form').submit();
      });
    });


    // edit
    $('body').on('click', '.manageusers', function() {
      var user_id = $(this).attr('id');
      $.get("{{ url('manageusersedit') }}" + '/' + user_id, function(data) {
        $('#saveBtn').val(" ");
        $('#exampleModal').modal('show');
        $('#user_id').val(data.id);
        $('#name').val(data.name).prop('disabled',true);
        $('#email').val(data.email).prop('disabled',true);
        $('#usertype').val(data.usertype);
      })
    });


    // update

    $('#manager-user-form').submit(function(e) {
      e.preventDefault();
      $('#saveBtn').val(" ");
      
    

      var formData = $(this).serialize();
    $.ajax({
    url: "{{ route('managerusersupdate') }}",
    type: "POST",
    data: formData,
    dataType: 'json',
    success: function(data) {
      if (data.status === 'success') {
        // success response
        $('#manager-user-form')[0].reset();  // Use '[0]' to access the DOM element
        $('#exampleModal').modal('hide');
        Swal.fire({
          title: 'Success',
          text: 'Submitted successfully!',
          icon: 'success',
          confirmButtonText: 'OK'
        }).then((result) => {
      if (result.isConfirmed) {
        $('#managerusers-close').click();
        maintable.draw();
      }
        });
      }
    },
    error: function(xhr, status, error) {
      // Handle the error response
      console.log(xhr.responseText);
    }
  });
});



// delete
// $('body').on('click', '.deletemanagerusers', function () {
//            var user_id = $(this).attr('id');
//            console.log(user_id);
//           confirm("Are You sure want to delete !");
//           $.ajax({
//               type: "DELETE",
//               url: "{{ url('managerusersdelete') }}"+'/'+user_id,
//               success: function (data){
//             console.log(data);
//             $('#smanager-user-form').trigger("reset");
//             $('#exampleModal').modal('hide');
//             Swal.fire({
//             title: 'Success',
//             text: 'Deleted successfully!',
//             icon: 'Delete',
//             confirmButtonText: 'Delete'
//           }).then((result) => {
//             if (result.isConfirmed) {
//             subtable.draw();
//             }
//           });

//           }
//           });
//       });




});
</script>

@endsection
