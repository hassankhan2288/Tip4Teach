@extends('frontend.layouts.master')
@section('title','Tip4Teach || Home')
@section('main-content')
    <!--fotget password-->
        <!--popup-->
        <div class="tch-dash-contact-popup" id="tach-contact-thank">
          <div class="container">
              <div class="tch-contact-popup text-center">
                <div class="img-container position-relative  mb-3">
                  <div class="popup-overlay position-absolute "></div>
                  <img src="img/Group 36679.svg" class="img-fluid " alt="">
                </div>
                  <h3 class="mb-4">Thankyou !!</h3>
                  <p class="mb-4">Check your email for further instructions</p>
                  <div class="banner">
                      <a href="#" class="log-btn butn butn__new popup-white" id="tech-popup-thank"><span>Close</span></a>
                  </div>
              </div>
          </div>
       </div>
      <section class="forget-pass forget-pass-page">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-4 col-12 mb-3 mb-lg-0">
                    <div class="signup-img">
                        <img src="img/Green rec (4).png" class="img-fluid" alt="signin">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <form class="profile-form text-center row ">
                      <div class="section-title mb-4">
                        <h2>Forgot Password?</h2>
                        <p>Don’t worry, We will reset your password</p>
                      </div>
                        <div class="col-12 mb-4">
                          <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="col-12 mb-4">
                          <div class="banner w-100 text-center " >
                            <a href="#" class="log-btn butn butn__new" id="popup-thank-tech-btn"><span>Next</span></a>
                          </div>
                        </div>
                        <p>Remember your password?<a href="teacher-signin.html"> Log In</a></p>
                    </form>
                </div>
            </div>
        </div>
      </section>
@endsection    