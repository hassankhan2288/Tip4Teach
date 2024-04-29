@extends('frontend.layouts.master')
@section('title','Tip4Teach || View Profile')
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
                            <input disabled class="form-control" value="{{ $teachers->first_name }}" type="text" name="first_name">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Last name</span>
                            <input disabled class="form-control" value="{{ $teachers->last_name }}" type="text" name="last_name">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Email Address</span>
                            <input disabled class="form-control" value="{{ $teachers->email }}" type="email" name="email">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Phone Number</span>
                            <input disabled class="form-control" value="{{ $teachers->phone }}" type="text" name="phone">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Banking Detail</span>
                            <input disabled class="form-control" value="{{ $teachers->banking_detail }}" type="text" name="banking_detail">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>School</span>
                            <input disabled class="form-control" value="{{ $teachers->school }}" type="text" name="school">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Subject</span>
                            <input disabled class="form-control" value="{{ $teachers->subject }}" type="text" name="subject">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Experience</span>
                            <input disabled class="form-control" value="{{ $teachers->experience }}" type="text" name="experience">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>City</span>
                            <input disabled class="form-control" value="{{ $teachers->city }}" type="text" name="city">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>State/County</span>
                            <input disabled class="form-control" value="{{ $teachers->state }}" type="text" name="state">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Country</span>
                            <input disabled class="form-control" value="{{ $teachers->country }}" type="text" name="country">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Postal Code</span>
                            <input disabled class="form-control" value="{{ $teachers->postal_code }}" type="text" name="postal_code">
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