<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/tip4teach_-_JPEG-01-removebg-preview 7.png" type="image/icon type">
    <title>Tip4Teach</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--tip history-->
    <section class="tch-dash">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-3" id="sidebar">
                    <div class="sidebar">
                        <img src="img/tip4teach_-_JPEG-01-removebg-preview 21.svg" class="img-fluid sidbar-logo" alt="tip4teach_">
                        <ul>
                            <li><a href="user-dashboard.html"><span class="sidebar-img home-icon"><img src="img/home.svg" alt="home"></span><span>My Dashboard</span></a></li>
                            <li><a href="tiphistory.html" class="active"><span class="sidebar-img"><img src="img/chart.svg" alt="home"></span><span>Tip History</span></a></li>
                            <li><a href="user-view-profile02.html"><span class="sidebar-img"><img src="img/withdraw.svg" alt="home"></span><span>View Profile</span></a></li>
                            <li><a href="user-edit-account02.html"><span class="sidebar-img"><img src="img/key.svg" alt="home"></span><span>Edit Profile</span></a></li>
                            <li><a href="password-reset-user.html"><span class="sidebar-img"><img src="img/key.svg" alt="home"></span><span>Change Password</span></a></li>
                            <li><a href="ongoing-tips.html"><span class="sidebar-img"><img src="img/file.svg" alt="home"></span><span>List of Ongoing Tips</span></a></li>
                            <li><a href="user-dashboard.html"><span class="sidebar-img"><img src="img/notif.svg" alt="home"></span><span>Notification</span></a></li>
                            <li><a href="tipper-signin.html"><span class="sidebar-img"><img src="img/logout.svg" alt="home"></span><span>Log out</span></a></li>
                        </ul>
                        <div class="contact-box position-relative ">
                            <span class="trouble-icon"><img src="img/Vector.svg" alt="trouble"></span>
                            <span class="trouble-text">Having Trouble?</span>
                            <a href="#" id="contact-user-popup-btn">Contact Us</a>
                            <img src="img/Rectangle 93 (1).svg" class="position-absolute yell-shape" alt="shape">
                        </div>
                        <div class="sidebar-close-btn position-absolute d-block d-lg-none">
                          <img src="img/close.svg" class="img-fluid" alt="sidebar-close-icon">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="dashboard user-dash">
                        <div class="dash-header">
                            <div class="dash-title position-relative ">
                                <h3>WELCOME TO USER DASHBOARD</h3>
                                <img src="img/Rectangle 93.svg" class="position-absolute yell-shape0" alt="dashboard">
                                <img src="img/Rectangle 95.png" class="position-absolute yell-shape1" alt="dashboard">
                            </div>
                            <div class="dash-owner d-flex align-items-center">
                                <div class="owner-pic"><img src="img/dash.svg" alt="dashboard-pic"></div>
                                <div class="owner-info">
                                    <h5>Esthera Jackson</h5>
                                    <p>esthera@simmmple.com</p>
                                </div>
                            </div>
                        </div>
                        <h5 class="sayhi"><img src="img/waving-hand-sign_1f44b 1.png" alt="waving-hand-sign">Hey User!</h5>
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
                          <img src="img/menu (1).svg" class="img-fluid " alt="dash-icon">
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
    </section>
    <!--footer-->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <h2>Tip4Teach</h2>
            <h4>Follow Us on</h4>
            <div class="socials">
              <a href="#"><img src="img/icons8-facebook-50.png" alt="facebook"></a>
              <a href="#"><img src="img/icons8-twitter-50.png" alt="twitter"></a>
              <a href="#"><img src="img/icons8-linkedin-50.png" alt="linkedin"></a>
              <a href="#"><img src="img/icons8-youtube-50.png" alt="youtube"></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <h3>Useful Links</h3>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="index.html">Tip Now</a></li>
              <li><a href="index.html">About Us</a></li>
              <li><a href="index.html">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-lg-5 col-md-12 col-12">
            <h3>contact@tip4teach.com</h3>
            <h4>Secure payments by</h4>
            <div class="payments">
              <a href="#"><img src="img/icons8-mastercard-50 (1).png" alt="mastercard"></a>
              <a href="#"><img src="img/icons8-visa-50 (1).png" alt="visa"></a>
              <a href="#"><img src="img/icons8-paypal-50 (1).png" alt="paypal"></a>
              <a href="#"><img src="img/icons8-stripe-50 (1).png" alt="stripe"></a>
              <a href="#"><img src="img/icons8-apple-pay-50 (1).png" alt="apple-pay"></a>
            </div>
          </div>
        </div>
        <div class="copyright text-center">All Rights Reserved <img src="img/icons8-copyright-50 2.png" alt="copyright">2024</div>
      </div>
    </footer>
    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!--Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <!--custom js-->
    <script src="js/script.js"></script>
    <!--circle progress-->
</body>
</html>