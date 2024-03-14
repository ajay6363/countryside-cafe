<!--
Author: Ajaynarayanan
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>tea story about</title>

    <link href="//fonts.googleapis.com/css?family=Mukta:300,400,500" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0 pt-lg-0">
          <h1> <a class="navbar-brand" href="index.html">
                  <span class="fa fa-coffee"></span> Countryside CAFE
              </a></h1>
          <!-- if logo is image enable this   
  <a class="navbar-brand" href="#index.html">
      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
  </a> -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mx-lg-auto">
                  <li class="nav-item @@home__active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item @@services__active">
                      <a class="nav-link" href="services.php">Our products</a>
                  </li>
                  <li class="nav-item @@contact__active">
                      <a class="nav-link" href="contact.php">Contact</a>
                  </li>
              </ul>

              <!--/search-right-->
              <div class="search-right">
                  <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                  <!-- search popup -->
                  <div id="search" class="pop-overlay">
                      <div class="popup">

                          <form action="error.html" method="GET" class="search-box">
                              <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                  autofocus="">
                              <button type="submit" class="btn"><span class="fa fa-search"
                                      aria-hidden="true"></span></button>
                          </form>

                      </div>
                      <a class="close" href="#close">×</a>
                  </div>
                  <!-- /search popup -->
              </div>
              <!--//search-right--><?php
 session_start();


 if (isset($_SESSION['aaa'])) {
 ?>
   <div class="top-quote mr-lg-3 mt-lg-0">
               <a href="customerlogout.php" class="btn btn-style btn-primary"><span class="fa fa-sign-in mr-2"> log out</span></a>
              </div>
          
 <?php

 } else {
   ?>
   <div class="top-quote mr-lg-3 mt-lg-0">
                  <a href="customerlogin.php" class="btn btn-style btn-primary"><span class="fa fa-sign-in mr-2"> log in</span></a>
              </div>
   <?php
 }?>
          </div>
          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
              <nav class="navigation">
                  <div class="theme-switch-wrapper">
                      <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container">
                              <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                  </div>
              </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
      </nav>
  </div>
</header>
<!--/header-->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-4 py-md-3">
            <h2 class="title">About us</h2>
        </div>
    </div>
</section>
<section class="w3l-servicesblock py-5" id="about">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
            <div class="col-lg-8 about-right-faq align-self">
                <span class="title-small mb-2">Heart of Kanyakumari's Best</span>
                <h3 class="title-big mx-0"> What we're all about</h3>
                <p class="mt-lg-4 mt-3"> Countryside CAFE was founded with a passion for preserving and sharing the age-old traditions of Indian tea culture. Our journey began when our founder, Vignesh, embarked on a quest to explore the vast tea gardens of India. Inspired by the lush landscapes and the artistry behind tea cultivation and preparation,vignesh envisioned creating a space where people could immerse themselves in the magical world of Indian teas and cooffe.</p>
                <a class="btn btn-style btn-primary mt-lg-5 mt-4" href="about.html"> Learn More about us</a>
            </div>
            <div class="col-lg-4 mt-lg-0 mt-5">
                <img src="assets/images/about.jpg" alt="" class="img-fluid radius-image">
            </div>
        </div>
    </div>
</section>
<section class="w3l-specification-6 py-5">
    <!-- /specification-6-->
    <div class="specification-6-mian py-lg-5 py-md-4 py-2">
        <div class="container">
            <div class="align-counter-6-inf-cols row">
                <div class="counter-6-inf-left col-lg-6">
                    
                </div>
                <div class="counter-6-inf-right col-lg-6">
                    <h3 class="title-big">We provide a variety of services both to our new and regular customers.</h3>
                    <p class="mt-4">Customizable Tea Blends: Allow customers to customize their tea blends by adding or reducing certain ingredients to suit their taste preferences.Snacks and Bites: Serve traditional Indian snacks and bites that complement the tea, such as samosas, pakoras, bhajis, vada pav, and biscuits.</p>
                    <a class="btn btn-style btn-primary mt-lg-5 mt-4" href="about.html"> Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //specification-6-->
<!-- /homeblock2-->
<section class="w3l-homeblock2 py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
            <div class="col-lg-4 col-md-6 grids-feature">
                <div class="area-box">
                    <span class="fa fa-coffee"></span>
                    <h4><a href="#feature" class="title-head">Aroma and Flavour of Tea</a></h4>
                    <p>Tea has a distinctive aroma, which is easily recognizable.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-5">
                <div class="area-box">
                    <span class="fa fa-glass"></span>
                    <h4><a href="#feature" class="title-head">Composition of coffee</a></h4>
                    <p>Coffee contains many minerals and vitamins and no fat.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-5">
                <div class="area-box">
                    <span class="fa fa-pagelines"></span>
                    <h4><a href="#feature" class="title-head">Physcological Effects </a></h4>
                    <p>Coffee is beneficial for your physiological condition.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //homeblock2-->
<!-- middle -->
<div class="w3l-middle py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="welcome-left">
            <h3 class="title-small">Countryside CAFE</h3>
            <h3 class="title-big mb-4">All your favourites, delivered straight to you. Start your order</h3>
            <p class="pr-lg-5">We delivers our percieous cups to your doorsteps just go for it. </p>
            <div class="buttons mt-md-5 mt-4">
                <a href="about.html" class="btn btn-style btn-primary mr-2">Find near you</a>
            </div>
        </div>
    </div>
</div>
<!-- //middle -->
<section class="w3l-team section py-5" id="team">
    <div class="container py-lg-5 py-md-4">
        <h5 class="title-small text-center">Our team</h5>
        <h3 class="title-big text-center mb-md-5 mb-4">Team Members</h3>
        <div class="row">
            <div class="section_content teamy-team">
                <div class="col-lg-3 col-6">
                    <div class="teamy teamy_style1 teamy_mask-circle">
                        <div class="teamy_layout">
                            <div class="teamy_preview">
                                
                            </div>
                            <div class="teamy_back">
                                <div class="teamy_back-inner">
                                    <a href="#0" class="social"> <i class="fa fa-facebook"></i> </a>
                                    <a href="#0" class="social"> <i class="fa fa-dribbble"></i> </a>
                                    <a href="#0" class="social"> <i class="fa fa-twitter"></i> </a>
                                    <a href="#0" class="social"> <i class="fa fa-envelope-o"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="teamy_content">
                            <a href="#url" class="teamy_name">Vignesh</a>
                            <span class="teamy_post">Owner</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="teamy teamy_style1 teamy_mask-circle">
                        <div class="teamy_layout">
                            <div class="teamy_preview">
                                
                            </div>
                            <div class="teamy_back">
                                <div class="teamy_back-inner">
                                    <a href="#0" class="social"> <i class="fa fa-facebook"></i> </a>
                                    <a href="#0" class="social"> <i class="fa fa-dribbble"></i> </a>
                                    <a href="#0" class="social"> <i class="fa fa-twitter"></i> </a>
                                    <a href="#0" class="social"> <i class="fa fa-envelope-o"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="teamy_content">
                            <a href="#url" class="teamy_name">Mugesh</a>
                            <span class="teamy_post">Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-lg-0 mt-5">
                    <div class="teamy teamy_style1 teamy_mask-circle">
                        <div class="teamy_layout">
                            <div class="teamy_preview">
                                
                            </div>
                            <div class="teamy_back">
                                <div class="teamy_back-inner">
                                    <a href="#0" class="social"> <i class="fa fa-facebook"></i> </a>
                                    <a href="#0" class="social"> <i class="fa fa-dribbble"></i> </a>
                                    <a href="#0" class="social"> <i class="fa fa-twitter"></i> </a>
                                    <a href="#0" class="social"> <i class="fa fa-envelope-o"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="teamy_content">
                            <a href="#url" class="teamy_name">vijay</a>
                            <span class="teamy_post">Tea Barista</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-lg-0 mt-5">
                    <div class="teamy teamy_style1 teamy_mask-circle">
                        <div class="teamy_layout">
                            <div class="teamy_preview">
                               
                            </div>
                            <div class="teamy_back">
                                <div class="teamy_back-inner">
                                    <a href="#0" class="social"> <i class="fa fa-facebook"></i> </a>
                                    <a href="#0" class="social"> <i class="fa fa-dribbble"></i> </a>
                                    <a href="#0" class="social"> <i class="fa fa-twitter"></i> </a>
                                    <a href="#0" class="social"> <i class="fa fa-envelope-o"></i> </a>
                                </div>
                            </div>
                        </div>
						<div class="teamy_content">
                            <a href="#url" class="teamy_name">Ajith</a>
                            <span class="teamy_post">Coffee Barista</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-lg-0 mt-5">
                    <div class="teamy teamy_style1 teamy_mask-circle">
                        <div class="teamy_layout">
                            <div class="teamy_preview">
                               
                            </div>
                            <div class="teamy_back">
                                <div class="teamy_back-inner">
                                    <a href="#0" class="social"> <i class="fa fa-facebook"></i> </a>
                                    <a href="#0" class="social"> <i class="fa fa-dribbble"></i> </a>
                                    <a href="#0" class="social"> <i class="fa fa-twitter"></i> </a>
                                    <a href="#0" class="social"> <i class="fa fa-envelope-o"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="teamy_content">
                            <a href="#url" class="teamy_name">Rose</a>
                            <span class="teamy_post">Accountant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="w3l-footer-29-main">
  <div class="footer-29 py-5">
    <div class="container py-lg-4 py-sm-3">
      <div class="row footer-top-29">
        <div class="col-lg-5 footer-list-29 footer-1">
          <h2><a href="index.html" class=""><span class="fa fa-coffee"></span> Countryside CAFE</a></h2>
          <p>We make the delicious cups for the coffee and tea lovers. We are a team of dedicated coffee and tea fans who celebrate
            exceptional brands and roasters by providing our guests the unique opportunity to try coffee and tea.
          </p>
        </div>
        <div class="col-lg-3 col-md-6 footer-list-29 footer-3 mt-lg-0 mt-5">
          <h6 class="footer-title-29">Get in Touch</h6>

          <div class="column2">
            <div class="mb-2">
              <span>Address :</span>
              <p class="contact-para d-inline">97R6+WRG,Tiruparapu,TamilNadu</p>
            </div>
            <div class="">
              <span>E-mail :</span><a href="mailto:countrysidecafe@mail.com">countrysidecafe@mail.com</a>
            </div>
            <div class="mt-2">
              <span>Phone :</span><a href="tel: 9025999323"> 9025999323</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 footer-list-29 footer-4 mt-lg-0 mt-5">
          <h6 class="footer-title-29">Newsletter </h6>
          <p>Enter your email and receive the latest news from us. We'll never share your email address</p>

          <form action="#" class="subscribe" method="post">
            <input type="email" name="email" placeholder="Your Email Address" required="">
            <button><span class="fa fa-paper-plane"></span></button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <div class="bottom-copies text-center">
    <div class="container">
      <p class="copy-footer-29">© 2023 COUNTRY CAFE| Designed By:AjayNarayanan <a
          href="https://www.facebook.com/profile.php?id=100058140710318">AjayNarayanan</a></p>
    </div>
  </div>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- //move top -->
</section>

<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/theme-change.js"></script>

<!-- js for portfolio lightbox -->
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/js/jquery.chocolat.js "></script>
<!--light-box-files -->
<script type="text/javascript ">
  $(function () {
    $('.w3_agile_portfolio_grid a').Chocolat();
  });
</script>
<!-- /js for portfolio lightbox -->

<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<!-- script for testimonials -->
<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        480: {
          items: 1,
          nav: true
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for testimonials -->

<!-- script for blog slider -->
<script>
  $(document).ready(function () {
    $('.owl-two').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        992: {
          items: 2,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for blog slider -->

<script src="assets/js/owl.carousel.js"></script>

<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script -->


<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>