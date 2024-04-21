<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.layouts.head')
    @yield('styles')
    
</head>

<body class="text-left">

    {{-- <div class="app-admin-wrap layout-sidebar-compact sidebar-dark-purple sidenav-open clearfix"> --}}
        @include('frontend.teachers.sidebar')
        <!--=============== Left side End ================-->
        <div class="main-content-wrap d-flex flex-column">
            @include('frontend.teachers.header')
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                @include('frontend.teachers.breadcrumb')
                <div class="separator-breadcrumb border-top"></div>
                @yield('content')
                </div>
                <!-- Footer Start -->
                <div class="flex-grow-1"></div>
            </div>
        </div>
    {{-- </div> --}}

    @include('frontend.layouts.footer')

    @yield('scripts')
    
</body>
</html>
