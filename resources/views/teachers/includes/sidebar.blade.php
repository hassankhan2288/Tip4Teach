<div class="col-12 col-lg-3" id="sidebar">
    <div class="sidebar">
        <img src="{{asset('frontend/img/tip4teach_-_JPEG-01-removebg-preview 21.svg')}}" class="img-fluid sidbar-logo" alt="tip4teach_">
        <ul>
            <li><a href="{{route('teacher.dashboard')}}"><span class="sidebar-img home-icon"><img src="{{asset('frontend/img/home.svg')}}" alt="home"></span><span>Dashboard</span></a></li>
            <li><a href="{{ route('teacher.view.profile', ['id' => Auth::guard('teacher')->user()->id]) }}"><span class="sidebar-img"><img src="{{asset('frontend/img/person.svg')}}" alt="home"></span><span>View Profile</span></a></li>
            <li><a href="{{route('teacher.profile.edit', ['id' => Auth::guard('teacher')->user()->id])}}"><span class="sidebar-img"><img src="{{asset('frontend/img/key.svg')}}" alt="home"></span><span>Edit Profile</span></a></li>
            <li><a href="{{route('teacher.change.password')}}"><span class="sidebar-img"><img src="{{asset('frontend/img/key.svg')}}" alt="home"></span><span>Change Password</span></a></li>
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
<div class="tch-dash-contact-popup" id="tach-contact-popup">
    <div class="container">
        <form class="tch-contact-popup profile-form">
            <div class="popup-title">
                <h2>Teacher Contact Form</h2>
                <p class="mb-3">Thank you for reaching out! Please fill out the form below, and we'll get back to you as soon as possible.</p>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 mb-3 form-label ">
                    <span>First name</span>
                    <input disabled class="form-control" value="{{ Auth::guard('teacher')->user()->first_name }}" type="text" name="your-name">
                </div>
                <div class="col-12 col-lg-6 mb-3 form-label">
                    <span>Email</span>
                    <input disabled class="form-control" value="{{ Auth::guard('teacher')->user()->email }}" type="email" name="mail">
                </div>
                <div class="col-12 mb-3 form-label">
                    <span>Role</span>
                    <input disabled class="form-control" value="teacher" type="text" name="role">
                </div>
                <div class="col-12 mb-3 form-label">
                    <span>Message</span>
                    <textarea class="form-control popup-textarea" row="4"></textarea>
                </div>
                <div class="col-12 mt-3">
                    <div class="banner" id="popup-thank-tech-btn">
                      <a href="#" class="log-btn butn butn__new"><span>Send Message</span></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-close-icon position-absolute close-dash" id="tech-popup-btn">
                <img src="{{asset('frontend/img/close.svg')}}" class="img-fluid" alt="sidebar-close-icon">
            </div>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#contact-tech-popup-btn").click(function(e) {
            e.preventDefault();
            $("#tach-contact-popup").css("display", "block");
        });
    });

    $("#tech-popup-btn").click(function(){
        $("#tach-contact-popup").css("display", "none");
    })
</script>