<div class="col-12 col-lg-3" id="sidebar">
    <div class="sidebar">
        <img src="{{asset('frontend/img/tip4teach_-_JPEG-01-removebg-preview 21.svg')}}" class="img-fluid sidbar-logo" alt="tip4teach_">
        <ul>
            <li><a href="{{route('teacher.dashboard')}}"><span class="sidebar-img home-icon"><img src="{{asset('frontend/img/home.svg')}}" alt="home"></span><span>Dashboard</span></a></li>
            <li><a href="{{route('teacher.view.profile')}}"><span class="sidebar-img"><img src="{{asset('frontend/img/person.svg')}}" alt="home"></span><span>View Profile</span></a></li>
            <li><a href="edit_account02.html"><span class="sidebar-img"><img src="{{asset('frontend/img/key.svg')}}" alt="home"></span><span>Edit Profile</span></a></li>
            <li><a href="password-reset.html"><span class="sidebar-img"><img src="{{asset('frontend/img/key.svg')}}" alt="home"></span><span>Change Password</span></a></li>
            <li><a href="{{route('teacher.tip.received')}}" class="active"><span class="sidebar-img"><img src="{{asset('frontend/img/file.svg')}}" alt="home"></span><span>List of Recieved Tips</span></a></li>
            <li><a href="{{route('teacher.dashboard')}}"><span class="sidebar-img"><img src="{{asset('frontend/img/file.svg')}}" alt="home"></span><span>Notifications</span></a></li>
            <li><a href="{{route('teacher.dashboard')}}"><span class="sidebar-img"><img src="{{asset('frontend/img/withdraw.svg')}}" alt="home"></span><span>Withdraw</span></a></li>
            <li><a href="{{route('website.teacher.logout')}}"><span class="sidebar-img"><img src="{{asset('frontend/img/logout.svg')}}" alt="home"></span><span>Log out</span></a></li>
        </ul>
        <div class="contact-box position-relative ">
            <span class="trouble-icon"><img src="{{asset('frontend/img/Vector.svg')}}" alt="trouble"></span>
            <span class="trouble-text">Having Trouble?</span>
            <a href="#" id="contact-tech-popup-btn">Contact Us</a>
            <img src="{{asset('frontend/img/Rectangle 93 (1).svg')}}" class="position-absolute yell-shape" alt="shape">
        </div>
        <div class="sidebar-close-btn position-absolute d-block d-lg-none">
          <img src="{{asset('frontend/img/close.svg')}}" class="img-fluid" alt="sidebar-close-icon">
        </div>
    </div>
</div>