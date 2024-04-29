@extends('tipper.includes.masterLayout')

@section('content')
    <div class="dash-header">
        <div class="dash-title position-relative ">
            <h3>WELCOME TO USER DASHBOARD</h3>
            <img src="{{ asset('frontend/img/Rectangle 93.svg') }}" class="position-absolute yell-shape0" alt="dashboard">
            <img src="{{ asset('frontend/img/Rectangle 95.png') }}" class="position-absolute yell-shape1" alt="dashboard">
        </div>
        <div class="dash-owner d-flex align-items-center">
            <div class="owner-pic"><img src="{{ asset('frontend/img/dash.svg') }}" alt="dashboard-pic">
            </div>
            <div class="owner-info">
                <h5>Esthera Jackson</h5>
                <p>esthera@simmmple.com</p>
            </div>
        </div>
    </div>
    <h5 class="sayhi"><img src="{{ asset('frontend/img/waving-hand-sign_1f44b 1.png') }}" alt="waving-hand-sign">Hey User!
    </h5>
    <div class="earnings">
        <h3>You’ve sent $3 ,000 Tips this month</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-xxl-8 mb-3">
                <div class="chart">
                    <ul class="chart-numbers">
                        <li><span>200,000</span></li>
                        <li><span>150,000</span></li>
                        <li><span>100,000</span></li>
                        <li><span>50,000</span></li>
                        <li><span>0</span></li>
                    </ul>
                    <ul class="chart-dates">
                        <li>
                            <div class="bar" data-percentage="25"></div><span>Mar 1 - 7</span>
                        </li>
                        <li>
                            <div class="bar" data-percentage="50"></div><span>Mar 8 - 14</span>
                        </li>
                        <li>
                            <div class="bar" data-percentage="66"></div><span>Mar 15 - 21</span>
                        </li>
                        <li>
                            <div class="bar" data-percentage="76"></div><span>Mar 22 - 28</span>
                        </li>
                        <li>
                            <div class="bar" data-percentage="100"></div><span>Final wk</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-xxl-4">
                <div class="tips-recieved">
                    <div class="tip-rec-header mb-3">
                        <img src="{{ asset('frontend/img/fluent_wallet-credit-card-16-filled.svg') }}"
                            alt="wallet-credit-card">
                        <span>Tips Sent</span>
                    </div>
                    <ul class="tips-lists">
                        <li class="tips-list-header d-flex align-items-center justify-content-between mb-2">
                            <span>Last 30 days <img src="{{ asset('frontend/img/Frame 2.svg') }}" alt="frame"></span>
                            <a href="#">See All</a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between mb-2">
                            <span class="tip-amount">$30000</span>
                            <span class="tip-date">Jan 12,2022</span>
                        </li>
                        <li class="d-flex align-items-center justify-content-between mb-2">
                            <span class="tip-amount">$200</span>
                            <span class="tip-date">Jan 12,2022</span>
                        </li>
                        <li class="d-flex align-items-center justify-content-between mb-2">
                            <span class="tip-amount">$100</span>
                            <span class="tip-date">Jan 12,2022</span>
                        </li>
                        <li class="d-flex align-items-center justify-content-between mb-2">
                            <span class="tip-amount">$100</span>
                            <span class="tip-date">Jan 12,2022</span>
                        </li>
                        <li class="d-flex align-items-center justify-content-between mb-2">
                            <span class="tip-amount">$300</span>
                            <span class="tip-date">Jan 12,2022</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="dash-icon position-absolute d-block d-lg-none">
        <img src="{{ asset('frontend/img/menu (1).svg') }}" class="img-fluid " alt="dash-icon">
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="user-dash-contact-popup" id="user-contact-popup">
        <div class="container">
            <form class="tch-contact-popup profile-form">
                <div class="popup-title">
                    <h2>User Contact Form</h2>
                    <p class="mb-3">Thank you for reaching out! Please fill out the form below, and we'll get back to
                        you as soon as possible.</p>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 mb-3 form-label ">
                        <span>First name</span>
                        <input disabled class="form-control" type="text" value="User" name="your-name">
                    </div>
                    <div class="col-12 col-lg-6 mb-3 form-label">
                        <span>Email</span>
                        <input disabled class="form-control" value="msabcxyz210@gmail.com" type="email" name="mail">
                    </div>
                    <div class="col-12 mb-3 form-label">
                        <span>Role</span>
                        <input disabled class="form-control" value="User" type="text" name="role">
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
                <div class="sidebar-close-icon position-absolute close-dash" id="user-popup-btn">
                    <img src="{{ asset('frontend/img/close.svg') }}" class="img-fluid" alt="sidebar-close-icon">
                </div>
            </form>
        </div>
    </div>
    <div class="tch-dash-contact-popup" id="tach-contact-thank">
        <div class="container">
            <div class="tch-contact-popup text-center">
                <div class="img-container mb-3">
                    <img src="{{ asset('frontend/img/image 23.png') }}" class="img-fluid " alt="">
                </div>
                <h3 class="mb-4">Thankyou !!</h3>
                <p class="mb-4">Your Message has been sent We wil contact you in a short while</p>
                <div class="banner">
                    <a href="#" class="log-btn butn butn__new popup-white"
                        id="tech-popup-thank"><span>Close</span></a>
                </div>
            @endsection
            <script>
                $(document).ready(function() {
                    $(window).on("scroll", function() {
                        if ($(this).scrollTop() > $(".dashboard .chart").offset().top - innerHeight) {
                            $(".chart-dates li .bar").each(function() {
                                var percentage = $(this).data('percentage');
                                $(this).animate({
                                    'height': percentage + '%'
                                }, 1000)
                            })
                        }
                    })
                })
            </script>
            </body>

            </html>
