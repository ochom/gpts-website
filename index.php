<?php
$DEBUG = false;
if ($DEBUG) {
  require 'scssphp/scss.inc.php';
  $scss = new scssc();
  $scss->setImportPaths("css/");
  $content = $scss->compile('@import "web.scss"');
  file_put_contents('css/index.scss.css', $content);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Great places to school</title>

  <!-- icons -->
  <!-- end of Twitter Card-->
  <link href="images/logo.png" rel="icon" type="image/x-icon" />
  <link href="images/logo.png" rel="shortcut icon" type="image/x-icon" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="css/index.scss.css">

  <!--Google fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Space+Grotesk&display=swap" rel="stylesheet">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/sal.css">

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous" async></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" async></script>
  <script src="https://use.fontawesome.com/f36a81ef56.js" async></script>
  <script src="js/sal.js"></script>
  <script src="js/index.js"></script>
</head>

<body>
  <nav class="navbar navbar-light bg-white  px-4 py-0" style="z-index: 1022;">
    <div class="row col-12 mx-auto justify-content-center py-2 border-bottom">
      <b class="mr-5"><i class="fa fa-phone text-success mr-2"></i> +254-703-144103</b>
      <b><i class="fa fa-envelope-o text-success mr-2"></i> greatplacestoschool@standardmedia.co.ke</b>
    </div>
  </nav>
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white px-4">
    <div class="container">
      <a href="/" class="navbar-brand">
        <img src="images/logo.png" alt="LOGO" width="30" height="30">
        GPTS
      </a>
      <div class="collapse navbar-collapse" id="navbarText">
        <div class="navbar-nav ml-auto mt-2 mt-lg-0">
          <a class="nav-item nav-link" href="#home">Home</a>
          <a class="nav-item nav-link" href="#about">About Us</a>
          <a class="nav-item nav-link" href="#awards">Awards</a>
          <a class="nav-item nav-link" href="#partners">Partners</a>
          <a class="nav-item nav-link" href="#contact">Contact Us</a>
        </div>
      </div>
    </div>
  </nav>
  <section class="section" id="home">
    <h1 data-sal="zoom-in" data-sal-duration="2000" data-sal-delay="500" data-sal-easing="ease-out-bounce">Geat Places To School</h1>
    <p>Get you school noticed among the GPTS</p>
    <a class="btn-start" href="https://docs.google.com/forms/d/e/1FAIpQLSey3D6qA7j2PQIHoAaKjB4DWA4Kw9gImbYdnCvhxJ7LQr9qng/viewform" target="_blank">TAKE SURVEY</a>
  </section>

  <section class="section2">
    <div class="container">
      <div class="row mx-auto justify-content-center">
        <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-sal="slide-down" data-sal-delay="1000" data-sal-duration="500" data-sal-easing="ease-out-back">
          <div class="card card-body">
            <i class="fa fa-mortar-board"></i>
            <h2 id="schoolsCount">253</h2>
            <span>Schools</span>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-sal="slide-down" data-sal-delay="1000" data-sal-duration="500" data-sal-easing="ease-out-back">
          <div class="card card-body border-0">
            <i class="fa fa-font-awesome"></i>
            <h2 id="competitionsCount">25</h2>
            <span>Competitions</span>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-sal="slide-down" data-sal-delay="1000" data-sal-duration="500" data-sal-easing="ease-out-back">
          <div class="card card-body border-0">
            <i class="fa fa-trophy"></i>
            <h2 id="awardsCount">50</h2>
            <span>Awards</span>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-sal="slide-down" data-sal-delay="1000" data-sal-duration="500" data-sal-easing="ease-out-back">
          <div class="card card-body border-0">
            <i class="fa fa-university"></i>
            <h2 id="linkedCount">125K</h2>
            <span>Linked</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section3" id="about">
    <div class="container">
      <h2>Why Great Places to School?</h2>
      <p class="py-3">Students spend most of their formative years in schools, and it is critical that schools offer a vital opportunity to ensure that they get
        the support required to reach their full potential.</p>
      <div class="row col-12 mx-auto">
        <div class="col-12 col-md-6">
          <div class="card card-body p-1">
            <video src="images/WhatsApp Video 2021-01-27 at 10.24.40.mp4" autoplay="true" loop="true"></video>
          </div>
        </div>
        <div class="col-12 col-md-6" data-sal="zoom-in" data-sal-delay="500" data-sal-duration="500" data-sal-easing="ease-out-back">
          <h3>What We Do</h3>
          <b>We are an impact-driven initiative with the aim of identifying, rating and recognizing schools whose innovative learning environment and
            overall school culture contribute to the wholesome development of students.
          </b>
        </div>
      </div>
    </div>
  </section>

  <section class="section4" id="about-more">
    <div class="container">
      <h2>Why You Should Participate</h2>
      <div class="row col-12 mx-auto justify-content-center my-3">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card card-body p-0 border-0 h-100" data-sal="zoom-in" data-sal-delay="1000" data-sal-duration="1000" data-sal-easing="ease-out-back">
            <img src="images/WhatsApp Image 2021-01-27 at 10.24.49 (2).jpeg" alt="">
            <h4 class="my-2">Know your school better</h4>
            <p>Know what is working best for your School</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card card-body p-0 border-0 h-100" data-sal="zoom-in" data-sal-delay="1000" data-sal-duration="1500" data-sal-easing="ease-out-back">
            <img src="images/WhatsApp Image 2021-01-27 at 10.24.48 (2).jpeg" alt="">
            <h4 class="my-2">Assess and Benchmark Your School</h4>
            <p>Assess and benchmark your school culture and be able to identify the gaps and how to best transform your school.</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card card-body p-0 border-0 h-100" data-sal="zoom-in" data-sal-delay="1000" data-sal-duration="2000" data-sal-easing="ease-out-back">
            <img src="images/WhatsApp Image 2021-01-27 at 10.24.58 (1).jpeg" alt="">
            <h4 class="my-2">Earn National Recognition</h4>
            <p>Earn national recognition by being ranked among the Great Places to School</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card card-body p-0 border-0 h-100" data-sal="zoom-in" data-sal-delay="1000" data-sal-duration="2500" data-sal-easing="ease-out-back">
            <img src="images/WhatsApp Image 2021-01-27 at 10.24.57.jpeg" alt="">
            <h4 class="my-2">Grow Your Brand</h4>
            <p>Our recognition will build your brand and make your school be recognized as a Great Place to School</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section5" id="awards">
    <div class="container py-5">
      <h2 class="text-center">Award Catergories</h2>
      <div class="row col-12 mx-auto py-3">
        <div class="col-6col-12 col-md-6">
          <div class="card card-body">
            <img src="images/careers.png" alt="careers" />
          </div>
        </div>
        <div class="col-12 col-md-6">
          <ul>
            <li data-sal="zoom-out" data-sal-delay="500" data-sal-duration="500" data-sal-easing="ease-out-back">Health &amp; Personal Hygien</li>
            <li data-sal="zoom-out" data-sal-delay="750" data-sal-duration="500" data-sal-easing="ease-out-back">Extra-curricula &amp; Sports Activities</li>
            <li data-sal="zoom-out" data-sal-delay="800" data-sal-duration="500" data-sal-easing="ease-out-back">Safety &amp; Security</li>
            <li data-sal="zoom-out" data-sal-delay="850" data-sal-duration="500" data-sal-easing="ease-out-back">Academics</li>
            <li data-sal="zoom-out" data-sal-delay="900" data-sal-duration="500" data-sal-easing="ease-out-back">Career &amp; Entrepreneurship Development</li>
            <li data-sal="zoom-out" data-sal-delay="950" data-sal-duration="500" data-sal-easing="ease-out-back">Governance</li>
            <li data-sal="zoom-out" data-sal-delay="1000" data-sal-duration="500" data-sal-easing="ease-out-back">Character &amp; Creativity Talents</li>
            <li data-sal="zoom-out" data-sal-delay="1050" data-sal-duration="500" data-sal-easing="ease-out-back">STEM Education</li>
          </ul>
        </div>
      </div>
  </section>

  <section class="section6" id="partners">
    <div class="container">
      <h2 class="text-center">Our Partners</h2>
      <div class="row col-12 justify-content-center">
        <img src="images/partners.png" alt="partners">
      </div>
    </div>
  </section>
  <section class="section7" id="contact">
    <div class="container">
      <h2 class="text-center">Contact Us</h2>
      <div class="row mx-auto justify-content-center my-3">
        <b class="mr-5"><i class="fa fa-phone text-success mr-2"></i><a href="tel:+254703144103">+254-703-144103</a></b>
        <b><i class="fa fa-envelope-o text-success mr-2"></i><a href="mailTo:greatplacestoschool@standardmedia.co.ke">greatplacestoschool@standardmedia.co.ke</a></b>
      </div>
      <p class="text-center">Get In Touch and we can have a chat about how GTPS will benefit your school</p>
      <div>
        <a class="btn-start" href="https://docs.google.com/forms/d/e/1FAIpQLSey3D6qA7j2PQIHoAaKjB4DWA4Kw9gImbYdnCvhxJ7LQr9qng/viewform" target="_blank">GET STARTED</a>
      </div>
    </div>
  </section>

  <section class="py-3 bg-dark text-light">
    <h6 class="text-center m-0 p-0">
      &copy; <script>
        document.write(new Date().getFullYear());
      </script> GPTS</h6>
  </section>
</body>

</html>