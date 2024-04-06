@extends('layouts.admin')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
@section('content')
    <div class="row">
        <!-- ICON BG-->
        <div class="col-lg-4 col-md-6 col-sm-6">
            <a href="{{route('admin.teacher')}}" class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center"><i class="i-Add-User"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Teachers</p>
                        <p class="text-primary text-24 line-height-1 mb-2">2</p>
                    </div>
                </div>
            </a>
        </div>
        {{-- <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="#" class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center"><i class="i-Add-UserStar"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Students</p>
                        <p class="text-primary text-24 line-height-1 mb-2">0</p>
                    </div>
                </div>
            </a>
        </div> --}}
        <div class="col-lg-4 col-md-6 col-sm-6">
            <a href="{{route('admin.student')}}" class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center"><i class="i-Library"></i>

                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Tippers</p>
                        <p class="text-primary text-24 line-height-1 mb-2">1</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <a href="{{route('admin.teacher.report')}}" class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center"><i class="i-Checkout-Basket"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Reports</p>
                        <p class="text-primary text-24 line-height-1 mb-2">1</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

   

    {{-- <div class="row tab-content">
        <div class="col-lg-12 col-md-12">
            <div style="justify-content: space-between;" class="row">
                <div style="float: right; width: 48%" class="card mb-6">
                    <div class="card-body">
                        <div class="card-title icon_color">This Year Sales</div>
                        <div id="echartBar" style="height: 300px;"></div>
                    </div>
                </div>
            
            <div style="float: left; width: 48%" class="card mb-6">
                <div class="card-body">
                    <div class="card-title icon_color">This Month Sales</div>
                    <div id="echartBarMonth" style="height: 300px;"></div>
                </div>
            </div>
        </div>
        </div>
    </div> --}}
        {{-- <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card card-chart-bottom o-hidden mb-4">
                            <div class="card-body">
                                <div class="text-muted icon_color">Last Month Tip</div>
                                <p class="mb-4 text-primary text-24">0</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card card-chart-bottom o-hidden mb-4">
                            <div class="card-body">
                                <div class="text-muted icon_color">Last Week Tip</div>
                                <p class="mb-4 text-warning text-24">0</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card card-chart-bottom o-hidden mb-4">
                            <div class="card-body">
                                <div class="text-muted icon_color">Current Tip</div>
                                <p class="mb-4 text-warning text-24">0</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}
       


    @endsection
    @section('scripts')
        <script src="{{ asset('app/js/plugins/echarts.min.js') }}"></script>
        <script src="{{ asset('app/js/scripts/echart.options.min.js') }}"></script>
        
        <script src="{{ asset('app/js/scripts/dashboard.v1.script.min.js') }}"></script>
    @endsection
