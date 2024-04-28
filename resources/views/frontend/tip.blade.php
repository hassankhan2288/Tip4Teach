@extends('frontend.layouts.master')
@section('title','Tip4Teach || Teachers')
@section('main-content')
    <!--tip now-->
    <section class="tip">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 col-lg-6">
              <div class="teacher-btns d-flex  mb-4 mb-lg-0 gap-4">
                <button class="teacher-btn border-0  active" data-target="all">All</button>
                <button class="teacher-btn border-0" data-target="currentTeacher">Current Teachers</button>
                <button class="teacher-btn border-0" data-target="formerTeacher">Former Teachers</button>
            </div>
            </div>
           <div class="col-12 col-lg-6">
            <div class="search_form position-relative ">
              <div class="search_Icon">
                <img src="img/search-light.svg" class="img-fluid " alt="">
              </div>
              <input type="text" class="form-control teacher-search" name="search" placeholder="Search">
            </div>
           </div>
          </div>
            <div class="row teachers-filter">
              @foreach ($farmer_teacher as $teacher)
              <div class="col-4 col-lg-3 mb-3 mb-lg-5 formerTeacher teacher">
                <div class="text-center">
                  <img src="{{url('public/images',$teacher->profile_image)}}" alt="teacher">
                  <h5>Ms. {{$teacher->first_name}} {{$teacher->last_name}}<br>Experience {{$teacher->experience}}.</h5>
                  @if (\Auth::guard('tipper')->user())
                  <a class="dedcription-btn" href="{{ route('website.tipping', ['id' => $teacher->id]) }}">
                        <span class="name-descripeion">TIP NOW</span>
                        <div class="btn-icon">
                            <img src="{{ asset('frontend/img/tip-icon.svg') }}" class="img-fluid" alt="">
                        </div>
                    </a>
                  @else
                      <a class="dedcription-btn" href="{{ route('website.tipper.login') }}">
                        <span class="name-descripeion">TIP NOW</span>
                        <div class="btn-icon">
                          <img src="{{ asset('frontend/img/tip-icon.svg') }}" class="img-fluid" alt="">
                      </div>
                      </a>
                  @endif
              </div>
              </div>
              @endforeach
              @foreach ($current_teacher as $cur_teacher)
              <div class="col-4 col-lg-3 mb-3 mb-lg-5 currentTeacher teacher">
                <div class="text-center">
                  <img src="{{url('public/images',$cur_teacher->profile_image)}}" alt="teacher">
                  <h5>Ms. {{$cur_teacher->first_name}} {{$cur_teacher->last_name}}<br>Experience {{$cur_teacher->experience}}.</h5>
                  @if (\Auth::guard('tipper')->user())
                    <a class="dedcription-btn" href="{{ route('website.tipping', ['id' => $teacher->id]) }}">
                        <span class="name-descripeion">TIP NOW</span>
                        <div class="btn-icon">
                            <img src="{{ asset('frontend/img/tip-icon.svg') }}" class="img-fluid" alt="">
                        </div>
                    </a>
                  @else
                      <a class="dedcription-btn" href="{{ route('website.tipper.login') }}">
                        <span class="name-descripeion">TIP NOW</span>
                        <div class="btn-icon">
                          <img src="{{ asset('frontend/img/tip-icon.svg') }}" class="img-fluid" alt="">
                      </div>
                      </a>
                  @endif
                </div>
              </div>
              @endforeach
              {{-- <div class="col-4 col-lg-3 mb-3 mb-lg-5 formerTeacher teacher">
                <div class="text-center">
                  <img src="img/Ellipse 18.png" alt="teacher">
                  <h5>Ms. XYZ<br>Experience 10 years.</h5>
                  <a class="dedcription-btn" href="tipping.html">
                    <span class="name-descripeion">TIP NOW</span>
                    <div class="btn-icon">
                      <img src="img/tip-icon.svg" class="img-fluid " alt="">
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-4 col-lg-3 mb-3 mb-lg-5 currentTeacher teacher">
                <div class="text-center">
                  <img src="img/Ellipse 15.png" alt="teacher">
                  <h5>Ms. Abc<br>Experience 10 years.</h5>
                  <a class="dedcription-btn" href="tipping.html">
                    <span class="name-descripeion">TIP NOW</span>
                     <div class="btn-icon">
                      <img src="img/tip-icon.svg" class="img-fluid " alt="">
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-4 col-lg-3 mb-3 mb-lg-5 currentTeacher teacher">
                <div class="text-center">
                  <img src="img/Ellipse 12.png" alt="teacher">
                  <h5>Ms. Abc<br>Experience 10 years.</h5>
                  <a class="dedcription-btn" href="tipping.html">
                    <span class="name-descripeion">TIP NOW</span>
                    <div class="btn-icon">
                      <img src="img/tip-icon.svg" class="img-fluid " alt="">
                    </div>
                  </a>
              </div>
              </div>
              <div class="col-4 col-lg-3 mb-3 mb-lg-5 currentTeacher teacher">
                <div class="text-center">
                  <img src="img/Ellipse 13.png" alt="teacher">
                  <h5>Ms. Abc<br>Experience 10 years.</h5>
                  <a class="dedcription-btn" href="tipping.html">
                    <span class="name-descripeion">TIP NOW</span>
                    <div class="btn-icon">
                      <img src="img/tip-icon.svg" class="img-fluid " alt="">
                    </div>
                  </a>
              </div>
              </div>
              <div class="col-4 col-lg-3 mb-3 mb-lg-5 formerTeacher teacher">
                <div class="text-center">
                  <img src="img/Ellipse 16.png" alt="teacher">
                  <h5>Ms. Abc<br>Experience 10 years.</h5>
                  <a class="dedcription-btn" href="tipping.html">
                    <span class="name-descripeion">TIP NOW</span>
                    <div class="btn-icon">
                      <img src="img/tip-icon.svg" class="img-fluid " alt="">
                    </div>
                  </a>
              </div>
              </div>
              <div class="col-4 col-lg-3 mb-3 mb-lg-5 currentTeacher teacher">
                <div class="text-center">
                  <img src="img/Ellipse 17.png" alt="teacher">
                  <h5>Ms. XYZ<br>Experience 10 years.</h5>
                  <a class="dedcription-btn" href="tipping.html">
                    <span class="name-descripeion">TIP NOW</span>
                    <div class="btn-icon">
                      <img src="img/tip-icon.svg" class="img-fluid " alt="">
                    </div>
                  </a>
                </div>
              </div> --}}
            </div>
        </div>
    </section>
   @endsection
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
          $(".teacher-btn").click(function(){
          $(this).siblings().removeClass("active");
          $(this).addClass("active");
          var targetedItems = $(this).data('target');
          if(targetedItems === 'all'){
             $(".teacher").show();
           } else{
              $(".teacher").hide();
              $("."+targetedItems).show();
          }
        })
    </script>