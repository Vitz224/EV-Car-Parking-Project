<?php
session_start();
include("connect2.php");
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname']; 
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $u_message = $_POST['u_message']; 

    if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($phone) && !empty($u_message) ) {
        
      $query = "INSERT INTO form (firstname, lastname, email, phone, u_message) VALUES ('$firstName', '$lastName', '$email', '$phone', '$u_message')";
      $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script type='text/javascript'>alert('Your Message Has Been Successfully Received, Thank You For Your Valuable Time!')</script>";
        } else {
            echo "<script type='text/javascript'>alert('Failed to Send. Please try again later.')</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Please Try Again Later.')</script>";
    }
}
?>

<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EV GO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Noto+Serif+Sinhala:wght@700&family=Roboto:wght@300;400;500&family=Stick+No+Bills:wght@600&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/contactus.css">
    <!-- Fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  
  <link href="assets/css/cruiser.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><small><a href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ifkv=ATuJsjxrcHvnewbUQOcc24vf__pScMn3xmncbLpPHCjIcel5OWql8u58FwMkoiKvDFNfF0muV-2vXA&rip=1&sacu=1&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S1124296650%3A1709536837593875&theme=glif">EvCharger@Locator.com</small></a>
      </div>
      <div class="cta d-none d-md-block">
        <a href="Login.php" class="scrollto">Log In</a>
        <a href="SignUp.php" class="scrollto">Sign up/Register</a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">EV GO</a></h1>
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About Us</a></li>
          <li><a class="nav-link scrollto" href="services.html">Services</a></li>
          <li><a class="nav-link scrollto" href="Contactus.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
   
<section class = "contact-section">
      <div class = "contact-bg">
        <h3>Get in Touch with Us</h3>
        <h2>contact us</h2>
        <div class = "line">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <p class = "text">Charging is the action of moving a vehicle into a place in a charging station or by the side of the road where it can be left.</p>
      </div>


      <div class = "contact-body">
        <div class = "contact-info">
          <div>
            <span><i class = "fas fa-mobile-alt"></i></span>
            <span>Phone No.</span>
            <span class = "text"> (+94) (011)2573548</span>
          </div>
          <div>
            <span><i class = "fas fa-envelope-open"></i></span>
            <span>E-mail</span>
            <span class = "text">EvCharger@gmail.com</span>
          </div>
          <div>
            <span><i class = "fas fa-map-marker-alt"></i></span>
            <span>Address</span>
            <span class = "text">400 Galle Road, 03 Colombo,Sri Lanka</span>
          </div>
          <div>
            <span><i class = "fas fa-clock"></i></span>
            <span>We Are Online</span>
            <span class = "text">Monday - Sunday (24 Hours)</span>
          </div>
        </div>

        <div class = "contact-form">
        <form action="Contactus.php" method="post" name="contactForm">
            <div>
              <input type = "text" class = "form-control" placeholder="First Name" name="firstname" required>
              <input type = "text" class = "form-control" placeholder="Last Name" name="lastname">
            </div>
            <div>
              <input type = "email" class = "form-control" placeholder="E-mail" name="email" required>
              <input type = "text" class = "form-control" placeholder="Phone" name="phone">
            </div>
            <textarea rows="5" placeholder="Message Here" class="form-control" name="u_message" required></textarea>
            <input type="submit" value="Send Message" class="send-btn">

          </form>

          <div>
            <img src = "img/Contact.webp" alt = "">
          </div>
        </div>
      </div>

      <div class = "map">
        <iframe src="https://maps.google.com/maps?q=Colombo%2003%20Sri%20Lanka&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 1460px; height: 450px;"></iframe><style>.mapouter{position:relative;height:450px;width:1080px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style>
      </div>
    </section>

    

  <!-- ======= Footer ======= -->
  
  <footer class="text-center text-white" style="background-color: #f1f1f1;">

    <div class="container pt-4"> <center>
     
      <section class="mb-4">
     
        <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
        
          <a class="btn btn-outline-light btn-floating m-1" role="button"><img src="assets/img/fb.png" width="25" height="25" alt=""> <i class="fab fa-facebook-f"></i></a>
   
          <a class="btn btn-outline-light btn-floating m-1" role="button"><img src="assets/img/twitter.png" width="25" height="25" alt=""/>
          <i class="fab fa-instagram"></i></a>
      
          <a class="btn btn-outline-light btn-floating m-1" role="button"><img src="assets/img/tiktok.png" width="25" height="25" alt=""/>
          <i class="fab fa-tiktok"></i></a>
      
        </div> 
      </section>
     
    </div>
    
  
  
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-dark" href="#">cruiserpark.com</a> </center>
    </div>
   
  </footer>
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<form action="Contactus.html" method="post">


</body>

</html>