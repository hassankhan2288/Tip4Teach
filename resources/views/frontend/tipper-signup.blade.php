@extends('frontend.layouts.master')
@section('title','Tip4Teach || Home')
@section('main-content')
    <!--tipper signin-->
    <section class="forget-pass">
        <div class="container">
            <div class="row d-flex align-items-end justify-content-center ">
                <div class="col-lg-4 col-12">
                    <div class="signup-img">
                        <img src="img/Green rec (2).png" class="img-fluid" alt="signin">
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <form class="profile-form">
                      <div class="section-title mb-4">
                        <h2>Create an Account as a Tipper</h2>
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
                              <a href="user-setup-account02.html" class='log-btn butn butn__new'><span>SIGN UP</span></a>
                            </div>
                          </div>
                          <div class="col-12 text-center ">
                            <p class="form-text ">Already have an account? <a href="tipper-signin.html">Log In</a></p>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
   @endsection