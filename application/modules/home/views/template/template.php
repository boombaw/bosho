<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $signature->singkatan ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>unggah/logo/<?php echo $signature->logo ?>" rel="icon">
  <link href="<?php echo base_url(); ?>unggah/logo/<?php echo $signature->logo ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(); ?>assets/ebusiness/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(); ?>assets/ebusiness/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/ebusiness/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/ebusiness/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/ebusiness/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/ebusiness/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/ebusiness/lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="<?php echo base_url(); ?>assets/ebusiness/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url(); ?>assets/ebusiness/css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="<?php echo base_url(); ?>assets/ebusiness/css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  
  <script src="<?php echo base_url(); ?>assets/ebusiness/lib/jquery/jquery.min.js"></script>
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                  <h1><span><?php echo $signature->singkatan ?> </span><?php echo $signature->nama_company ?></h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#beranda">Beranda</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#tentang">Tentang</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#services">Services</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#klien">Klien</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#faq">FAQ</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#portfolio">Portfolio</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#harga">Harga</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#artikel">Artikel</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#testimonial">Testimonial</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#kontak">Kontak</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="beranda" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="<?php echo base_url(); ?>assets/ebusiness/img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
        <img src="<?php echo base_url(); ?>assets/ebusiness/img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
        <img src="<?php echo base_url(); ?>assets/ebusiness/img/slider/slider3.jpg" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best Business Information </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">We're In The Business Of Helping You Start Your Business</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#tentang">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best Business Information </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">We're In The Business Of Get Quality Business Service</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#tentang">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best business Information </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Helping Business Security  & Peace of Mind for Your Family</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#tentang">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="tentang" class="about-area area-padding">
    <div class="container">
		<?php echo $this->load->view($page) ?>
	</div>
  </div>
  <!-- End About area -->

  <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Our Services</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="services-contents">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
											<i class="fa fa-code"></i>
										</a>
                  <h4>Expert Coder</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
											<i class="fa fa-camera-retro"></i>
										</a>
                  <h4>Creative Designer</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
											<i class="fa fa-wordpress"></i>
										</a>
                  <h4>Wordpress Developer</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
											<i class="fa fa-camera-retro"></i>
										</a>
                  <h4>Social Marketer </h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
											<i class="fa fa-bar-chart"></i>
										</a>
                  <h4>Seo Expart</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
											<i class="fa fa-ticket"></i>
										</a>
                  <h4>24/7 Support</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->

  <!-- our-skill-area start -->
  <div id="klien" class="our-skill-area fix hidden-sm">
    <div class="test-overly"></div>
    <div class="skill-bg area-padding-2">
      <div class="container">
        <!-- section-heading end -->
		<?php echo $this->load->view($client);?>
      </div>
    </div>
  </div>
  <!-- our-skill-area end -->

  <!-- Faq area start -->
  <div id="faq" class="faq-area area-padding">
    <div class="container">
		<?php echo $this->load->view($faq);?>
    </div>
  </div>
  <!-- End Faq Area -->


  <!-- Start reviews Area -->
  <div class="reviews-area hidden-xs">
    <div class="work-us">
      <div class="work-left-text">
        <a href="#">
						<img src="<?php echo base_url(); ?>assets/ebusiness/img/about/2.jpg" alt="">
					</a>
      </div>
      <div class="work-right-text text-center">
        <h2>working with us</h2>
        <h5>Web Design, Ready Home, Construction and Co-operate Outstanding Buildings.</h5>
        <a href="#contact" class="ready-btn">Contact us</a>
      </div>
    </div>
  </div>
  <!-- End reviews Area -->

  <!-- Start portfolio Area -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
		<?php echo $this->load->view($portofolio);?>
    </div>
  </div>
  <!-- awesome-portfolio end -->
  <!-- start pricing area -->
  <div id="harga" class="pricing-area area-padding">
    <div class="container">
	<?php echo $this->load->view($price) ?>
    </div>
  </div>
  <!-- End pricing table area -->
  <!-- Start Testimonials -->
  <div class="testimonials-area">
    <div class="testi-inner area-padding">
      <div class="testi-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Start testimonials Start -->
            <div class="testimonial-content text-center">
              <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
              <!-- start testimonial carousel -->
              <div class="testimonial-carousel">
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Boby</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Jhon</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Fleming</h6>
                  </div>
                </div>
                <!-- End single item -->
              </div>
            </div>
            <!-- End testimonials end -->
          </div>
          <!-- End Right Feature -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->
  <!-- Start Blog Area -->
  <div id="artikel" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <?php echo $this->load->view($artikel) ?>
      </div>
    </div>
  </div>
  <!-- End Blog -->
  <!-- Start Suscrive Area -->
	<div id="testimonial" class="pricing-area area-padding">
		<div class="suscribe-area">
			<div class="container">
			  <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
				  <div class="suscribe-text text-center">
					<?php echo $this->load->view($testimonial) ?>
				  </div>
				</div>
			  </div>
			</div>
		</div>
	</div>
  <!-- End Suscrive Area -->
  <!-- Start contact Area -->
<div id="kontak" class="contact-area">
    <div class="contact-inner area-padding">
		<div class="contact-overly"></div>
		<div class="container ">
			<?php echo $this->load->view($contact) ?>
		</div>
    </div>
</div>
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>e</span>Business</h2>
                </div>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +123 456 789</p>
                  <p><span>Email:</span> contact@example.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="<?php echo base_url(); ?>assets/ebusiness/img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="<?php echo base_url(); ?>assets/ebusiness/img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="<?php echo base_url(); ?>assets/ebusiness/img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="<?php echo base_url(); ?>assets/ebusiness/img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="<?php echo base_url(); ?>assets/ebusiness/img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="<?php echo base_url(); ?>assets/ebusiness/img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url(); ?>assets/ebusiness/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/ebusiness/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/ebusiness/lib/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/ebusiness/lib/knob/jquery.knob.js"></script>
  <script src="<?php echo base_url(); ?>assets/ebusiness/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/ebusiness/lib/parallax/parallax.js"></script>
  <script src="<?php echo base_url(); ?>assets/ebusiness/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/ebusiness/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/ebusiness/lib/appear/jquery.appear.js"></script>
  <script src="<?php echo base_url(); ?>assets/ebusiness/lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url(); ?>assets/ebusiness/contactform/contactform.js"></script>
  

  <script src="<?php echo base_url(); ?>assets/ebusiness/js/main.js"></script>
</body>

</html>
