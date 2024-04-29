<header>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('website.home') }}"><img
                    src="{{ asset('frontend/img/tip4teach_-_JPEG-01-removebg-preview 7.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" id="sm-nav-btn">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <a class="navbar-brand" href="{{ route('website.home') }}"><img class="img-fluid sm-nav-logo d-lg-none"
                        src="{{ asset('frontend/img/tip4teach_-_JPEG-01-removebg-preview 7.png') }}" alt=""></a>
                <ul class="navbar-nav page-nav align-items-center mx-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('website.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('website.tip_now') }}">Tip Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('website.about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('website.contact') }}">Contact Us</a>
                    </li>
                </ul>
                <div class="navbar-close-btn position-absolute d-block d-lg-none">
                    <img src="{{ asset('frontend/img/close.svg') }}" class="img-fluid" alt=" ">
                </div>
                @if (\Auth::guard('tipper')->user())
            <div class="dropdown">
                <button class="log-btn butn butn__new dropdown-toggle" type="button" id="accountDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user-o" aria-hidden="true"></i> My Account
                </button>
                <ul class="dropdown-menu" aria-labelledby="accountDropdown">
                    <li><a class="dropdown-item" href="{{ route('tipper.dashboard') }}">Dashboard</a></li>
                    <li><a class="dropdown-item" href="{{route('tipper.view.profile',['id' => Auth::guard('tipper')->user()->id])}}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('website.tipper.logout') }}">Logout</a></li>
                </ul>
            </div>
        @else
            <div class="banner">
                <a href="{{ route('website.role') }}" class="log-btn butn butn__new"><span>LOGIN/SIGNUP</span></a>
            </div>
        @endif

            </div>
        </div>
    </nav>
</header>
