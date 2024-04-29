
@extends('tipper.includes.masterLayout')

@section('content')
<div class="dash-header">
    <div class="dash-title position-relative ">
        <h3>WELCOME TO USER DASHBOARD</h3>
        <img src="{{ asset('frontend/img/Rectangle 93.svg') }}" class="position-absolute yell-shape0" alt="dashboard">
        <img src="{{ asset('frontend/img/Rectangle 95.png') }}" class="position-absolute yell-shape1" alt="dashboard">
    </div>
    <div class="dash-owner d-flex align-items-center">
        <div class="owner-pic"><img src="{{ asset('frontend/img/dash.svg') }}" alt="dashboard-pic">
        </div>
        <div class="owner-info">
            <h5>Esthera Jackson</h5>
            <p>esthera@simmmple.com</p>
        </div>
    </div>
</div>
                        <h5 class="sayhi"><img src="{{asset('frontend/img/waving-hand-sign_1f44b 1.png')}}" alt="waving-hand-sign">Hey User!</h5>
                        <h4 class="after-greet">Tip History</h4>
                        <section class="table-section">
                          <table>
                            <thead>
                                <tr>
                                  <th>Tip ID</th>
                                  <th>Name</th>
                                  <th>Date</th>
                                  <th>Experience</th>
                                  <th>Frequency</th>
                                  <th>Amount</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <td class="tip-id">#141281</td>
                                    <td>Teacher xyz</td>
                                    <td>Jan 2,2022</td>
                                    <td>10 year experience</td>
                                    <td class="tip-freq onetime"><span class="inprogress"></span><span>One Time</span></td>
                                    <td class="tip-his-amount">$783.22</td>
                                </tr>
                                <tr>
                                    <td class="tip-id">#141281</td>
                                    <td>Teacher xyz</td>
                                    <td>Jan 2,2022</td>
                                    <td>10 year experience</td>
                                    <td class="tip-freq recurring"><span class="success"></span><span>Recurring</span></td>
                                    <td class="tip-his-amount">$783.22</td>
                                </tr>
                                <tr>
                                    <td class="tip-id">#141281</td>
                                    <td>Teacher xyz</td>
                                    <td>Jan 2,2022</td>
                                    <td>10 year experience</td>
                                    <td class="tip-freq recurring"><span class="success"></span><span>Recurring</span></td>
                                    <td class="tip-his-amount">$783.22</td>
                                </tr>
                                <tr>
                                    <td class="tip-id">#141281</td>
                                    <td>Teacher xyz</td>
                                    <td>Jan 2,2022</td>
                                    <td>10 year experience</td>
                                    <td class="tip-freq onetime"><span class="inprogress"></span><span>One Time</span></td>
                                    <td class="tip-his-amount">$783.22</td>
                                </tr>
                                <tr>
                                    <td class="tip-id">#141281</td>
                                    <td>Teacher xyz</td>
                                    <td>Jan 2,2022</td>
                                    <td>10 year experience</td>
                                    <td class="tip-freq recurring"><span class="success"></span><span>Recurring</span></td>
                                    <td class="tip-his-amount">$783.22</td>
                                </tr>
                                <tr>
                                    <td class="tip-id">#141281</td>
                                    <td>Teacher xyz</td>
                                    <td>Jan 2,2022</td>
                                    <td>10 year experience</td>
                                    <td class="tip-freq onetime"><span class="inprogress"></span><span>One Time</span></td>
                                    <td class="tip-his-amount">$783.22</td>
                                </tr>
                              </tbody>
                          </table>
                        </section>
                        <div class="dash-icon position-absolute d-block d-lg-none">
                          <img src="{{asset('frontend/img/menu (1).svg')}}" class="img-fluid " alt="dash-icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-dash-contact-popup" id="user-contact-popup">
            <div class="container">
                <form class="tch-contact-popup profile-form">
                    <div class="popup-title">
                        <h2>User Contact Form</h2>
                        <p class="mb-3">Thank you for reaching out! Please fill out the form below, and we'll get back to you as soon as possible.</p>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3 form-label ">
                            <span>First name</span>
                            <input disabled class="form-control" value="User" type="text" name="your-name">
                        </div>
                        <div class="col-12 col-lg-6 mb-3 form-label">
                            <span>Email</span>
                            <input disabled class="form-control" value="msabcxyz210@gmail.com" type="email" name="mail">
                        </div>
                        <div class="col-12 mb-3 form-label">
                            <span>Role</span>
                            <input disabled class="form-control" value="User" type="text" name="role">
                        </div>
                        <div class="col-12 mb-3 form-label">
                            <span>Message</span>
                            <textarea class="form-control popup-textarea" row="4"></textarea>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="banner" id="popup-thank-tech-btn">
                              <a href="#" class="log-btn butn butn__new" ><span>Send Message</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-close-icon position-absolute close-dash" id="user-popup-btn">
                        <img src="{{asset('frontend/img/close.svg')}}" class="img-fluid" alt="sidebar-close-icon">
                    </div>
                </form>
            </div>
        </div>
        <div class="tch-dash-contact-popup" id="tach-contact-thank">
            <div class="container">
                <div class="tch-contact-popup text-center">
                  <div class="img-container mb-3">
                    <img src="{{asset('frontend/img/image 23.png')}}" class="img-fluid " alt="">
                  </div>
                    <h3 class="mb-4">Thankyou !!</h3>
                    <p class="mb-4">Your Message has been sent We wil contact you in a short while</p>
                    <div class="banner">
                        <a href="#" class="log-btn butn butn__new popup-white" id="tech-popup-thank"><span>Close</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   @endsection