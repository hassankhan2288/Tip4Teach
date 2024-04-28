
{{-- @extends('frontend.teachers.teacher') --}}
@extends('teachers.includes.masterLayout')

@section('content')

<h3>list of Recieved Tips</h3>
<section class="table-section">
  <table>
    <thead>
        <tr>
          <th>Tip ID</th>
          <th>Name</th>
          <th>Date</th>
          <th>Message</th>
          <th>Payment Status</th>
          <th>Amount</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td class="tip-id">#141281</td>
            <td>David</td>
            <td>Jan 2,2022</td>
            <td>Thank you</td>
            <td class="tip-freq"><span class="inprogress"></span><span>Pending</span></td>
            <td class="tip-his-amount">$783.22</td>
        </tr>
        <tr>
            <td class="tip-id">#141281</td>
            <td>Kevin Martin</td>
            <td>Jan 2,2022</td>
            <td>Thank you</td>
            <td class="tip-freq"><span class="success"></span><span>Paid</span></td>
            <td class="tip-his-amount">$783.22</td>
        </tr>
        <tr>
            <td class="tip-id">#141281</td>
            <td>Anonymous</td>
            <td>Jan 2,2022</td>
            <td>-</td>
            <td class="tip-freq"><span class="processing"></span><span>Processing</span></td>
            <td class="tip-his-amount">$783.22</td>
        </tr>
        <tr>
            <td class="tip-id">#141281</td>
            <td>Alesia jake</td>
            <td>Jan 2,2022</td>
            <td>-</td>
            <td class="tip-freq"><span class="success"></span><span>Paid</span></td>
            <td class="tip-his-amount">$783.22</td>
        </tr>
        <tr>
            <td class="tip-id">#141281</td>
            <td>Anonymous</td>
            <td>Jan 2,2022</td>
            <td>Thank you</td>
            <td class="tip-freq"><span class="success"></span><span>Paid</span></td>
            <td class="tip-his-amount">$783.22</td>
        </tr>
        <tr>
            <td class="tip-id">#141281</td>
            <td>Alesia jake</td>
            <td>Jan 2,2022</td>
            <td>-</td>
            <td class="tip-freq"><span class="inprogress"></span><span>Pending</span></td>
            <td class="tip-his-amount">$783.22</td>
        </tr>
      </tbody>
  </table>
</section>

<div class="dash-icon position-absolute d-block d-lg-none">
    <img src="img/menu (1).svg" class="img-fluid " alt="dash-icon">
</div>





























































    {{-- <!--teacher-dashboard-->
    <section class="tch-dash">

        <div class="col-12 col-lg-9">
            <div class="dashboard teacher-dash">
                
                <h3>list of Recieved Tips</h3>
                <section class="table-section">
                  <table>
                    <thead>
                        <tr>
                          <th>Tip ID</th>
                          <th>Name</th>
                          <th>Date</th>
                          <th>Message</th>
                          <th>Payment Status</th>
                          <th>Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td class="tip-id">#141281</td>
                            <td>David</td>
                            <td>Jan 2,2022</td>
                            <td>Thank you</td>
                            <td class="tip-freq"><span class="inprogress"></span><span>Pending</span></td>
                            <td class="tip-his-amount">$783.22</td>
                        </tr>
                        <tr>
                            <td class="tip-id">#141281</td>
                            <td>Kevin Martin</td>
                            <td>Jan 2,2022</td>
                            <td>Thank you</td>
                            <td class="tip-freq"><span class="success"></span><span>Paid</span></td>
                            <td class="tip-his-amount">$783.22</td>
                        </tr>
                        <tr>
                            <td class="tip-id">#141281</td>
                            <td>Anonymous</td>
                            <td>Jan 2,2022</td>
                            <td>-</td>
                            <td class="tip-freq"><span class="processing"></span><span>Processing</span></td>
                            <td class="tip-his-amount">$783.22</td>
                        </tr>
                        <tr>
                            <td class="tip-id">#141281</td>
                            <td>Alesia jake</td>
                            <td>Jan 2,2022</td>
                            <td>-</td>
                            <td class="tip-freq"><span class="success"></span><span>Paid</span></td>
                            <td class="tip-his-amount">$783.22</td>
                        </tr>
                        <tr>
                            <td class="tip-id">#141281</td>
                            <td>Anonymous</td>
                            <td>Jan 2,2022</td>
                            <td>Thank you</td>
                            <td class="tip-freq"><span class="success"></span><span>Paid</span></td>
                            <td class="tip-his-amount">$783.22</td>
                        </tr>
                        <tr>
                            <td class="tip-id">#141281</td>
                            <td>Alesia jake</td>
                            <td>Jan 2,2022</td>
                            <td>-</td>
                            <td class="tip-freq"><span class="inprogress"></span><span>Pending</span></td>
                            <td class="tip-his-amount">$783.22</td>
                        </tr>
                      </tbody>
                  </table>
                </section>
                <div class="dash-icon position-absolute d-block d-lg-none">
                  <img src="{{asset('frontend/img/menu (1).svg ')}}" class="img-fluid " alt="dash-icon">
                </div>
            </div>
        </div>
        
        <div class="tch-dash-contact-popup" id="tach-contact-popup">
          <div class="container">
              <form class="tch-contact-popup profile-form">
                  <div class="popup-title">
                      <h2>Teacher Contact Form</h2>
                      <p class="mb-3">Thank you for reaching out! Please fill out the form below, and we'll get back to you as soon as possible.</p>
                  </div>
                  <div class="row">
                      <div class="col-12 col-lg-6 mb-3 form-label ">
                          <span>First name</span>
                          <input disabled class="form-control" value="Sarah" type="text" name="your-name">
                      </div>
                      <div class="col-12 col-lg-6 mb-3 form-label">
                          <span>Email</span>
                          <input disabled class="form-control" value="teacher@gmail.com" type="email" name="mail">
                      </div>
                      <div class="col-12 mb-3 form-label">
                          <span>Role</span>
                          <input disabled class="form-control" value="teacher" type="text" name="role">
                      </div>
                      <div class="col-12 mb-3 form-label">
                          <span>Message</span>
                          <textarea class="form-control popup-textarea" row="4"></textarea>
                      </div>
                      <div class="col-12 mt-3">
                          <div class="banner" >
                            <a href="#" class="log-btn butn butn__new" id="popup-thank-tech-btn"><span>Send Message</span></a>
                          </div>
                      </div>
                  </div>
                  <div class="sidebar-close-icon position-absolute close-dash" id="tech-popup-btn">
                      <img src="img/close.svg" class="img-fluid" alt="sidebar-close-icon">
                  </div>
              </form>
          </div>
      </div>
      <div class="tch-dash-contact-popup" id="tach-contact-thank">
        <div class="container">
            <div class="tch-contact-popup text-center">
                <div class="img-container mb-3">
                    <img src="img/image 23.png" class="img-fluid " alt="">
                </div>
                <h3 class="mb-4">Thankyou !!</h3>
                <p class="mb-4">Your Message has been sent We wil contact you in a short while</p>
                <div class="banner">
                    <a href="#" class="log-btn butn butn__new popup-white" id="tech-popup-thank"><span>Close</span></a>
                </div>
            </div>
        </div>
    </div>
    </section> --}}
@endsection