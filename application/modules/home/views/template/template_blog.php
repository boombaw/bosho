<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <?php if(!empty($this->uri->segment(3))){?>
	<title><?php echo $signature->nama_company.' : '.$deskrip ?></title>
		<?php if($title=='Artikel'){?>
			<meta content="<?php echo $artikels->tag?>" name="keywords">
			<meta content="<?php echo $artikels->metad?>" name="description">
		<?php }elseif($title=='Portofolio'){?>
			<meta content="<?php echo $portofolios->tag?>" name="keywords">
			<meta content="<?php echo $portofolios->metad?>" name="description">
		<?php }?>
  <?php }else{?>
	  <title><?php echo $signature->nama_company.' : '.$title ?></title>
  <?php }?>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow" />
  <meta content="<?php echo $signature->nama_company ?>,<?php echo $signature->singkatan ?>" name="keywords">
  <meta content="<?php echo $title.' '.$signature->nama_company.' '.$signature->singkatan?>" name="description">
  <meta content="<?php echo $signature->nama_company ?>" name="author">
  <meta content="id" name="language">
  <meta content="id" name="geo.country">
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
									<a class="navbar-brand page-scroll sticky-logo" href="<?php echo base_url();?>">
										<h1><span><?php echo $signature->singkatan ?> </span></h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
					<ul class="nav navbar-nav navbar-right">
						<li class="active">
							<a class="page-scroll" href="<?php echo base_url();?>">Beranda</a>
						</li>
						<li>
							<a class="page-scroll" href="<?php echo base_url();?>#tentang">Tentang</a>
						</li>
						<li>
							<a class="page-scroll" href="<?php echo base_url();?>#services">Services</a>
						</li>
						<li>
							<a class="page-scroll" href="<?php echo base_url();?>#klien">Klien</a>
						</li>
						<li>
							<a class="page-scroll" href="<?php echo base_url();?>#portfolio">Portfolio</a>
						</li>
						<li>
							<a class="page-scroll" href="<?php echo base_url();?>#harga">Harga</a>
						</li>
						<li>
							<a class="page-scroll" href="<?php echo base_url();?>#artikel">Artikel</a>
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

  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2"><?php echo $title ?></h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3"><?php echo $deskrip ?></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
	<div class="blog-page area-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="page-head-blog">
						<div class="single-blog-page">
							<div class="left-blog">
								<h4>Kategori</h4>
								<ul>
									<li>
										<a href="<?php echo base_url(); ?>home/portofolio">Portfolio</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>home/artikel">Artikel</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="single-blog-page">
							<!-- recent start -->
							<div class="left-blog">
								<h4>Portofolio Terakhir</h4>
								<div class="recent-post">
								  <!-- start single post -->
								  <?php foreach($portofolio_limit as $row){?>
									<div class="recent-single-post">
										<div class="post-img">
											<a href="<?php echo base_url();?>/home/portofolio/detail/<?php echo $row->id_portofolio?>">
												<img src="<?php echo base_url(); ?>unggah/portofolio/<?php echo $row->thumbnail?>" alt="<?php echo $row->thumbnail?>">
											</a>
										</div>
										<div class="pst-content">
											<p><a href="<?php echo base_url();?>/home/portofolio/detail/<?php echo $row->id_portofolio?>"> <?php echo $row->judul?></a></p>
										</div>
									</div>
								  <?php } ?>
								  <!-- End single post -->
								</div>
							</div>
							<!-- recent end -->
						</div>
						<div class="single-blog-page">
							<!-- recent start -->
							<div class="left-blog">
								<h4>Artikel Terakhir</h4>
								<div class="recent-post">
									<!-- start single post -->
									<?php foreach($artikel_limit as $row){?>
										<div class="recent-single-post">
											<div class="post-img">
												<a href="<?php echo base_url();?>/home/artikel/detail/<?php echo $row->id_artikel?>">
													<img src="<?php echo base_url(); ?>unggah/artikel/<?php echo $row->thumbnail?>" alt="<?php echo $row->thumbnail?>">
												</a>
											</div>
											<div class="pst-content">
												<p><a href="<?php echo base_url();?>/home/artikel/detail/<?php echo $row->id_artikel?>"> <?php echo $row->judul?></a></p>
											</div>
										</div>
									<?php } ?>
								  <!-- End single post -->
								</div>
							</div>
							<!-- recent end -->
						</div>
            
            
					</div>
				</div>
				<!-- End left sidebar -->
				<?php echo $this->load->view($page) ?>
			</div>
		</div>
	</div>
  <!-- End Blog Area -->

  <div class="clearfix"></div>

  <!-- Start Footer bottom Area -->
		<footer>
			<div class="footer-area">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="footer-content">
								<div class="footer-head">
									<div class="footer-logo">
										<h2><span><?php echo $signature->singkatan ?></span></h2>
										<h3><?php echo $signature->nama_company ?></h3>
									</div>

									<p><?php echo $about->keterangan?></p>
									<div class="footer-icons">
										<ul>
											<li>
												<a href="https://www.youtube.com/channel/UChS4tDx8FnePap6DrmEN4pA"><i class="fa fa-youtube"></i></a>
											</li>
											<li>
												<a href="https://wa.me/6281219595862/"><i class="fa fa-whatsapp"></i></a>
											</li>
											<li>
												<a href="https://www.instagram.com/aswanggamediakarya/"><i class="fa fa-instagram"></i></a>
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
									<h4>Informasi</h4>
									<?php foreach($contacts as $row){?>
										<div class="footer-contacts">
											<p><span>Telepon:</span> <?php echo $row->tlp_ktk ?></p>
											<p><span>Email:</span> <?php echo $row->email_ktk ?></p>
											<p><span>Alamat:</span> <?php echo $row->alamat ?></p>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
						<!-- end single footer -->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="footer-content">
								<div class="footer-head">
									<h4>Menu</h4>
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-4">
											<ul>
												<li>
													<a class="page-scroll" href="<?php echo base_url();?>">Beranda</a>
												</li>
												<li>
													<a class="page-scroll" href="<?php echo base_url();?>#tentang">Tentang</a>
												</li>
												<li>
													<a class="page-scroll" href="<?php echo base_url();?>#services">Services</a>
												</li>
												<li>
													<a class="page-scroll" href="<?php echo base_url();?>#klien">Klien</a>
												</li>
												<li>
													<a class="page-scroll" href="<?php echo base_url();?>#faq">FAQ</a>
												</li>
											</ul>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-4">
											<ul>
												<li>
													<a class="page-scroll" href="<?php echo base_url();?>#portfolio">Portfolio</a>
												</li>
												<li>
													<a class="page-scroll" href="<?php echo base_url();?>#harga">Harga</a>
												</li>
												<li>
													<a class="page-scroll" href="<?php echo base_url();?>#artikel">Artikel</a>
												</li>
												<li>
													<a class="page-scroll" href="<?php echo base_url();?>#testimonial">Testimonial</a>
												</li>
												<li>
													<a class="page-scroll" href="<?php echo base_url();?>#kontak">Kontak</a>
												</li>
											</ul>
										</div>
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
  <script src="<?php echo base_url(); ?>assets/ebusiness/lib/jquery/jquery.min.js"></script>
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
