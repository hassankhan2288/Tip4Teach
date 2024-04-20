@extends('frontend.layouts.master')
@section('title','Tip4Teach || Home')
@section('main-content')
    <!--user-setup-account Section-->
    <div class="form-page container">
        <div class="section-title">
            <h1>Setup Account</h1>
            <p>Hey User ! Please complete your profile and setup account</p>
        </div>
        <form action="{{route('website.account.post')}}" method="post" class="profile-form">
            @csrf
            @if(isset($users->id))
              <input type="hidden" name="id" value="{{$users->id}}">
              @endif
            <div class="row">
                <div class="col-12 col-lg-3 mb-5 mb-lg-0">
                    <div class="upload-pic d-flex flex-column justify-content-center align-items-center  text-center">
                        <img src="{{asset('frontend/img/icons8-person-64 2.png')}}" class="img-fluid " alt="profile-pic" id="teacher-picture">
                        <label for="input-file" class="main-btn mt-5">Upload a Picture </label>
                        <input type="file" name="profile_image" accept="image/jpeg, image/png, image/jpg" id="input-file">
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>First name</span>
                            <input class="form-control @error('first_name') is-invalid @enderror" type="text" name="first_name" value="{{old("first_name")??$users->name??""}}" required autocomplete="first_name" autofocus>
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Last name</span>
                            <input class="form-control @error('last_name') is-invalid @enderror" type="text" name="last_name" value="{{old("last_name")??$users->last_name??""}}" required autocomplete="last_name" autofocus>
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Phone Number</span>
                            <input class="form-control @error('phone') is-invalid @enderror"  type="number" name="phone" value="{{old("phone")??$users->phone??""}}" required autocomplete="phone" autofocus>
                        </div>
                        <div class="col-12 mb-3 form-label ">
                            <span>Occupation</span>
                            <input class="form-control @error('occupation') is-invalid @enderror"  type="text" name="occupation" value="{{old("occupation")??$users->occupation??""}}" required autocomplete="occupation" autofocus>
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>City</span>
                            <input class="form-control @error('city') is-invalid @enderror" type="text" name="city" value="{{old("city")??$users->city??""}}" required autocomplete="city" autofocus>
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>State/County</span>
                            <input class="form-control @error('state') is-invalid @enderror" type="text" name="state" value="{{old("state")??$users->state??""}}" required autocomplete="state" autofocus>
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Country</span>
                            <input class="form-control @error('country') is-invalid @enderror" type="text" name="country" value="{{old("country")??$users->country??""}}" required autocomplete="country" autofocus>
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>Postal Code</span>
                            <input class="form-control @error('postal_code') is-invalid @enderror" type="text" name="postal_code" value="{{old("postal_code")??$users->postal_code??""}}" required autocomplete="postal_code" autofocus>
                        </div>
                        <div class="col-12">
                        <div class="banner">
                            {{-- <a href="user-dashboard.html" class="butn butn__new"><span>Save</span></a> --}}
                            <button class="butn butn__new"><span>Save</span></button>
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
