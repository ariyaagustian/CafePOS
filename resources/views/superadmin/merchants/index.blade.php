@extends('superadmin.main')

@push('css')
<!-- Custom styles for this page -->
<link href="{{asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

@endpush

@section('content')
<!-- Page Heading -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">
            {{ucfirst(substr(url()->current(), strrpos(url()->current(), '/' )+1)."\n")}}</li>
    </ol>
</nav>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            {{ucfirst(substr(url()->current(), strrpos(url()->current(), '/' )+1)."\n")}}</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <a class="btn btn-success mb-3" href="javascript:void(0)" id="createNewProduct"> Create New Merchant</a>
            <table class="table table-bordered" id="table_merchants" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Merchant ID / Code</th>
                        <th>Merchant Name</th>
                        <th>Merchant Address</th>
                        <th width="110px">Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="productForm" name="productForm" class="form-horizontal">
                    <input type="hidden" name="product_id" id="product_id">
                    <div class="form-group">
                        {{-- <label for="name" class="col-sm-4 control-label">Role Name</label> --}}
                        <div class="col-sm-12">
                            <label for="merchant_name" class="small">Merchant Name</label>
                            <input type="text" class="form-control" id="merchant_name" name="merchant_name"
                            placeholder="Your Merchant Name" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="merchant_name" class="small">Merchant Address</label>
                            <input type="text" class="form-control" id="merchant_address" name="merchant_address"
                            placeholder="Your Merchant Address" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<!-- Page level plugins -->
<script src="{{asset('sbadmin2/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Page level custom scripts -->
{{-- <script src="{{asset('sbadmin2/js/demo/datatables-demo.js')}}"></script> --}}


<script type="text/javascript">
    $(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
      });

      var table = $('#table_merchants').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('merchants.index') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'id', name: 'id'},
              {data: 'merchant_name', name: 'merchant_name'},
              {data: 'merchant_address', name: 'merchant_address'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

      $('#createNewProduct').click(function () {
          $('#saveBtn').val("create-product");
          $('#product_id').val('');
          $('#productForm').trigger("reset");
          $('#modelHeading').html("Create New Merchant");
          $('#ajaxModel').modal('show');
      });

      $('body').on('click', '.editProduct', function () {
        var product_id = $(this).data('id');
        var uri = '{{ route("merchants.edit", ":id") }}';
        var uri = uri.replace(':id', product_id);
        $.get(uri, function (data) {
            $('#modelHeading').html("Edit Merchant");
            $('#saveBtn').val("edit-user");
            $('#ajaxModel').modal('show');
            $('#product_id').val(data.id);
            $('#merchant_name').val(data.merchant_name);
            $('#merchant_address').val(data.merchant_address);
        })
     });

      $('#saveBtn').click(function (e) {
          e.preventDefault();
        //   $(this).html('Sending..');

          $.ajax({
            data: $('#productForm').serialize(),
            url: "{{ route('merchants.store') }}",
            type: "POST",
            dataType: 'json',
            success: function (data) {

                $('#productForm').trigger("reset");
                $('#ajaxModel').modal('hide');
                table.draw();

            },
            error: function (data) {
                console.log('Error:', data);
                $('#saveBtn').html('Save Changes');
            }
        });
      });

      $('body').on('click', '.deleteProduct', function () {
          var result = confirm("Are You sure want to delete !");
          if(result){
            var product_id = $(this).data("id");
            var uri = '{{ route("merchants.destroy", ":id") }}';
            var uri = uri.replace(':id', product_id);

            $.ajax({
                type: "DELETE",
                url: uri,
                success: function (data) {
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
          }

      });

    });
</script>

@endpush
