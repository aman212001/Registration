<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');

}



?>





<html lang="en">
<head>
  <title>Medik</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='icon' href="assests/images/favicon.png" type='image/jpeg'>    <!--Favicon-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assests/css/style.css">     <!--External CSS-->
</head>
<body>


  <!--Header-->
  <nav class="nav navbar-expand-sm fixed-top">
    <div class="container-fluid">
      <p class="navbar-brand" href="#">
          <i class="fa fa-phone nav-icon" aria-hidden="true"></i> &nbsp; (00) 000 111 222
      </p>

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <div class="vertical-line"></div>
        <li class="nav-item">
            <i class="fa fa-envelope nav-icon" aria-hidden="true"></i>&nbsp; &nbsp;  info@somedomain.com
        </li>
      </ul>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item font-icon">
            <a class="nav-icon" href="https://twitter.com/i/flow/login" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          </li>

          <li class="nav-item">
              <a class="nav-icon" href="https://facebook.com" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          </li>

          <li class="nav-item">
            <a class="nav-icon" href="https://accounts.google.com/" target='blank'><i class="fa fa-google-plus" aria-hidden="true"></i></a>
          </li>

          <li class="nav-item font-icon">
            <a class="nav-icon" href="https://www.instagram.com/accounts/login/" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item font-icon">
            <a class="nav-icon" href="logout.php" target="blank"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
          </li>

        </ul>
      </div>
  </nav>
  <!--Header Ends-->
  <div style="margin-top:50px;"></div>
  <!--Second Navigation Bar-->
  <nav class="nav_2 navbar-expand-sm" style="min-height: 50px;">
    <div class="container-fluid">
      <a class="navbar-brand1" href="#"><img id='logo' src="assests/images/logo.png" alt='logo'></a>   <!--Logo-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav center-nav">
          <li class="nav-item dropdown">
          <a id="home" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Home</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Home One</a></li>
            <li><a class="dropdown-item" href="#">Home Two</a></li>
            <li><a class="dropdown-item" href="#">Home Three</a></li>
          </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">About</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Link</a></li>
              <li><a class="dropdown-item" href="#">Another link</a></li>
              <li><a class="dropdown-item" href="#">A third link</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Collection</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Link</a></li>
              <li><a class="dropdown-item" href="#">Another link</a></li>
              <li><a class="dropdown-item" href="#">A third link</a></li>
            </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Shop</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Link</a></li>
                <li><a class="dropdown-item" href="#">Another link</a></li>
                <li><a class="dropdown-item" href="#">A third link</a></li>
              </ul>
            </li> 
            <li class="nav-item dropdown" style="margin-right: 200px;">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Contact Us</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Link</a></li>
                <li><a class="dropdown-item" href="#">Another link</a></li>
                <li><a class="dropdown-item" href="#">A third link</a></li>
              </ul>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-social">
            <a class='nav-link'href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
          </li>
          <li class="nav-social">
            <a class='nav-link' href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
          </li>
          <li class="nav-social">
            <a class='nav-link' href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div style="margin-top:10px;"></div>
<!--Banner Part-->
 <div id="banner">
  <img id="banner_image" src="assests/images/banner.jpg">
  <div class="banner-content" align = 'center'>
    <h4 style="font-size:25px;font-weight: 400;">
      <span style="font-size:40px;font-weight: 400;">Contact Us</span>
    </h4>
    <span><a href="#home">Home</a> &nbsp / &nbsp <a href="#">Contact us</a> </span>  
  </div>
</div> 
<!--Map-->
<div class="map" style="margin-top: 2px;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.8609957545696!2d73.17416281420986!3d18.893246862602687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e6af4a9b7a47%3A0x30dbd3b0d3c14416!2sPillai%20HOC%20College%20Of%20Engineering%20%26%20Technology!5e0!3m2!1sen!2sin!4v1657047195772!5m2!1sen!2sin" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
</div>

<!--Heading Left/Right-->
<div class="container" style="margin-top: 30px;">
  <div class="row">
    <div class="col-xs-5" style="margin-left: 30px;" align="center">
      <h2>
        <b>Contact Info</b><br>
      </h2>
      <p style="color: grey" >
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ipsum nisi quod reiciendis placeat esse accusantium perspiciatis facere! Earum, tempore?
      </p>
      <div class="row">
        <div class="col-xs-5 contact-box">
          <i class="fa fa-phone-square contact-icon" aria-hidden="true"></i>
          <h4 style="font-weight: 600;font-size: 15px;">TALK TO US</h4>
          <p class="contact-no">
            Toll-Free: 0803 - 080 - 3081 - 0803 - 080 - 3081
          </p>
        </div>
        <div class="col-xs-5 contact-box">
          <i class="fa fa-envelope contact-icon" aria-hidden="true"></i>
          <h4 style="font-weight: 600;font-size: 15px;">CONTACT US</h4>
          <p class="contact-no">
            domain@example.com support@example.com
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5 contact-box">
          <i class="fa fa-map-marker contact-icon" aria-hidden="true"></i>
          <h4 style="font-weight: 600;font-size: 15px;">OUR LOCATION</h4>
          <p class="contact-no">
            625 @ David Blake Road, Adventureland,USA
          </p>
        </div>
        <div class="col-xs-5 contact-box">
          <i class="fa fa-clock-o contact-icon" aria-hidden="true"></i>
          <h4 style="font-weight: 600;font-size: 15px;">OPENING HOURS</h4>
          <p class="contact-no">
            Mon-Sat 9 am to 8 pm   <br>Sun-10 am to 3 pm
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-1"></div>
    <div class="col-xs-5" style="background-color: whitesmoke;border-radius: 5px;" align="center">
      <h2>
        <b>Enquire Now</b><br>
      </h2>
      <p style="color: grey" >
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ipsum nisi quod reiciendis placeat esse accusantium perspiciatis facere! Earum, tempore?
      </p>
      <form style="color:grey;padding:30px">
        <input type="text" name="fname" placeholder="Name" autofocus required/>
        <span>
          <input type="text" id="email" placeholder="Email" name="email" required>
          <input type="text" id="fname" placeholder="Subject" name="phone" required>
          <textarea type="text" id="fname" placeholder="Message" name="phone" required></textarea>
        </span>
        <button class="submit-button">
          Send Enquiry
        </button>
      </form>
    </div>
    
  </div>
</div>
<div style="margin-top:15px;"></div>

<!-- <div class="container text-center mb-5">
        <a href="logout.php" class="btn btn-primary mt-5">Logout</a>
    </div> -->




<!--Footer-->
<div class="footer">
      <div class="footer-content">
        <div class="footer-section address">
          <img src="assests/images/logo_bgless.png" alt='logo'>
          <br><br>
          <div>
            <i class="fa fa-home footer-icon" aria-hidden="true"></i>
            NO: 58A,East Madison Street,<br>Baltimore,MD USA 4508<br><br>
            <i class="fa fa-phone footer-icon" aria-hidden="true"></i>
            &nbsp;+91 12345678<br><br>
            <i class="fa fa-envelope footer-icon" aria-hidden="true"></i>
            &nbsp;support@somemail.com<br><br>
            <a href="https://twitter.com/i/flow/login" target="blank"><i class="fa fa-twitter-square link-footer" aria-hidden="true"></i></a>
            <a href="https://facebook.com" target="blank"><i class="fa fa-facebook-square link-footer" aria-hidden="true"></i></a>
            <a href="https://accounts.google.com/" target="blank"><i class="fa fa-google-plus-square link-footer" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/accounts/login/" target="blank"><i class="fa fa-instagram link-footer" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/" target="blank"><i class="fa fa-linkedin-square link-footer" aria-hidden="true"></i></a>
          </div>
        </div>

        <div class="footer-section help">
          <h4 style="height: 70px; padding-top: 20px; color: white;"><b>Help</b></h4>
          <p>Scissors</p>
          <p>Glucometer</p>
          <p>Disposable Gloves</p>
          <p>Cleaning Scissors</p>
          <p>Smart Mask</p>
        </div>
        <div class="footer-section support">
          <h4 style="height: 70px; padding-top: 20px; color: white;"><b>Support</b></h4>
          <p>Plaster machine</p>
          <p>Pedometer</p>
          <p>Cleaning Scissors</p>
          <p>Smart Mask</p>
          <p>Pedometer</p>
        </div>
        <div class="footer-section information">
          <h4 style="height: 70px; padding-top: 20px; color: white;"><b>information</b></h4>
          <p>Scissors</p>
          <p>Glucometer</p>
          <p>Disposable Gloves</p>
          <p>Cleaning Scissors</p>
          <p>Smart Mask</p>
        </div>
      </div>
      
      <div class="footer-bottom">
        &copy; Copyright Powered by Aman Sharma
      </div>
</div>

</body>
</html>
