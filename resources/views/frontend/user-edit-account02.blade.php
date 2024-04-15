@extends('frontend.layouts.master')
@section('title','Tip4Teach || Home')
@section('main-content')
    <!--user-edit-account Section-->
    <div class="form-page container">
        <div class="section-title">
            <h1>Edit Account</h1>
            <p>Edit your Profile</p>
        </div>
        <form class="profile-form">
            <div class="row">
                <div class="col-12 col-lg-3 mb-3 mb-lg-0">
                    <div class="upload-pic d-flex flex-column justify-content-center align-items-center  text-center">
                        <img src="img/pro.png" class="img-fluid " alt="profile-pic" id="teacher-picture">
                        <label for="input-file" class="main-btn mt-1">Upload a Picture </label>
                        <input type="file" accept="image/jpeg, image/png, image/jpg" id="input-file">
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>First name</span>
                            <input class="form-control" type="text" value="Jonhathon" name="your-name">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Last name</span>
                            <input class="form-control" type="text" value="Steve" name="your-name">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Phone Number</span>
                            <input class="form-control"  type="text" value="+1.123.241.4444" name="phone">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Occupation</span>
                            <input class="form-control"  type="text" value="Developer" name="occupation">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>City</span>
                            <input class="form-control" type="text" value="San Francisco" name="city">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>State/County</span>
                            <input class="form-control" type="text" value="California" name="country">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Country</span>
                            <input class="form-control" type="text" value="United States" name="country">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Postal Code</span>
                            <input class="form-control" type="text" value="94016" name="postal-code">
                        </div>
                        <div class="col-6">
                            <a href="user-dashboard.html" class="cancel text-center w-100">Cancel</a>
                        </div>
                        <div class="col-6">
                            <a href="user-dashboard.html" class="submit w-100 text-center submit-form-btn border-0">Save</a>
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
