@extends('frontend.layouts.master')
@section('title','Tip4Teach || Edit Profile')
@section('main-content')
    <!--edit-account Section-->
    <div class="form-page container">
        <div class="section-title">
            <h2>Edit Account</h2>
            <p>Edit your Profile</p>
        </div>
        <form action="{{route('teacher.profile.update', ['id' => $teachers->id])}}" method="post" enctype="multipart/form-data" class="profile-form">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-3 mb-5 mb-lg-0">
                    <div class="upload-pic d-flex flex-column justify-content-center align-items-center  text-center">
                        <img src="{{url('public/images',$teachers->profile_image)}}" class="img-fluid " alt="profile-pic" id="teacher-picture">
                        <label for="input-file" class="main-btn mt-5">Change Picture</label>
                        <input type="file" accept="image/jpeg, image/png, image/jpg" id="input-file">
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>First name</span>
                            <input class="form-control" value="{{$teachers->first_name}}" type="text" name="first_name">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Last name</span>
                            <input class="form-control" value="{{$teachers->first_name}}" type="text" name="last_name">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Email Address</span>
                            <input class="form-control" value="{{$teachers->email}}" type="email" name="email" readonly>
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Phone Number</span>
                            <input class="form-control" value="{{$teachers->phone}}" type="text" name="phone">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Banking Detail</span>
                            <input class="form-control" value="{{$teachers->banking_details}}" type="text" name="banking_details">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>School</span>
                            <input class="form-control" value="{{$teachers->school}}" type="text" name="school">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Subject</span>
                            <input class="form-control" value="{{$teachers->subject}}" type="text" name="subject">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Experience</span>
                            <input class="form-control" value="{{$teachers->experience}}" type="text" name="experience">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>City</span>
                            <input class="form-control" value="{{$teachers->city}}" type="text" name="city">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>State/County</span>
                            <input class="form-control" value="{{$teachers->state}}" type="text" name="state">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Country</span>
                            <input class="form-control" value="{{$teachers->country}}" type="text" name="country">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Postal Code</span>
                            <input class="form-control " value="{{$teachers->postal_code}}" type="text" name="postal_code">
                        </div>
                        <div class="col-6">
                            <a href="{{route('teacher.dashboard')}}" class="cancel text-center w-100">Cancel</a>
                        </div>
                        <div class="col-6">
                            {{-- <a href="teacher-dashboard.html" class="submit w-100 text-center submit-form-btn border-0">Save</a> --}}
                            <button type="submit" class="submit w-100 text-center submit-form-btn border-0">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection   