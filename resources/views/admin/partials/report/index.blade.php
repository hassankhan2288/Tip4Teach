@extends('layouts.admin')

@section('content')
    <section id="pricing" class="pricing">

        <div class="row mb-4">

            {{-- <div class="col-md-12 mb-4">
                <div class="form-row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label><strong>{{ trans('file.Date') }}</strong></label>
                            <input type="text" class="daterangepicker-field form-control"
                                value="{{ $starting_date }} To {{ $ending_date }}" required />
                            <input type="hidden" name="starting_date" id="starting_date" value="" />
                            <input type="hidden" name="ending_date" id="ending_date" value="" />

                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputPassword4">{{ trans('file.Payment Status') }}</label>
                        <select class="form-control" id="payment-status">
                            <option value="">{{ trans('file.All') }}</option>
                            <option value="pending">{{ trans('file.Pending') }}</option>
                            <option value="COMPLETED">{{ trans('file.COMPLETED') }}</option>
                            <option value="reject">{{ trans('file.Reject') }}</option>

                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label>{{ trans('file.Customers') }}</label>
                        <select class="form-control company" id="company-id">
                            <option value="">{{ trans('file.All') }}</option>

                        </select>
                    </div>

                    <div class="form-group col-md-2 d-flex align-items-center justify-content-center">
                        <button type="button" id="search"
                            class="btn btn-primary mt-3">{{ trans('file.Search') }}</button>
                    </div>
                </div>




            </div> --}}

            <div class="col-md-12 mb-3">

                <div class="card text-left">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="booking-datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Tip Id</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Teacher Name</th>
                                        <th scope="col">Tipper Name</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Payment Method</th>
                                        <th scope="col">Payment Status</th>
                                        <th scope="col">Amount</th>
                                        {{-- <th scope="col">Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        {{-- <table class="table text-center">
                            <tr>
                                <th>{{ trans('file.Tax') }}</th>
                                <th id="total-tax"></th>
                            </tr>
                            <tr>
                                <th>{{ trans('file.Total') }}</th>
                                <th id="total-amount"></th>
                            </tr>
                        </table> --}}
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
@section('styles')
    <link href="//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('vendor/daterange/css/daterangepicker.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('app/css/plugins/datatables.min.css') }}" />
    <style>
        .table-responsive .dt-buttons {
            width: 100%;
            justify-content: end;
            flex-wrap: wrap;
            margin-left: 0;
            margin-bottom: 10px;
        }

        .dataTables_wrapper>.row {
            justify-content: space-between;
        }
    </style>
@endsection
@section('scripts')
    {{--    <script type="text/javascript" src="{{ asset('vendor/daterange/js/moment.min.js') }}"></script> --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment-with-locales.min.js"></script>

    <script type="text/javascript" src="{{ asset('vendor/daterange/js/knockout-3.4.2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/daterange/js/german-locale.js') }}"></script>

    <script type="text/javascript" src="{{ asset('vendor/daterange/js/daterangepicker.min.js') }}"></script>

    <script src="//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('app/js/plugins/datatables.min.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    {{--    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script> --}}

    <script type="text/javascript">
        

        $('.company').on('select2:select', function(e) {
            $(".branch").val('').trigger('change')
        });

        function currency_format(value) {
            return new Intl.NumberFormat('de-DE', {
                style: 'currency',
                currency: 'EUR'
            }).format(value);
        }

        var table = $('#booking-datatable').DataTable({
            //destroy: true,
            processing: true,
            serverSide: true,
            responsive: true,
            //bFilter:false,
            lengthChange: true,
            pageLength: 10,
            // lengthMenu: [1000, 2500, 5000],
            // dom: 'Bfrtip',
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            dom: '<"top"Blf><"clear">rtip',
            buttons: ['csv', 'excel', 'pdf'],

            "ajax": {
                "url": "{{ route('admin.teacher.report.ajax') }}",
                "type": "POST",
                "data": function(d) {
                    d.starting_date = $('#starting_date').val();
                    d.ending_date = $('#ending_date').val();
                    d.payment_status = $('#payment-status').val();
                    d.user_id = $('#company-id').val();
                    d.branch_id = $('#branch-id').val();
                    d._token = $('meta[name="csrf-token"]').attr('content');
                    console.log('starting_date', d.starting_date);

                },
                "headers": {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                "dataSrc": function(json) {
                    console.log(json);
                    $('#total-tax').text(json.total_tax);
                    $('#total-amount').text(json.total_amount);
                    // $('#total-profit').text(json.total_profit);
                    return json.data;
                }
            },
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'date',
                    name: 'date'
                },
                {
                    data: 'teacher_name',
                    name: 'teacher_name'
                },
                {
                    data: 'user_name',
                    name: 'user_name'
                },
                {
                    data: 'message',
                    name: 'message'
                },
                {
                    data: 'payment_method',
                    name: 'payment_method'
                },
                {
                    data: 'payment_status',
                    name: 'payment_status',
                    "render": function(data, type, row, meta) {
                        if (data == "paid") {
                            return '<span class="badge badge-success mr-1">Paid</span>';
                        } else if (data == "not paid") {
                            return '<span class="badge badge-danger mr-1">Not Paid</span>';
                        }
                        return '<span class="badge badge-warning mr-1">Not Paid</span>';

                    }
                },
                {
                    data: 'amount',
                    name: 'amount',
                },

                // {
                //     data: 'action',
                //     name: 'action',
                //     orderable: true,
                //     searchable: true
                // },
            ],
        });

        $(document).on("click", "#search", function() {
            table.draw();
        })
    </script>
@endsection
