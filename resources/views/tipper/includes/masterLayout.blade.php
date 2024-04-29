<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.layouts.head')
    @yield('styles')
    
</head>
<body>
    <section class="tch-dash">
        <div class="container-fluid">
            <div class="row">
    
                @include('tipper.includes.sidebar')
    
                <div class="col-12 col-lg-9">
                    <div class="dashboard teacher-dash">
                       
                        {{-- @include('tipper.includes.header') --}}
    
                        @yield('content')

                    </div>
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
                            <input disabled class="form-control" value="Sarah " type="text" name="your-name">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label">
                            <span>Email</span>
                            <input disabled class="form-control" value="teacher@gmail.com" type="email" name="mail">
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
        <div class="tch-dash-contact-popup" id="tach-contact-thank">
            <div class="container">
                <div class="tch-contact-popup text-center">
                    <div class="img-container mb-3">
                        <img src="img/image 23.png" class="img-fluid " alt="">
                    </div>
                    <h3 class="mb-4">Thankyou !!</h3>
                    <p class="mb-4">Your Message has been sent We wil contact you in a short while</p>
                    <div class="banner" >
                        <a href="#" class="log-btn butn butn__new popup-white" id="tech-popup-thank"><span>Close</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tch-dash-contact-popup" id="tach-widthdraw-thank">
            <div class="container">
                <div class="tch-contact-popup text-center">
                    <div class="img-container mb-3">
                        <img src="img/image 17.png" class="img-fluid " alt="">
                    </div>
                    <h3 class="mb-4">Thankyou !!</h3>
                    <p class="mb-4">your finds will be transferred to you asap</p>
                    <div class="banner">
                        <a href="#" class="log-btn butn butn__new popup-white" id="tech-popup-withdraw"><span>Close</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.layouts.footer')

    @yield('scripts')
</body>
</html>
