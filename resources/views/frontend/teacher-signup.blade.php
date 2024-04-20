@extends('frontend.layouts.master')
@section('title','Tip4Teach || Signup')
@section('main-content')
    <!--tipper signin-->
    <section class="forget-pass">
        <div class="container">
            <div class="row d-flex align-content-center justify-content-center ">
                <div class="col-lg-4 col-12">
                    <div class="signup-img">
                        <img src="{{asset('frontend/img/Green rec.png')}}" class="img-fluid" alt="signin">
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <form class="profile-form">
                      <div class="section-title mb-4">
                        <h2>Create an Account as a Teacher</h2>
                      </div>
                        <div class="row">
                          <div class="col-12 mb-4">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                          </div>
                          <div class="col-12 mb-4">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                          </div>
                          <div class="col-12 mb-4">
                            <input type="password" class="form-control" name="password" placeholder="password">
                          </div>
                          <div class="col-12 mb-4 ">
                            <div class="banner w-100 text-center ">
                              <a href="{{route('website.teacher.account')}}" class='log-btn butn butn__new'><span>SIGN UP</span></a>
                            </div>
                          </div>
                          <div class="col-12 text-center mb-4">
                            <p class="form-text ">Already have an account? <a href="{{route('website.teacher.login')}}">Log In</a></p>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
   @endsection