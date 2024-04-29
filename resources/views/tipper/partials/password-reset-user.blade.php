@extends('frontend.layouts.master')
@section('title','Tip4Teach || Change password')
@section('main-content')

    <!--reset password-->
   <section class="forget-pass">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-4 col-12 d-lg-flex align-items-center justify-content-center ">
                <div class="signup-img">
                    <img src="{{asset('frontend/img/Green rec (5).png')}}" class="img-fluid" alt="signin">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <form  method="POST" action="{{ route('tipper.password.update') }}" class="profile-form">
                  @csrf
                  <div class="section-title mb-4">
                    <h2>Change Password</h2>
                    <p>Enter your new password for your account</p>
                  </div>
                    <div class="row">
                      <div class="col-12 mb-4">
                        <span class="form-label ">New Password</span>
                        <input type="password" class="form-control" name="password" required>
                      </div>
                      <div class="col-12 mb-4">
                        <span class="form-label ">Confirm Password</span>
                        <input type="password" class="form-control" name="password_confirmation" required>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="banner w-100 text-center ">
                        {{-- <a href="#" class="log-btn butn butn__new" id="popup-thank-tech-btn"><span>Change Password</span></a> --}}
                        <button class="log-btn butn butn__new" id="popup-thank-tech-btn"><span>Change Password</span></button>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
    <!--popup-->
    <div class="tch-dash-contact-popup" id="tach-contact-thank">
      <div class="container">
          <div class="tch-contact-popup text-center">
            <div class="img-container mb-3">
              <img src="{{asset('frontend/img/image 23.png')}}" class="img-fluid " alt="">
            </div>
              <h3 class="mb-4">Thankyou !!</h3>
              <p class="mb-4">Your password has been updated</p>
              <div class="banner">
                  <a href="user-dashboard.html" class="log-btn butn butn__new"><span>Back to dashboard</span></a>
              </div>
          </div>
      </div>
   </div>
@endsection
    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!--Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script>
          $("#passBtn").click(function(e){
            e.preventDefault();
            $("#passPopup").addClass("open-popup");
         })
      
    </script>
