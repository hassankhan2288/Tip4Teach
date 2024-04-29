@extends('frontend.layouts.master')
@section('title','Tip4Teach || Checkout')
@section('main-content')
    <!--checkout-section-->
    <section class="check-out">
        <div class="container">
            <div class="row d-lg-flex justify-content-between ">
                <div class="col-12 col-lg-6">
                    <form class="checkout-form profile-form row shadow-none ">
                        <div class="checkout-header mb-3 section-title d-flex align-items-center justify-content-between ">
                            <h2>Sign up</h2>
                            <a href="tipper-signin.html">Login</a>
                        </div>
                        <div class="col-12 mb-3">
                          <input type="text" name="username" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-12 mb-3">
                          <input type="email" name="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="col-12 mb-3">
                          <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="col-12 mb-3 payments mt-5">
                            <h3>Payment Method</h3>
                            <button class="active"><img src="{{asset('frontend/img/icons8-mastercard-48 3.svg')}}" alt="mastercard"></button>
                            <button ><img src="{{asset('frontend/img/icons8-visa-48 3.svg')}}" alt="visa"></button>
                            <button ><img src="{{asset('frontend/img/icons8-paypal-48 4.svg')}}" alt="paypal"></button>
                            <button ><img src="{{asset('frontend/img/icons8-stripe-48 3.svg')}}" alt="stripe"></button>
                            <button ><img src="{{asset('frontend/img/icons8-apple-pay-64 4.svg')}}" alt="apple-pay"></button>
                        </div>
                        <div class="col-12 mb-3 card-name">
                          <h3>Cardholder Name</h3>
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                          <h3>Cardholder Number</h3>
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-3 mb-3 align-self-end ">
                          <h3>Date</h3>
                          <input type="date" class="date-input form-control">
                        </div>
                        <div class="col-12 col-md-3 mb-3">
                          <h3>CVC <span><img src="{{asset('frontend/img/icons8-information-50 1.svg')}}" class="img-fluid cvc-img" alt="icons8"></span></h3>
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-12 mb-3">
                            <span><img src="{{asset('frontend/img/icons8-information-50 1.svg')}}" class="me-1" alt="icons8"></span>
                            <span class="inform">Credit Card payments may take up to 24h to be processed</span>
                        </div>
                        <div class="col-12 mb-3 d-flex align-items-center gap-2 ">
                          <input class="form-check-input" type="checkbox" value="" id="savecheck" checked>
                          <label class="form-check-label save-payment" for="savecheck">
                            Save my payment details for future purchases
                          </label>
                        </div>
                        <a href="tipping.html">
                            <span><img src="{{asset('frontend/img/icons8-back-48 1.svg')}}" class="me-1" alt="icons8"></span>
                            <span class="return">Return to add funds</span>
                        </a>
                      </form>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="tip-summery">
                    <h1>Tip Summary</h1>
                    <div class="blnc-calc">
                      <div class="d-flex justify-content-between">
                        <span class="text-14">Balanced amount:</span>
                        <span>$100</span>
                      </div>
                      <div class="d-flex align-items-center justify-content-between">
                        <span class="text-14">VAT<br> (21%):</span>
                        <span>$21</span>
                      </div>
                    </div>
                    <div>
                      <span class="d-flex align-items-center justify-content-between">
                        <span class="tip-total">Total <br><span class="text-14">(Incl. VAT)</span> </span>
                      <span class="total-tip-num">$121</span>
                      </span>
                    </div>
                    <div class="after-topup d-flex justify-content-between ">
                      <div>
                        <p class="text-14">Account after top up</p>
                        <span>Lorem Ipsum</span>
                      </div>
                      <div>$100</div>
                    </div>
                    <div class="banner" id="popup-thank-tech-btn">
                      <a href="#" class="log-btn butn butn__new w-100 "><span>confirm your tip</span></a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="tch-dash-contact-popup" id="tach-contact-thank">
          <div class="container">
              <div class="tch-contact-popup text-center">
                <div class="img-container mb-3">
                  <img src="{{asset('frontend/img/image 19.png')}}" class="img-fluid " alt="">
                </div>
                  <h3 class="mb-4">Thankyou !!</h3>
                  <p class="mb-4">Your Tip will be transferred to Teacher ASAP</p>
                  <div class="banner">
                      <a href="#" class="log-btn butn butn__new popup-white" id="tech-popup-thank"><span>Close</span></a>
                  </div>
              </div>
          </div>
      </div>
    </section>
@endsection