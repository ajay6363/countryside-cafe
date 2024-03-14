<!--
Author: Ajaynarayanan
-->
<!doctype html>
<?php
session_start();
$asha=$_SESSION["aaa"];	
if (empty($_SESSION["aaa"]))
	{ 
header("Location:customerlogin.php"); 
	exit();}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>tea story contact</title>

    

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
                  <li class="nav-item @@about__active">
                      <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item @@services__active">
                      <a class="nav-link" href="services.php">Our Products</a>
                  </li>
                  <li class="nav-item active">
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
            <h2 class="title">BUY NOW</h2>
        </div>
    </div>
</section>
<div class="w3l-contact-info py-5" id="contact">
    <div class="container py-lg-5 py-md-4">
        <div class="align-self mt-lg-0 mt-md-5 mt-4">
           
        </div>
        <div class="row mt-5"><?php
										   require("connection.php");
										   $id=$_REQUEST["id"];
										   $res=$con->query("select*from tb_addcoffee where id='$id'");
										   $count=$res->num_rows;
										   
                                           											   
					if($count>0)
										   {
											  
											while($row=$res->fetch_assoc())
										   {
											   ?>
            <div>
             <img src="<?php echo "admin/images/".$row["coffeeimage"];?>" width="400" height="450" style="border-radius: 10%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></img>
            </div>
            <div class="col-lg-6 form-inner-cont mt-lg-0 mt-sm-5 mt-4">
             <div>  
			     <div></h1> </div></pre>  
			       <form action="buyinteraction.php" method="post" class="signin-form">
                    <div class="form-input">
                        <input type="text" name="name" style="color:#a95905" value="<?php echo$row["coffeename"];?>" disabled> </input>
                    </div>
					<div class="form-input">
                        <input type="number" id="quantity"  placeholder="quantity" min="1" max="10">
                    </div>
					<h1 style="color:#a95905">PAYMENT</h1></div>
                    <div class="form-input">
                       <input type="text" class="card-number" name="cardnumber" placeholder="Card Number">
                     <input type="hidden" name="buyer">
    <!-- Date Field -->
   
    <!-- Card Verification Field -->
    <div class="card-verification">
      <div class="cvv-input">
        <input type="number" name="ccv" placeholder="CVV" >
      </div>
                    </div>
                    
                    <div class="text-right">
					  <input type="hidden" id="pri" value="<?php echo$row["price"];?>" >
                    <input type="number" name="price" id="price" value="<?php echo$row["price"];?>" >
	                 <input type="hidden" id="disc" value="<?php echo$row["discount"];?>" disabled>
					<p style="color:#a95905">Flat 10% discount on every order</p>
					<a href="order.php"><button type = "button" class = "btn btn-warning">BUY NOW</button></a>	
                    </div>
					
                </form></div>
			
            </div>
			 <?php 
										   }
										   }
										   else
										   {
										   echo"no response";
										   }
										   ?>
        </div>
    </div>
</div>
<script src="assets/js/jquery-2.1.4.min.js"></script>
	<script>
	$(document).ready(function(){
		
               $('#quantity').on('keyup',function(){
				
					   
   var tot = $('#price').val();
	var qun = $('#quantity').val();
	var pr = $('#pri').val();
	var dis = $('#disc').val();
	var vals = tot*qun;
	var tol = vals-(vals/dis);
	if(qun=="")
	{
		
		  $('#price').val(pr);
	}
	else{

    $('#price').val(tol);
	}
	});
     });</script>
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

<script src="assets/js/theme-change.js"></script>

<!-- js for portfolio lightbox -->

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