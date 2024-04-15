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
    <!--header-->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
          <a class="navbar-brand" href="index.html"><img src="img/tip4teach_-_JPEG-01-removebg-preview 7.png" alt=""></a>
          <button class="navbar-toggler" type="button" id="sm-nav-btn">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
          <a class="navbar-brand" href="index.html"><img class="img-fluid sm-nav-logo d-lg-none" src="img/tip4teach_-_JPEG-01-removebg-preview 7.png" alt=""></a>
            <ul class="navbar-nav page-nav align-items-center mx-auto mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="tip.html">Tip Now</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
            </ul>
            <div class="navbar-close-btn position-absolute d-block d-lg-none">
              <img src="img/close.svg" class="img-fluid" alt=" ">
            </div>
            <div class="banner">
              <a href="role.html" class='log-btn butn butn__new'><span>LOGIN/ SIGNUP</span></a>
            </div>
        </div>
          </div>
      </nav>
    </header>
    <!--reset password-->
   <section class="forget-pass">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-4 col-12 d-lg-flex align-items-center justify-content-center ">
                <div class="signup-img">
                    <img src="img/Green rec (5).png" class="img-fluid" alt="signin">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <form class="profile-form">
                  <div class="section-title mb-4">
                    <h2>Change Password</h2>
                    <p>Enter your new password for your account</p>
                  </div>
                    <div class="row">
                      <div class="col-12 mb-4">
                        <span class="form-label ">New Password</span>
                        <input type="password" class="form-control" name="password">
                      </div>
                      <div class="col-12 mb-4">
                        <span class="form-label ">Confirm Password</span>
                        <input type="password" class="form-control" name="password">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="banner w-100 text-center ">
                        <a href="#" class="log-btn butn butn__new" id="popup-thank-tech-btn"><span>Change Password</span></a>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
    <!--popup-->
    <div class="tch-dash-contact-popup" id="tach-contact-thank">
      <div class="container">
          <div class="tch-contact-popup text-center">
            <div class="img-container mb-3">
              <img src="img/image 23.png" class="img-fluid " alt="">
            </div>
              <h3 class="mb-4">Thankyou !!</h3>
              <p class="mb-4">Your password has been updated</p>
              <div class="banner">
                  <a href="user-dashboard.html" class="log-btn butn butn__new"><span>Back to dashboard</span></a>
              </div>
          </div>
      </div>
   </div>
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
          <div class="col-lg-4 col-md-6 col-12">
            <h3>Useful Links</h3>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="index.html">Tip Now</a></li>
              <li><a href="index.html">About Us</a></li>
              <li><a href="index.html">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-12 col-12">
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
    <script>
          $("#passBtn").click(function(e){
            e.preventDefault();
            $("#passPopup").addClass("open-popup");
         })
      
    </script>
</body>
</html>