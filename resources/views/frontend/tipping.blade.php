@extends('frontend.layouts.master')
@section('title','Tip4Teach || Tipping')
@section('main-content')
    <!--tipping-->
    <section class="tipping">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                    <div class="teacher-img">
                        <img src="{{url('public/images',$teachers->profile_image)}}" class="img-fluid " alt="tipping-teacher">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="tipping-info">
                        <div class="section-title mb-4">
                          <h2>{{$teachers->first_name}} {{$teachers->last_name}}</h2>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </div>
                        <div class="tipping-details row profile-form shadow-none px-0">
                            <h3 class="mb-2">Frequency</h3>
                            <div class="col-5 col-md-4 mb-4 d-flex align-items-center gap-2 ">
                              <input type="radio" id="OneTime" name="frequency" value="One Time">
                              <label for="OneTime">One Time</label>
                            </div>
                            <div class="col-5 col-md-4 mb-4 d-flex align-items-center gap-2 ">
                              <input type="radio" id="Recurring" name="frequency" value="Recurring">
                              <label for="Recurring">Recurring</label>
                            </div>
                            <h3 class="mb-2">Visibility</h3>
                            <div class="col-5 col-md-4 mb-4 d-flex align-items-center gap-2 ">
                              <input type="radio" id="anonymous" name="frequency" value="One Time">
                              <label for="anonymous">Anonymous</label>
                            </div>
                            <div class="col-5 col-md-5 mb-4 d-flex align-items-center gap-2">
                              <input type="radio" id="nonanonymous" name="frequency" value="Recurring">
                              <label for="nonanonymous">Non Anonymous</label>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center justify-content-between "><h3 class="mb-2">Message</h3> <span class="text-14">Optional</span></div>
                                <textarea name="Note" rows="3" placeholder="Note for Teacher"></textarea>
                            </div>
                            <h3 class="mb-2">Tip Amount</h3>
                            <div class="col-6 mb-3">
                              <input type="number" class="form-control">
                            </div>
                            <div class="col-6 mb-3">
                              <div class="banner">
                                <a href="{{route('website.checkout')}}" class="log-btn butn butn__new"><span>TIP NOW</span></a>
                              </div>
                            </div>
                            <h3 class="mb-2">Payment Method</h3>
                            <div class="payments">
                                <a href="#"><img src="{{asset('frontend/img/icons8-mastercard-48 3.svg')}}" alt="mastercard"></a>
                                <a href="#"><img src="{{asset('frontend/img/icons8-visa-48 3.svg')}}" alt="visa"></a>
                                <a href="#"><img src="{{asset('frontend/img/icons8-paypal-48 4.svg')}}" alt="paypal"></a>
                                <a href="#"><img src="{{asset('frontend/img/icons8-stripe-48 3.svg')}}" alt="stripe"></a>
                                <a href="#"><img src="{{asset('frontend/img/icons8-apple-pay-64 4.svg')}}" alt="apple-pay"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  @endsection