<div class="col-12 col-lg-3" id="sidebar">
    <div class="sidebar">
        <img src="{{asset('frontend/img/tip4teach_-_JPEG-01-removebg-preview 21.svg')}}" class="img-fluid sidbar-logo" alt="tip4teach_">
        <ul>
            <li><a href="user-dashboard.html" class="active"><span class="sidebar-img home-icon"><img src="{{asset('frontend/img/home.svg')}}" alt="home"></span><span>My Dashboard</span></a></li>
            <li><a href="{{route('tipper.tip.history')}}"><span class="sidebar-img"><img src="{{asset('frontend/img/chart.svg')}}" alt="home"></span><span>Tip History</span></a></li>
            <li><a href="{{route('tipper.view.profile',['id' => Auth::guard('tipper')->user()->id])}}"><span class="sidebar-img"><img src="{{asset('frontend/img/withdraw.svg')}}" alt="home"></span><span>View Profile</span></a></li>
            <li><a href="{{route('tipper.profile.edit',['id' => Auth::guard('tipper')->user()->id])}}"><span class="sidebar-img"><img src="{{asset('frontend/img/key.svg')}}" alt="home"></span><span>Edit Profile</span></a></li>
            <li><a href="{{route('tipper.change.password')}}"><span class="sidebar-img"><img src="{{asset('frontend/img/key.svg')}}" alt="home"></span><span>Change Password</span></a></li>
            <li><a href="{{route('tipper.tip.list')}}"><span class="sidebar-img"><img src="{{asset('frontend/img/file.svg')}}" alt="home"></span><span>List of Ongoing Tips</span></a></li>
            <li><a href="#"><span class="sidebar-img"><img src="{{asset('frontend/img/notif.svg')}}" alt="home"></span><span>Notification</span></a></li>
            <li><a href="{{route('website.tipper.logout')}}"><span class="sidebar-img"><img src="{{asset('frontend/img/logout.svg')}}" alt="home"></span><span>Log out</span></a></li>
        </ul>
        <div class="contact-box position-relative">
            <span class="trouble-icon"><img src="{{asset('frontend/img/Vector.svg')}}" alt="trouble"></span>
            <span class="trouble-text">Having Trouble?</span>
            <a href="#" id="contact-user-popup-btn">Contact Us</a>
            <img src="{{asset('frontend/img/Rectangle 93 (1).svg')}}" class="position-absolute yell-shape" alt="shape">
        </div>
        <div class="sidebar-close-btn close-dash position-absolute d-block d-lg-none">
            <img src="{{asset('frontend/img/close.svg')}}" class="img-fluid" alt=" ">
        </div>
    </div>
</div>