@extends('frontend.layouts.master')
@section('title','Tip4Teach || Role')
@section('main-content')
    <!--your role-->
    <section class="role">
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <h1>What’s your role?</h1>
            <div class="role-choices d-flex align-items-center">
                <a href="{{route('website.teacher.signup')}}" class="role-choice text-center d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('frontend/img/image 15.png')}}" class="img-fluid " alt="teacher">
                    <h2>Teacher</h2>
                </a>
                <a href="{{route('website.tipper.signup')}}" class="role-choice text-center d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('frontend/img/image 16.png')}}" class="img-fluid role-ch-img" alt="tipper">
                    <h2>Tipper</h2>
                </a>
            </div>
        </div>
    </section>
   @endsection