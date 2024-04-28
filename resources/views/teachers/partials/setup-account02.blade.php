@extends('frontend.layouts.master')
@section('title','Tip4Teach || Home')
@section('main-content')
    <!--edit-account Section-->
    <div class="form-page container">
        <div class="section-title">
            <h2>Setup Account</h2>
            <p>Hey Teacher ! Please complete your profile and setup account</p>
        </div>
        <form action="{{route('website.teacher.account.post',$teacher->id)}}" method="post" class="profile-form" enctype="multipart/form-data">
            @csrf
            @if(isset($teacher->id))
              <input type="hidden" name="id" value="{{$teacher->id}}">
              @endif
            <div class="row">
                <div class="col-12 col-lg-3 mb-3 mb-lg-0">
                    <div class="upload-pic d-flex flex-column justify-content-center align-items-center  text-center">
                        <img src="{{asset('frontend/img/icons8-person-64 2.png')}}" class="img-fluid " alt="profile-pic" id="teacher-picture">
                        <label for="input-file" class="main-btn mt-2">Change Picture</label>
                        <input type="file" name="profile_image" accept="image/jpeg, image/png, image/jpg" id="input-file">
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>First name</span>
                            <input class="form-control @error('first_name') is-invalid @enderror" type="text" name="first_name" value="{{old("first_name")??$teacher->first_name??""}}" required>
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Last name</span>
                            <input class="form-control @error('last_name') is-invalid @enderror" type="text" name="last_name" value="{{old("last_name")??$teacher->last_name??""}}" required>
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Phone Number</span>
                            <input class="form-control @error('phone') is-invalid @enderror"  type="text" name="phone" value="{{old("phone")??$teacher->phone??""}}" required>
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Banking Detail</span>
                            <input class="form-control @error('banking_detail') is-invalid @enderror" type="text" name="banking_detail" value="{{old("banking_detail")??$teacher->banking_detail??""}}" required>
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>School</span>
                            <input class="form-control @error('school') is-invalid @enderror" type="text" name="school" value="{{old("school")??$teacher->school??""}}" required>
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Subject</span>
                            <input class="form-control @error('subject') is-invalid @enderror"  type="text" name="subject" value="{{old("subject")??$teacher->subject??""}}" required>
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Experience</span>
                            <input class="form-control @error('experience') is-invalid @enderror"  type="text" name="experience" value="{{old("experience")??$teacher->experience??""}}" required>
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>City</span>
                            <input class="form-control @error('city') is-invalid @enderror" type="text" name="city" value="{{old("city")??$teacher->city??""}}" required>
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>State/County</span>
                            <input class="form-control @error('state') is-invalid @enderror" type="text" name="state" value="{{old("state")??$teacher->state??""}}" required>
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Country</span>
                            <input class="form-control @error('country') is-invalid @enderror" type="text" name="country" value="{{old("country")??$teacher->country??""}}" required>
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Postal Code</span>
                            <input class="form-control @error('postal_code') is-invalid @enderror" type="text" name="postal_code" value="{{old("postal_code")??$teacher->postal_code??""}}" required>
                        </div>
                        <div class="col-12">
                            <div class="banner">
                                {{-- <a href="teacher-dashboard.html" class="butn butn__new"><span>Save</span></a> --}}
                                <button type="submit" class="butn butn__new"><span>Save</span></button>
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