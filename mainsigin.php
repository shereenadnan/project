<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <title>Login & signup form | codingNapal</title>
    <meta charset="utf-8">
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta  name="descriptison">
  <meta  name="keywords">
   <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Login & Signup Form | CodingNepal</title> -->
    <link rel="stylesheet" href="mainsigin.css">
    <link rel="stylesheet" type="text/css" href="mainstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
     <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> +1 5589 55488 55
        <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM</span>
      </div>
      <div class="languages">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div>
    </div>
  </div>
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="main.php">Restaurantly</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="main.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#specials">Specials</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="book-a-table text-center"><a href="#book-a-table">Book a table</a></li>
          <li class="active"><a href="mainsigin.html">Sign-in</a>  </li>
        <!--<li class="book-a-table text-center"><a href="resevationmain.html">Reservations</a></li>-->
        </ul>
      </nav>
 </div>
  </header>
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        
        </div>
        <h1 style="margin-top: 19%;margin-right:50%">Welcome to <span>Restaurantly</span></h1>
          <h2  style="margin-top: -35%;margin-left: 50%"><div class="wrapper"style="margin-right:16%;width: 200%;margin-top: 8%">
      <div class="title-text">
        <div class="title login" style="color: #cda45e">
Login Form</div>
<div class="title signup"style="color: #cda45e">
Signup Form</div>
</div>
<div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"style="background: -webkit-linear-gradient(left,#1a1814,#cda45e);">
</div>
</div>
<div class="form-inner">
          <form action="#" class="login">
            <div class="field"style="background:initial;">
              <input type="text" placeholder="Email Address" required>
            </div>
<div class="field">
              <input type="password" placeholder="Password" required>
            </div>
<div class="pass-link">
<a href="#">Forgot password?</a></div>
<div class="field btn">
              <div class="btn-layer"style=" background: -webkit-linear-gradient(left,#1a1814,#cda45e);">
</div>
<input type="submit" value="Login">
            </div>
<div class="signup-link">
Not a member? <a href="">Signup now</a></div>
</form>
<form action="#" class="signup">
            <div class="field">
              <input type="text" placeholder="Email Address" required>
            </div>
<div class="field">
              <input type="password" placeholder="Password" required>
            </div>
<div class="field">
              <input type="password" placeholder="Confirm password" required>
            </div>
<div class="field btn">
              <div class="btn-layer"style=" background: -webkit-linear-gradient(left,#1a1814,#cda45e);">
</div>
<input type="submit" value="Signup">
            </div>
</form>
</div>
</div>
</div>
<script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>
  </section>
</h2>
        <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
     
        </div>

      </div>
    </div>
  
    
  </body>
</html>