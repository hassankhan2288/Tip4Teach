@extends('layouts.admin')

@section('content')
    <section id="pricing" class="pricing">

        <div class="row mb-4">

            <div class="col-md-12 mb-4">

                {{--                @dd($starting_date) --}}
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

                    <div class="form-group col-md-2 d-flex align-items-center justify-content-center">
                        <button type="button" id="search"
                                class="btn btn-primary mt-3">{{ trans('file.Search') }}</button>
                    </div>
                </div>

            </div>

            <div class="col-md-12 mb-3">

                <div class="card text-left">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="bestSeller-datatable">
                                <thead>
                                <tr>
                                    <th scope="col">{{ trans('file.Product Name') }}</th>
                                    <th scope="col">{{ trans('file.Code') }}</th>
{{--                                    <th scope="col">{{ trans('file.Quantity') }}</th>--}}
{{--                                    <th scope="col">{{ trans('file.Price') }}</th>--}}
                                    <th scope="col">{{ trans('file.Total Quantity Sold') }}</th>
                                    <th scope="col">{{ trans('file.Total Sales') }}</th>
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

        $(window).on('load', function() {
            // $(document).ready(function() {
            const isEnglish = window.location.pathname.includes('/en/');

            const localeOptions = isEnglish ? {
                format: 'YYYY-MM-DD',
                // applyLabel: 'Apply',
                // cancelLabel: 'Cancel',
                {{--applyLabel: '{{trans('file.Apply')}}',--}}
                {{--cancelLabel: '{{trans('file.Cancel')}}',--}}
                daysOfWeek: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
                    'September', 'October', 'November', 'December'
                ],
                firstDay: 0 // Sunday as first day of the week
            } : {
                format: 'YYYY-MM-DD', // German format
                applyLabel: 'Anwenden',
                cancelLabel: 'Abbrechen',
                daysOfWeek: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
                monthNames: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September',
                    'Oktober', 'November', 'Dezember'
                ],
                firstDay: 1 // Monday as first day of the week
            };
            // $(".daterangepicker-field").daterangepicker({
            //     locale: de,  // Use the German locale defined in your custom file
            //     startDate: moment().subtract(7, 'days'),  // Example start date, adjust as needed
            //     endDate: moment(),  // Example end date, adjust as needed
            //     opens: 'left',  // Set the calendar to open on the left
            //     autoApply: true,  // Auto apply the selected date range
            //     linkedCalendars: false,  // Disable linking between the two calendars
            //     // Add more options as needed...
            //     // For a full list of options, refer to the DateRangePicker documentation
            // });

            // Initialize the date range picker with the determined locale options
            $(".daterangepicker-field").daterangepicker({
                locale: localeOptions,
                startDate: moment().subtract(7, 'days'), // Example start date, adjust as needed
                endDate: moment(), // Example end date, adjust as needed
                opens: 'left', // Set the calendar to open on the left
                autoApply: true, // Auto apply the selected date range
                linkedCalendars: false, // Disable linking between the two calendars
                ranges: {
                    'Letzte 30 Tage': [moment().subtract(30, 'days'), moment()],
                    'Letzte 90 Tage': [moment().subtract(90, 'days'), moment()],
                    'Letztes Jahr': [moment().subtract(1, 'year'), moment()],
                    'Gesamter Zeitraum': [moment().subtract(10, 'year'),
                        moment()], // Adjust the years as needed
                    'Benutzerdefinierter Zeitraum': [moment(),
                        moment()] // Adjust the default custom range as needed
                },
                // applyLabel: localeOptions.applyLabel,
                // cancelLabel: localeOptions.cancelLabel,
                daysOfWeek: localeOptions.daysOfWeek,
                monthNames: localeOptions.monthNames,


                callback: function(startDate, endDate, period) {
                    var starting_date = startDate.format('YYYY-MM-DD');
                    var ending_date = endDate.format('YYYY-MM-DD');
                    var title = starting_date + ' To ' + ending_date;

                    $(this).val(title);
                    $('input[name="starting_date"]').val(starting_date);
                    $('input[name="ending_date"]').val(ending_date);
                }

            });
        });

        function currency_format(value) {
            return new Intl.NumberFormat('de-DE', {
                style: 'currency',
                currency: 'EUR'
            }).format(value);
        }

        var table = $('#bestSeller-datatable').DataTable({
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
                [10, 20, 30, -1],
                [10, 20, 30, "All"]
            ],
            dom: '<"top"Blf><"clear">rtip',
            buttons: ['csv', 'excel', 'pdf'],

            "ajax": {
                "url": "{{ route('admin.bestseller.ajax') }}",
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
            columns: [
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'code',
                    name: 'code'
                },
                // {
                //     data: 'qty',
                //     name: 'qty'
                // },
                // {
                //     data: 'price',
                //     name: 'price'
                // },
                {
                    data: 'total_quantity_sold',
                    name: 'total_quantity_sold'
                },
                {
                    data: 'total_sales_amount',
                    name: 'total_sales_amount'
                },
            ],
            "order": [
                [2, 'DESC']
            ],// 3 is the index of the total_sales_amount column, 'asc' specifies ascending order
        });

        $(document).on("click", "#search", function() {
            table.draw();
        })
    </script>
@endsection
