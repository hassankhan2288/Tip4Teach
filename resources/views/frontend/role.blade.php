@extends('frontend.layouts.master')
@section('title','Tip4Teach || Home')
@section('main-content')
    <!--your role-->
    <section class="role">
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <h1>What’s your role?</h1>
            <div class="role-choices d-flex align-items-center">
                <a href="teacher-signup.html" class="role-choice text-center d-flex flex-column justify-content-center align-items-center">
                    <img src="img/image 15.png" class="img-fluid " alt="teacher">
                    <h2>Teacher</h2>
                </a>
                <a href="tipper-signup.html" class="role-choice text-center d-flex flex-column justify-content-center align-items-center">
                    <img src="img/image 16.png" class="img-fluid role-ch-img" alt="tipper">
                    <h2>Tipper</h2>
                </a>
            </div>
        </div>
    </section>
   @endsection