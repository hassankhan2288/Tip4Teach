@extends('frontend.layouts.master')
@section('title','Tip4Teach || Edit Profile')
@section('main-content')
    <!--user-edit-account Section-->
    <div class="form-page container">
        <div class="section-title">
            <h1>Edit Account</h1>
            <p>Edit your Profile</p>
        </div>
        <form action="{{route('tipper.profile.update', ['id' => $tippers->id])}}" method="post" enctype="multipart/form-data" class="profile-form">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-3 mb-3 mb-lg-0">
                    <div class="upload-pic d-flex flex-column justify-content-center align-items-center  text-center">
                        <img src="{{url('public/images',$tippers->profile_image)}}" class="img-fluid " alt="profile-pic" id="teacher-picture">
                        <label for="input-file" class="main-btn mt-1">Upload a Picture </label>
                        <input type="file" name="profile_image" accept="image/jpeg, image/png, image/jpg" id="input-file">
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>First name</span>
                            <input class="form-control" type="text" value="{{ $tippers->first_name }}" name="first_name">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Last name</span>
                            <input class="form-control" type="text" value="{{ $tippers->last_name }}" name="last_name">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Phone Number</span>
                            <input class="form-control"  type="text" value="{{ $tippers->phone }}" name="phone">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Occupation</span>
                            <input class="form-control"  type="text" value="{{ $tippers->occupation }}" name="occupation">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>City</span>
                            <input class="form-control" type="text" value="{{ $tippers->city }}" name="city">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>State/County</span>
                            <input class="form-control" type="text" value="{{ $tippers->state }}" name="state">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Country</span>
                            <input class="form-control" type="text" value="{{ $tippers->country }}" name="country">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Postal Code</span>
                            <input class="form-control" type="text" value="{{ $tippers->postal_code }}" name="postal_code">
                        </div>
                        <div class="col-6">
                            <a href="{{route('tipper.dashboard')}}" class="cancel text-center w-100">Cancel</a>
                        </div>
                        <div class="col-6">
                            {{-- <a href="user-dashboard.html" class="submit w-100 text-center submit-form-btn border-0">Save</a> --}}
                            <button class="submit w-100 text-center submit-form-btn border-0">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
   @endsection
    <script>
        let teacherPic = document.getElementById("teacher-picture");
        let fileInput = document.getElementById("input-file");
        fileInput.onchange = function(){
            teacherPic.src = URL.createObjectURL(fileInput.files[0]);
        }
    </script>
