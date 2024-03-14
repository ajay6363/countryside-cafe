<!--
Author: ajaynarayanan
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>tea stories</title>

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
                  <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item @@about__active">
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
<!-- main-slider -->
<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>Flavours Of Village</h5>
                                    <p class="mt-4">We maintain the traditional flovours of south india in our each cups
                                     </p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4" href="about.html"> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info  banner-view banner-top1 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>Hot and tasty coffee</h5>
                                    <p class="mt-4">Coffee Shop is the place where you can get flavorful coffee strains. </p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4" href="about.html"> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li> 
                    <div class="slider-info banner-view banner-top2 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>Dedicated chai fans </h5>
                                    <p class="mt-4">Countryside CAFE is the place where you can get flavorful tea leaves
                                        from farmers and make our tea premium at very affordable prize </p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4" href="about.html"> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top3 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>Homely CAFE</h5>
                                    <p class="mt-4"> Countryside CAFE provides you an ambiance where you can feel like home </p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4" href="about.html"> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>
</section>
<!-- /main-slider -->
<section class="w3l-servicesblock py-5" id="who">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
            <div class="col-lg-4 about-right-faq align-self">
                <span class="title-small mb-2">Best for you</span>
                <h3 class="title-big mx-0"> Who we are.</h3>
                <p class="mt-lg-4 mt-3">Vanakam and warm greetings from CountrysideCAFE! We are an authentic Indian cafe, where we take pride in serving you the rich and diverse flavors of India's culinary heritage. Located in the heart of Kanyakumari, we are a beloved destination for coffee and tea enthusiasts who seek a delightful journey through the tastes and aromas of Indian cuisine.</p>
                <a class="btn btn-style btn-primary mt-lg-5 mt-4" href="about.html"> Learn More</a>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-4 col-6 left-wthree-img mt-lg-0 mt-5">
                        <img src="assets/images/a1.jpg" alt="" class="img-fluid radius-image">
                    </div>
                    <div class="col-md-4 col-6 left-wthree-img mt-lg-0 mt-5">
                        <img src="assets/images/a2.jpg" alt="" class="img-fluid radius-image">
                    </div>
                    <div class="col-md-4 col-6 left-wthree-img mt-lg-0 mt-md-5 mt-4">
                        <img src="assets/images/a3.jpg" alt="" class="img-fluid radius-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="w3l-features-8" id="products">
    <!-- /features -->
    <div class="features py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <h5 class="title-small text-center">Our Services</h5>
            <h3 class="title-big text-center mb-md-5 mb-4">Our Products</h3>
            <div class="fea-gd-vv text-center row">
			<?php
										   require("connection.php");
										   $res=$con->query("select*from tb_addcoffee");
										   $count=$res->num_rows;
										   
                                           											   
					if($count>0)
										   {
											  
											while($row=$res->fetch_assoc())
										   {
											   ?>
											  
										
										  
                <div class="float-top col-lg-4 col-md-6">
				
                    <a href="#url"><img src="<?php echo "admin/images/".$row["coffeeimage"];?>" height="400px" width="370px"></a>
                    <div class="float-lt feature-gd" >
										 
                        <h3><?php echo$row["coffeename"];?></h3>
                       <div> <p><?php echo substr ($row["discription"],0,300);?>....</p><a href="services.php">Read More</a></div>
						
                    </div>
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
    <!-- //features -->
</section>
<!-- /homeblock2-->
<section class="w3l-homeblock2 py-5" id="services">
    <div class="container py-lg-5 py-md-4">
        <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-5 align-self">
                <span class="title-small">Blend Coffee</span>
                <h3 class="title-big mx-0"> Our Services.</h3>
                <p class="mt-3">We make the delicious cups of coffee and tea in traditional ways where customers can feel like home</p>
                <p class="mt-3">We make the delicious coffee for the coffee lovers. We are a team of dedicated
                    coffee fans who celebrate exceptional coffee brands and roasters.</p>
                <a class="btn btn-style btn-primary mt-sm-5 mt-4" href="services.html"> Read More</a>
            </div>
            <div class="col-lg-7 pl-lg-5 mt-lg-0 mt-5">
                <div class="row">
                    <div class="col-sm-6 grids-feature">
                        <div class="area-box">
                            <span class="fa fa-coffee"></span>
                            <h4><a href="#feature" class="title-head">Types of Coffee and tea</a></h4>
                            <p>Here we provide more than 16 varieties of coffee and 70 varieties of tea</p>
                        </div>
                    </div>
                    <div class="col-sm-6 grids-feature mt-sm-0 mt-5">
                        <div class="area-box">
                            <span class="fa fa-glass"></span>
                            <h4><a href="#feature" class="title-head">Bean and tea leaf Varieties</a></h4>
                            <p>We have our very own hand picked bean and tea leaf varieties</p>
                        </div>
                    </div>
                    <div class="col-sm-6 grids-feature mt-5 pt-lg-2">
                        <div class="area-box">
                            <span class="fa fa-pagelines"></span>
                            <h4><a href="#feature" class="title-head">Affordable premium</a></h4>
                            <p>The coffee and tea we provide are in premium quality and affordable price </p>
                        </div>
                    </div>
                    <div class="col-sm-6 grids-feature mt-5 pt-lg-2">
                        <div class="area-box">
                            <span class="fa fa-envira"></span>
                            <h4><a href="#feature" class="title-head">Coffe to go</a></h4>
                            <p>Make your first coffee wish now and became one of our daily customer family.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //homeblock2-->
<section class="w3l-gallery" id="gallery">
    <div class="destionation-innf py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content">
                <h5 class="title-small text-center mb-1">Coffee gallery</h5>
                <h3 class="title-big text-center mb-md-5 mb-4">Portfolio Gallery</h3>
            </div>
            <!--/coffee grids-grids-->
            <ul class="gallery_agile">
                <li>
                    <div class="w3_agile_portfolio_grid">
                        <a href="assets/images/blog1.jpg">
                            <img src="assets/images/blog1.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3>Perfect Cup</h3>
                                    <p>Cup of Coffee / Filtered</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="w3_agile_portfolio_grid">
                        <a href="assets/images/blog2.jpg">
                            <img src="assets/images/blog2.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3>Baked Beans</h3>
                                    <p>Cup of Coffee / Filtered</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="w3_agile_portfolio_grid">
                        <a href="assets/images/blog3.jpg">
                            <img src="assets/images/blog3.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3>Morning Vibe</h3>
                                    <p>Filtered / Mornings</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>

                <li>
                    <div class="w3_agile_portfolio_grid">
                        <a href="assets/images/blog4.jpg">
                            <img src="assets/images/blog4.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3>Cappuccino</h3>
                                    <p>Cup of Coffee / Filtered</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="w3_agile_portfolio_grid">
                        <a href="assets/images/blog5.jpg">
                            <img src="assets/images/blog5.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3>Macchiatio</h3>
                                    <p>Aroma / Filtered</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="w3_agile_portfolio_grid">
                        <a href="assets/images/blog6.jpg">
                            <img src="assets/images/blog6.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3>Coffee Cup</h3>
                                    <p>Cup of Coffee / Filtered</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="w3_agile_portfolio_grid">
                        <a href="assets/images/blog1.jpg">
                            <img src="assets/images/blog1.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3>Filtered Coffee</h3>
                                    <p>Cup of Coffee / Filtered</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="w3_agile_portfolio_grid">
                        <a href="assets/images/blog2.jpg">
                            <img src="assets/images/blog2.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3> Perfect Blend</h3>
                                    <p>Cup of Coffee / Filtered</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
            <!--//coffee grids-grids-->
        </div>
    </div>
</section>
<!-- testimonials -->
<section class="w3l-clients-1" id="testimonials">
    <!-- /grids -->
    <div class="cusrtomer-layout py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="heading align-self text-center">
                <h6 class="title-small">Testimonials</h6>
                <h3 class="title-big mb-md-5 mb-4">What our Customers say</h3 >
            </div>
            <!-- /grids -->
            <div class="testimonial-row">
                <div id="owl-demo1" class="owl-testimonial owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <div class="test-img">
                                    <img src="assets/images/team1.jpg" class="img-fluid"
                                        alt="client-img">
                                </div>
                                <div class="testi-des">
                                    <div class="peopl align-self">
                                        <h3>Suriya</h3>
                                    </div>
                                </div>
                                <blockquote>
                                    <q>This is the first time i feel like home in a cafe the ambiance made a positive vibe and masala te is one of fav</q>
                                </blockquote>
                                <ul class="social-media-test m-0 mt-4 p-0">
                                    <li><a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <div class="test-img"><img src="assets/images/team2.jpg" class="img-fluid"
                                        alt="client-img">
                                </div>
                                <div class="testi-des">
                                    <div class="peopl align-self">
                                        <h3>Dhanush</h3>
                                    </div>
                                </div>
                                <blockquote>
                                    <q>my personal fav is bajji and the classic tea</q>
                                </blockquote>
                                <ul class="social-media-test m-0 mt-4 p-0">
                                    <li><a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <div class="test-img"><img src="assets/images/team3.jpg" class="img-fluid"
                                        alt="client-img">
                                </div>
                                <div class="testi-des">
                                    <div class="peopl align-self">
                                        <h3>Kajal agarval</h3>
                                    </div>
                                </div>
                                <blockquote>
                                    <q>the malabar coffee i tried here was very refreshing one and it really becames one of my fav its so aromatic</q>
                                </blockquote>
                                <ul class="social-media-test m-0 mt-4 p-0">
                                    <li><a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <div class="test-img"><img src="assets/images/team4.jpg" class="img-fluid"
                                        alt="client-img">
                                </div>
                                <div class="testi-des">
                                    <div class="peopl align-self">
                                        <h3>sai palavi</h3>
                                    </div>
                                </div>
                                <blockquote>
                                    <q>Best tea and coffee i ever tried .</q>
                                </blockquote>
                                <ul class="social-media-test m-0 mt-4 p-0">
                                    <li><a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /grids -->
    </div>
    <!-- //grids -->
</section>
<!-- //testimonials -->
<section class="w3l-courses" id="blog">
    <div class="blog py-5" id="courses">
        <div class="container py-lg-5">
            <h5 class="title-small text-center">Our Coffee blog</h5>
            <h3 class="title-big text-center mb-lg-5 mb-4">Latest Blog Posts</h3>
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="owl-two owl-carousel owl-theme">
                        <div class="item">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="#blog-single" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="assets/images/blog1.jpg"
                                            alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body course-details">
                                    <a href="#blog-single" class="course-desc">Advantages and Disadvantages of Coffee
                                    </a>
                                    <p class="mt-3">here are some of the advantages and disadvantages</p>
                                    <div class="blog-bottom-info">
                                        <a href="#blog-single" class="btn btn-primary btn-style1">Read more</a>
                                        <div class="course-meta">
                                            <div class="meta-item course-lesson">
                                                <span class="fa fa-heart"></span>
                                                <span class="meta-value"> 24 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fa fa-eye"></span>
                                                <span class="meta-value"> 125 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fa fa-calendar"></span>
                                                <span class="meta-value"> 07.01.2023 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="#blog-single" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="assets/images/blog4.jpg"
                                            alt="Card image cap">
                                    </a>
                                    <div class="course-price-badge"> Free</div>
                                </div>
                                <div class="card-body course-details">
                                    <a href="#blog-single" class="course-desc">Methods of making a perfect cup
                                    </a>
                                    <p class="mt-3">Lets see how to make a perfect cup of tea</p>
                                    <div class="blog-bottom-info">
                                        <a href="#blog-single" class="btn btn-primary btn-style1">Read more</a>
                                        <div class="course-meta">
                                            <div class="meta-item course-lesson">
                                                <span class="fa fa-heart"></span>
                                                <span class="meta-value"> 24 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fa fa-eye"></span>
                                                <span class="meta-value"> 125 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fa fa-calendar"></span>
                                                <span class="meta-value"> 07.01.2023 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="#blog-single" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="assets/images/blog3.jpg"
                                            alt="Card image cap">
                                    </a>
                                    <div class="course-price-badge-new"> New</div>
                                </div>
                                <div class="card-body course-details">
                                    <a href="#blog-single" class="course-desc">Benifits of having coffee 
                                    </a>
                                    <p class="mt-3">Lets see some of the benifits of having coffee everyday</p>
                                    <div class="blog-bottom-info">
                                        <a href="#blog-single" class="btn btn-primary btn-style1">Read more</a>
                                        <div class="course-meta">
                                            <div class="meta-item course-lesson">
                                                <span class="fa fa-heart"></span>
                                                <span class="meta-value"> 24 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fa fa-eye"></span>
                                                <span class="meta-value"> 125 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fa fa-calendar"></span>
                                                <span class="meta-value"> 07.01.2023 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="#blog-single" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="assets/images/blog2.jpg"
                                            alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body course-details">
                                    <a href="#blog-single" class="course-desc">Is masala tea good?
                                    </a>
                                    <p class="mt-3">Now we can see all about our signature masala tea recipe</p>
                                    <div class="blog-bottom-info">
                                        <a href="#blog-single" class="btn btn-primary btn-style1">Read more</a>
                                        <div class="course-meta">
                                            <div class="meta-item course-lesson">
                                                <span class="fa fa-heart"></span>
                                                <span class="meta-value"> 24 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fa fa-eye"></span>
                                                <span class="meta-value"> 125 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fa fa-calendar"></span>
                                                <span class="meta-value"> 07.01.2023 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="#blog-single" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="assets/images/blog5.jpg"
                                            alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body course-details">
                                    <a href="#blog-single" class="course-desc">roasting coffee beans
                                    </a>
                                    <p class="mt-3">Lets learn about of to roast coffee beans</p>
                                    <div class="blog-bottom-info">
                                        <a href="#blog-single" class="btn btn-primary btn-style1">Read more</a>
                                        <div class="course-meta">
                                            <div class="meta-item course-lesson">
                                                <span class="fa fa-heart"></span>
                                                <span class="meta-value"> 24 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fa fa-eye"></span>
                                                <span class="meta-value"> 125 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fa fa-calendar"></span>
                                                <span class="meta-value"> 07.01.2023 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="#blog-single" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="assets/images/blog6.jpg"
                                            alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body course-details">
                                    <a href="#blog-single" class="course-desc">Why we are unique? Who are behind the Taste
                                    </a>
                                    <p class="mt-3">know about our cheifs who puts their whole heart for making you a perfect cup</p>
                                    <div class="blog-bottom-info">
                                        <a href="#blog-single" class="btn btn-primary btn-style1">Read more</a>
                                        <div class="course-meta">
                                            <div class="meta-item course-lesson">
                                                <span class="fa fa-heart"></span>
                                                <span class="meta-value"> 24 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fa fa-eye"></span>
                                                <span class="meta-value"> 125 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fa fa-calendar"></span>
                                                <span class="meta-value"> 07.01.2023 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 text-more">
                <p class="mt-4 pt-3 sample text-center">
                    Our team members also write interesting articles on everything concerning coffee.
                    <a href="blog.html">View All blog posts <span class="pl-2 fa fa-long-arrow-right"></span></a>
                </p>
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