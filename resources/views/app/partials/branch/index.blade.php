@extends('layouts.app')

@section('content')
<section id="pricing" class="pricing">

    <div class="row mb-4">
      
      {{-- <div class="col-md-12 mb-4"> --}}
    <div class="container-fluid d-flex justify-content-end mb-2">
        <a class="btn btn-primary ladda-button " href="{{route('app.branch.form')}}" data-style="expand-left"style="margin-right: 16px;">Add</a>
        <a class="btn btn-primary ladda-button " href="{{route('sort.branch')}}" data-style="expand-left">Sort Branch</a>
      </div>
    
   
      <div class="col-md-12 mb-3">

          <div class="card text-left">

              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="admins-datatable">
                          <thead>
                              <tr>
                                  {{-- <th scope="col">#</th> --}}
                                  <th scope="col">Branch No</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                            
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
      
  </div>

</section>


@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('app/css/plugins/datatables.min.css') }}" />
@endsection
@section('scripts')
<script src="{{ asset('app/js/plugins/datatables.min.js') }}"></script>
<script type="text/javascript">
  var table = $('#admins-datatable').DataTable({
        //destroy: true,
        processing: true,
        serverSide: true,
        responsive: true,
        //bFilter:false,
        lengthChange:false,
        pageLength: 10,

        "ajax": {
            "url": "{{ route('app.branch.ajax') }}",
            "type": "POST",
            "data": function(d){
               d._token = $('meta[name="csrf-token"]').attr('content');
            },
            "headers": {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
        },
        success: function (result) {
            //alert(result);
        },
        columns: [
            // {data: 'id', name: 'id'},
            {data: 'assign_num', name: 'assign_num'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ],
    });
    $(document).on("change", '.assgin-num', function() {
        let total = $(this).data("assign_branch_no");
        let id = $(this).data("id");
        let assign_branch_no = $(this).val();

        $.ajax({
            url: "{{route('app.branch.assign_no')}}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'assign_branch_no': assign_branch_no,
                'id': id,
            },
            success: function(data) {
                // Handle success if needed
            },
            error: function(xhr, status, error) {
                // Handle error if needed
            }
        });
    });

</script>
@endsection
