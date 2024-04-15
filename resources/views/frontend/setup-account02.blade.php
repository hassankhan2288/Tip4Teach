@extends('frontend.layouts.master')
@section('title','Tip4Teach || Home')
@section('main-content')
    <!--edit-account Section-->
    <div class="form-page container">
        <div class="section-title">
            <h2>Setup Account</h2>
            <p>Hey Teacher ! Please complete your profile and setup account</p>
        </div>
        <form class="profile-form">
            <div class="row">
                <div class="col-12 col-lg-3 mb-3 mb-lg-0">
                    <div class="upload-pic d-flex flex-column justify-content-center align-items-center  text-center">
                        <img src="img/pro.png" class="img-fluid " alt="profile-pic" id="teacher-picture">
                        <label for="input-file" class="main-btn mt-2">Change Picture</label>
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
                            <span>Banking Detail</span>
                            <input class="form-control" type="text" name="banking-details">
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>School</span>
                            <input class="form-control" type="text" name="school">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Subject</span>
                            <input class="form-control"  type="text" name="subject">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Experience</span>
                            <input class="form-control"  type="text" name="experience">
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
                                <a href="teacher-dashboard.html" class="butn butn__new"><span>Save</span></a>
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
</body>
</html>