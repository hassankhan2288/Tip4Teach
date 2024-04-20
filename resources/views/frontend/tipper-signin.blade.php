@extends('frontend.layouts.master')
@section('title','Tip4Teach || Home')
@section('main-content')
    <!--tipper signin-->
    <section class="forget-pass">
        <div class="container">
            <div class="row d-flex align-items-end  justify-content-center ">
                <div class="col-lg-4 col-12">
                    <div class="signup-img">
                        <img src="{{asset('frontend/img/Green rec (3).png')}}" class="img-fluid" alt="signin">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <form action="{{route ('website.tipper.login.post')}}" method="post" class="profile-form">
                      @csrf
                      <div class="section-title mb-4">
                        <h2 >Log in as a Tipper</h2>
                        <p>Welcome back, you’ve been missed!</p>
                      </div>
                        <h3 class="form-label mb-4">Log In </h3>
                        <div class="row">
                          <div class="col-12 mb-4">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                          </div>
                          <div class="col-12 mb-4">
                            <input type="password" class="form-control" name="password" placeholder="password">
                          </div>
                          <div class="col-6 mb-4 form-group form-check">
                            <input type="checkbox" class="form-check-input" id="rememberme">
                            <label class="form-check-label" for="rememberme">Remember me</label>
                        </div>
                          <div class="col-6 mb-4 d-flex align-items-center justify-content-end ">
                            <a href="user-forget-password.html" class="forgt-pass">Forgot Password?</a>
                          </div>
                        </div>
                        <div class="col-12 mb-4 ">
                          <div class="banner w-100 text-center ">
                            {{-- <a href="user-dashboard.html" class='log-btn butn butn__new'><span>LOGIN</span></a> --}}
                            <button type="submit" class='log-btn butn butn__new'><span>LOGIN</span></button>
                          </div>
                        </div>
                        <div class="col-12 text-center ">
                          <p class="form-text "> Don't have a Tipper account?  <a href="tipper-signup.html">Sign Up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
  @endsection