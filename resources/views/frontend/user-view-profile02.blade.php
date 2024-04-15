@extends('frontend.layouts.master')
@section('title','Tip4Teach || Home')
@section('main-content')
    <!--user-view-account Section-->
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
                            <input disabled class="form-control" type="text" value="Jonhathon" name="your-name">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Last name</span>
                            <input disabled class="form-control" type="text" value="Steve" name="your-name">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Phone Number</span>
                            <input disabled class="form-control"  type="text" value="+1.123.241.4444" name="phone">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Occupation</span>
                            <input disabled class="form-control"  type="text" value="Developer" name="occupation">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>City</span>
                            <input disabled class="form-control" type="text" value="San Francisco" name="city">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>State/County</span>
                            <input disabled class="form-control" type="text" value="California" name="country">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Country</span>
                            <input disabled class="form-control" type="text" value="United States" name="country">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Postal Code</span>
                            <input disabled class="form-control" type="text" value="94016" name="postal-code">
                        </div>
                        <div class="col-12 mt-3">
                            <a href="user-dashboard.html" class="submit main-btn back-btn ">Back</a>
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