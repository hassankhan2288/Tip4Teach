@extends('frontend.layouts.master')
@section('title','Tip4Teach || Home')
@section('main-content')
    <!--view-account Section-->
    <div class="form-page container">
        <div class="section-title">
            <h1>View Profile</h1>
        </div>
        <form class="profile-form">
            <div class="row">
                <div class="col-12 col-lg-3 mb-5 mb-lg-0">
                    <div class="upload-pic text-center">
                        <img src="img/pro.png" class="img-fluid " alt="profile-pic" id="teacher-picture">
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>First name</span>
                            <input disabled class="form-control" value="Ms. Abc" type="text" name="your-name">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Last name</span>
                            <input disabled class="form-control" value="Ms. Abc" type="text" name="your-name">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Email Address</span>
                            <input disabled class="form-control" value="msabcxyz210@gmail.com" type="email" name="email">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Phone Number</span>
                            <input disabled class="form-control" value="+1.123.241.4444" type="text" name="phone">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Banking Detail</span>
                            <input disabled class="form-control" value="123456789 Wise Ms. ABC" type="text" name="banking-details">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>School</span>
                            <input disabled class="form-control" value="The Oxford Academy" type="text" name="phone">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Subject</span>
                            <input disabled class="form-control" value="TMathematics" type="text" name="phone">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Experience</span>
                            <input disabled class="form-control" value="10+ Years" type="text" name="phone">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>City</span>
                            <input disabled class="form-control" value="San Francisco" type="text" name="phone">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>State/County</span>
                            <input disabled class="form-control" value="California" type="text" name="phone">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Country</span>
                            <input disabled class="form-control" value="United States" type="text" name="phone">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Postal Code</span>
                            <input disabled class="form-control" value="94016" type="text" name="phone">
                        </div>
                        <div class="col-12 mt-3">
                            <a href="teacher-dashboard.html" class="submit main-btn back-btn">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
  @endsection