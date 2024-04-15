@extends('frontend.layouts.master')
@section('title','Tip4Teach || Home')
@section('main-content')

      <section class="hero-section">
        <div class="container">
          <div class="row d-lg-flex align-items-end ">
            <div class="col-12 col-lg-6 hero-text mb-0 mb-xxl-5 order-2 order-lg-1">
              <h2>Express appreciation for teachers</h2>
              <p>Extend your sincere appreciation to our educators who tirelessly strive to uplift our societies through their honorable deeds. Express your thankfulness to these committed people who selflessly contribute to shaping the lives of our future generation. A hearty thank you for making a meaningful impact with your steadfast commitment and zeal.</p>
              <a class="dedcription-btn" href="{{route('website.tip_now')}}">
                <span class="name-descripeion">TIP NOW</span>
                <div class="btn-icon">
                  <img src="{{asset('frontend/img/tip-icon.svg')}}" class="img-fluid " alt="">
                </div>
              </a>
            </div>
            <div class="col-12 col-lg-6 order-1 order-lg-2 mb-3 mb-lg-0">
              <div class="hero-imgs position-relative">
                <img src="{{asset('frontend/img/Ellipse 4.svg')}}" class="position-absolute blue-circle" alt="">
                <img src="{{asset('frontend/img/image 6.png')}}" class="hero-img" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
    <!--features-->
    <section class="features container">
      <h3 class="text-lg-center mb-3 mb-lg-5">Our Special Features</h3>
      <div class="row justify-content-lg-center ">
        <div class="col-lg-3 col-md-4 col-12 mb-4 mb-md-0">
          <div class="feature text-center first-ftr">
            <img src="{{asset('frontend/img/image 7.png')}}" class="mb-2" alt="Expert Advice">
            <h6 class="mb-3">Expert Advice</h6>
            <p>
              Our best-in-class customer care specialists will answer your questions, day or night.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 mb-4 mb-md-0">
          <div class="feature text-center second-ftr">
            <img src="{{asset('frontend/img/image 8.png')}}" alt="Expert Advice">
            <h6 class="mb-3">Secure</h6>
            <p>Our Trust & Safety team works around the clock to protect you against fraud.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 mb-md-0">
          <div class="feature text-center third-ftr">
            <img src="{{asset('frontend/img/image 9.png')}}" class="mb-4" alt="Expert Advice">
            <h6 class="mb-3">Simple Setup</h6>
            <p>You can personalise and share your GoFundMe in just a few minutes.</p>
          </div>
        </div>
      </div>
    </section>
  @endsection