@extends('frontend.layouts.master')
@section('title','Tip4Teach || About Us')
@section('main-content')
    <section class="about">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 order-2  order-lg-1">
            <div class="section-title">
              <h1>About Us</h1>
              <p class="mt-2 mt-lg-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas integer eget aliquet nibh praesent tristique magna sit amet. Sem </p>
            </div>
          </div>
          <div class="col-12 col-lg-6 order-1 order-lg-2 ">
            <div class="img-container">
              <img src="{{asset('frontend/img/image 21.png')}}" class="img-fluid " alt="about-img">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Commitment-->
    <section class="commitment">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 mb-5 mb-lg-0">
            <div class="commitment-img">
              <img src="{{asset('frontend/img/Rectangle 4340 (1).png')}}" class="img-fluid " alt="commitment">
            </div>
          </div>
          <div class="col-12 col-lg-6 mb-lg-0 order-1">
            <div class="commitment-text">
              <h3>Our Commitment to Teachers</h3>
              <p>You might talk about your origin story,your team,highlight awards or recognition,or share photos. Tap into your creativity. You’ve got this. This way you tell your story online can make all the difference. </p>
              <p>Don’t worry about sounding professional. Sound like you. There are over 1.5 billion websites out there, but your story is what’s going to seperate this one from the rest. If you read the words back and don’t hear your own voice in your head, that’s a good sign you still have more work to do.</p>
              <p class="mb-0">Be clear, be confident, and don’t over think it. The beauty of your story is that it’s going to continue to evolve and your site can evolve with it. Your goal should be to make it feel right for right now.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
 @endsection 