@extends('frontend.layouts.master')
@section('title','Tip4Teach || Home')
@section('main-content')
    <!--user-setup-account Section-->
    <div class="form-page container">
        <div class="section-title">
            <h1>Setup Account</h1>
            <p>Hey User ! Please complete your profile and setup account</p>
        </div>
        <form class="profile-form">
            <div class="row">
                <div class="col-12 col-lg-3 mb-5 mb-lg-0">
                    <div class="upload-pic d-flex flex-column justify-content-center align-items-center  text-center">
                        <img src="img/icons8-person-64 2.png" class="img-fluid " alt="profile-pic" id="teacher-picture">
                        <label for="input-file" class="main-btn mt-5">Upload a Picture </label>
                        <input type="file" accept="image/jpeg, image/png, image/jpg" id="input-file">
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>First name</span>
                            <input class="form-control" type="text" name="your-name">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Last name</span>
                            <input class="form-control" type="text" name="your-name">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Phone Number</span>
                            <input class="form-control"  type="text" name="phone">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Occupation</span>
                            <input class="form-control"  type="text" name="occupation">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>City</span>
                            <input class="form-control" type="text" name="city">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>State/County</span>
                            <input class="form-control" type="text" name="country">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Country</span>
                            <input class="form-control" type="text" name="country">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Postal Code</span>
                            <input class="form-control" type="text" name="postal-code">
                        </div>
                        <div class="col-12">
                        <div class="banner">
                            <a href="user-dashboard.html" class="butn butn__new"><span>Save</span></a>
                        </div>
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
