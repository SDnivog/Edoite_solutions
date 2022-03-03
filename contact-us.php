
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="keywords" content="Data Science, Analytics, Data, sass, software company">
		<meta name="description" content="Sinco - Data Science & Analytics HTML5 Template is designed especially for the agency, multipurpose and business and those who offer business-related services.">
      	<meta property="og:site_name" content="Sinco">
      	<meta property="og:url" content="https://heloshape.com/">
      	<meta property="og:type" content="website">
      	<meta property="og:title" content="Sinco - Data Science & Analytics HTML5 Template">
		<meta name='og:image' content='images/assets/ogg.png'>
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#913BFF">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#913BFF">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#913BFF">
		<title>Sinco - Data Science & Analytics HTML5 Template</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css" media="all">

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->	
	</head>

	<body>
		<div class="main-page-wrapper">
			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<section>
				<div id="preloader">
					<div id="ctn-preloader" class="ctn-preloader">
						<div class="animation-preloader">
							<div class="icon"><img src="images/logo/logo_01.svg" alt="" class="m-auto d-block" width="38"></div>
							<div class="txt-loading mt-2">
								<span data-text-preloader="S" class="letters-loading">
									S
								</span>
								<span data-text-preloader="I" class="letters-loading">
									I
								</span>
								<span data-text-preloader="N" class="letters-loading">
									N
								</span>
								<span data-text-preloader="C" class="letters-loading">
									C
								</span>
								<span data-text-preloader="O" class="letters-loading">
									O
								</span>
							</div>
						</div>	
					</div>
				</div>
			</section>


			<!-- 
			=============================================
				Search
			============================================== 
			-->
			<div class="offcanvas offcanvas-top theme-search-form bg-three justify-content-center" tabindex="-1" id="offcanvasTop">
				<button type="button" class="close-btn tran3s" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
				<div class="form-wrapper">
					<form action="#">
						<input type="text" placeholder="Search Keyword....">
					</form>
				</div> <!-- /.form-wrapper -->
			</div>


			<!-- 
			=============================================
				Theme Main Menu
			============================================== 
			-->
<?php include('header.php'); ?>
			<!-- /.theme-main-menu -->


			
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner">
				<div class="container">
					<h2 class="intro-title text-center">Get in Touch</h2>
					<ul class="page-breadcrumb style-none d-flex justify-content-center">
						<li><a href="index.html">Home</a></li>
						<li class="current-page">Contact</li>
					</ul>
				</div>
				<img src="images/shape/shape_38.svg" alt="" class="shapes shape-one">
				<img src="images/shape/shape_39.svg" alt="" class="shapes shape-two">
			</div> <!-- /.theme-inner-banner -->

			
			

			<!-- 
			=============================================
				Contact Section One
			============================================== 
			-->
			<div class="contact-section-one mb-170 lg-mb-120">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="address-block-two text-center mb-40 sm-mb-20">
								<div class="icon d-flex align-items-center justify-content-center m-auto"><img src="images/icon/icon_17.svg" alt=""></div>
								<h5 class="title">Our Address</h5>
								<p>1012 Pebda Parkway, Mirpur 2 <br>Dhaka, Bangladesh</p>
							</div> <!-- /.address-block-two -->
						</div>
						<div class="col-md-4">
							<div class="address-block-two text-center mb-40 sm-mb-20">
								<div class="icon d-flex align-items-center justify-content-center m-auto"><img src="images/icon/icon_18.svg" alt=""></div>
								<h5 class="title">Contact Info</h5>
								<p>Open a chat or give us call at <br><a href="tel:310.841.5500" class="call">310.841.5500</a></p>
							</div> <!-- /.address-block-two -->
						</div>
						<div class="col-md-4">
							<div class="address-block-two text-center mb-40 sm-mb-20">
								<div class="icon d-flex align-items-center justify-content-center m-auto"><img src="images/icon/icon_19.svg" alt=""></div>
								<h5 class="title">Live Support</h5>
								<p>live chat service <br><a href="#" class="webaddress">www.sincochat.com</a></p>
							</div> <!-- /.address-block-two -->
						</div>
					</div>
				</div>

				<div class="mt-100 lg-mt-70">
					<div class="container">
						<div class="row gx-xxl-5">
							<div class="col-lg-6 d-flex order-lg-last">
								<div class="form-style-one">
									<h3 class="form-title pb-40 lg-pb-20">Send Message.</h3>
									<form action="inc/contact.php" id="contact-form"  data-toggle="validator">
										<div class="messages"></div>
										<div class="row controls">
											<div class="col-12">
												<div class="input-group-meta form-group mb-30">
													<label>Name*</label>
													<input type="text" placeholder="Rashed Kabir" name="name" required="required" data-error="Name is required.">
													<div class="help-block with-errors"></div>
												</div>
											</div>
											
											<div class="col-12">
												<div class="input-group-meta form-group mb-30">
													<label>Email*</label>
													<input type="email" placeholder="rshdkabir@gmail.com" name="email" required="required" data-error="Valid email is required.">
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta form-group mb-30">
													<textarea placeholder="Your message*" name="message" required="required" data-error="Please,leave us a message."></textarea>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="col-12"><button class="btn-eight ripple-btn">Send Message</button></div>
										</div>
									</form>
								</div> <!-- /.form-style-one -->
							</div>

							<div class="col-lg-6 d-flex order-lg-first">
								<div class="map-area-one mt-10 me-lg-4 md-mt-50">
									<div class="mapouter">
										<div class="gmap_canvas">
											<iframe class="gmap_iframe" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=dhaka collage&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
										</div>
									</div>
								</div> <!-- /.map-area-one -->
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.contact-section-one -->




			<!-- 
			=============================================
				Fancy Short Banner Five
			============================================== 
			-->
			<div class="fancy-short-banner-five">
				<div class="container">
					<div class="bg-wrapper">
						<div class="row align-items-center">
							<div class="col-lg-6 text-center text-lg-start" data-aos="fade-right">
								<h3 class="pe-xxl-5 md-pb-20">Having any Query? Book an appointment.</h3>
							</div>
							<div class="col-lg-6 text-center text-lg-end" data-aos="fade-left">
								<a href="contact-us.html" class="msg-btn tran3s">Send Us Message</a>
							</div>
						</div>
					</div> <!-- /.bg-wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.fancy-short-banner-five -->

		

			<!--
			=====================================================
				Footer
			=====================================================
			-->
<?php include('footer.php'); ?>
			<!-- /.footer-style-four -->


			<button class="scroll-top">
				<i class="bi bi-arrow-up-short"></i>
			</button>
			
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="vendor/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AOS js -->
		<script src="vendor/aos-next/dist/aos.js"></script>
		<!-- Slick Slider -->
		<script src="vendor/slick/slick.min.js"></script>
		<!-- js Counter -->
		<script src="vendor/jquery.counterup.min.js"></script>
		<script src="vendor/jquery.waypoints.min.js"></script>
		<!-- Fancybox -->
		<script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<!-- validator js -->
    	<script src="vendor/validator.js"></script>

		<!-- Theme js -->
		<script src="js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>