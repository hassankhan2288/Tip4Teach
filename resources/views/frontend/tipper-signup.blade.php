@extends('frontend.layouts.master')
@section('title','Tip4Teach || Home')
@section('main-content')
    <!--tipper signin-->
    <section class="forget-pass">
        <div class="container">
            <div class="row d-flex align-items-end justify-content-center ">
                <div class="col-lg-4 col-12">
                    <div class="signup-img">
                        <img src="{{asset('frontend/img/Green rec (2).png')}}" class="img-fluid" alt="signin">
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <form action="{{route('website.tipper.signup.post') }}" method="POST" class="profile-form">
                      @csrf
                      <div class="section-title mb-4">
                        <h2>Create an Account as a Tipper</h2>
                        @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            {{-- <button type="button" class="close" data-dismiss="alert">×</button> --}}
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                      </div>
                        <div class="row">
                          <div class="col-12 mb-4">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                          </div>
                          <div class="col-12 mb-4">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                          </div>
                          <div class="col-12 mb-4">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                          </div>
                          <div class="col-12 mb-4">
                            <input type="password" class="form-control" name="password" placeholder="password" required>
                          </div>
                          <div class="col-12 mb-4 ">
                            <div class="banner w-100 text-center ">
                              {{-- <a href="{{route('website.tipper.account')}}" class='log-btn butn butn__new'><span>SIGN UP</span></a> --}}
                              <button type="submit" class='log-btn butn butn__new'><span>SIGN UP</span></button>
                            </div>
                          </div>
                          <div class="col-12 text-center ">
                            <p class="form-text ">Already have an account? <a href="{{route('website.tipper.login')}}">Log In</a></p>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
   @endsection