@extends('frontend.layouts.master')
@section('title','Tip4Teach || Contact Us')
@section('main-content')
    <!--contact-us-->
    <section class="contact-section">
      <div class="container">
          <div class="row d-flex align-items-center ">
            <div class="col-12 col-lg-6 contact-text order-2 order-lg-1">
              <div class="section-title">
                <h1>Contact Us</h1>
                <p>Fill out the form and let us know how we can help</p>
              </div>
                <h3>Get in Touch</h3>
                <form action="" class="row profile-form">
                    <div class="col-12 col-lg-6 mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="col-12 col-lg-6 mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="col-12 col-lg-6 mb-3">
                        <input type="text" name="phone-number" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="col-12 col-lg-6 mb-3">
                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="col-12 mb-3">
                        <textarea class="form-control" placeholder="Message" rows="3"></textarea>
                    </div>
                    <div class="col-12">
                      <div class="banner">
                        <a href="#" class="log-btn butn butn__new" id="popup-thank-tech-btn"><span>Send Message</span></a>
                      </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-6 order-1 order-lg-2">
              <div class="contact-img">
                  <img src="{{asset('frontend/img/image 20.png')}}" class="img-fluid" alt="contact-us">
              </div>
            </div>
          </div>
      </div>
      <div class="tch-dash-contact-popup" id="tach-contact-thank">
        <div class="container">
            <div class="tch-contact-popup text-center">
                <div class="img-container mb-3">
                    <img src="{{asset('frontend/img/image 23.png')}}" alt="">
                </div>
                <h3 class="mb-4">Thankyou !!</h3>
                <p class="mb-4">Your Message has been sent We wil contact you in a short while</p>
                <div class="banner">
                    <a href="#" class="log-btn butn butn__new popup-white" id="tech-popup-thank"><span>Close</span></a>
                </div>
            </div>
        </div>
    </div>
   </section>
@endsection   