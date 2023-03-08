<!DOCTYPE html>
<html lang="en-US">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="description" content="This is DarkStar, see it live now!">
	<meta name="author" content="Skilltech Web Design">
	<meta name="keywords" content="DarkStar, dark theme, best dark theme, best dark html, best dark website design, best dark websites, dark web design, best html themes, best html templates, best websites, dark portfolio, dark creative, gsap theme, skilltech, skilltech web design"/>

	<meta property="og:title" content="DarkStar - The Ultimate Dark HTML Template"/>
	<meta property="og:description" content="Superior Dark Multipurpose Theme · $235 Added Value · Stunning Effects & Clean Code · Build a Website Today with DarkStar!"/>
	<meta property="og:image" content="assets/images/facebook-post-image-default.jpg"/>

	<meta property="og:site_name" content="SkilltechWebDesign.com"/>

	<title>DarkStar | Coming Soon Page</title>

	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="assets/images/apple-touch-icon-72x72-precomposed.png" sizes="72x72" />
	<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="assets/images/apple-touch-icon-114x114-precomposed.png" sizes="114x114" />
	<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="assets/images/apple-touch-icon-144x144-precomposed.png" sizes="144x144" />
	<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="assets/images/apple-touch-icon-precomposed.png" />

	<!-- Bootstrap CSS -->
	<link href="assets/vendor/bootstrap/5.1.3/bootstrap.min.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato:wght@100;300;400;700;900&family=Poppins:wght@200;300;400;600;700;800&family=Syncopate:wght@400;700&display=swap" rel="stylesheet">
	<!-- Icon Fonts -->
	<link href="assets/vendor/icomoon/icomoon.min.css" rel="stylesheet">
	
	<!-- Off Canvas Menu - Default Theme -->
	<link href="assets/vendor/offcanvas-nav/hc-offcanvas-nav.css" rel="stylesheet" />

	<!-- Theme CSS -->
	<link href="assets/css/theme.css" rel="stylesheet">
	<link href="assets/css/theme-colors.css" rel="stylesheet">

	<!-- Theme Preview Only CSS -->
	<link href="assets/css/theme-preview-color-styler.css" rel="stylesheet">

	<!-- jQuery -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>

	<!-- Slick (carousel) -->
	<link href="assets/vendor/slick/1.8.1/slick.css" rel="stylesheet">
	<link href="assets/vendor/slick/1.8.1/slick-theme-skilltech.css" rel="stylesheet">

	<!-- Simple Forms -->
	<link rel="stylesheet" href="assets/vendor/simple-forms/css/simple-forms-skilltech-mod.css">

</head>

<body class="sk__coming-soon-page dark-shade-1-bg static-simple-footer">

	<main id="primary" class="site-main">
	<?php  include_once("includes/header.php") ?>


		<div class="sk__logo-no-menu sk__fade-in-3 text-center">
			<img id="sk__main-logo" alt="Website logo." src="assets/images/logo-normal.png">
		</div>
		
		<div id="smooth-wrapper" class="pushable-content">
			<div id="smooth-content">


				<!-- Hero Section / Hero Slider
				================================================== -->
				<section class="sk__hero-section sk__fade-in-1 duration-10">
					<!-- Carousel -->
					<div id="sk__hero-carousel-slider" class="sk__static-carousel-slider carousel slide dark-shade-1-bg">
				
						<!-- Slides -->
						<div class="carousel-inner">

							<!-- Slide 1 -->
							<div class="carousel-item zooming active hero-slide-1 sk__hero-slider-item sk__image-back-cover">
								<section class="sk__parallax-background-section sk__hero-item-center-center">
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(assets/images/coming-soon-page.webp);"></div>

									<div class="container flex-helper-div"></div>

									<!-- Hero content -->
									<div class="container sk__supercontainer sk__main-slide-content text-center">

										<div class="row">
											<div class="col-xl-10 offset-xl-1">
												<span class="animated-element phase-1"></span>
												<span class="animated-element phase-1"></span>
												<div class="cover-text-wrapper">
													<h1 class="hero-h1 animated-element phase-1">Coming Soon</h1>
												</div>
												<div class="cover-text-wrapper">
													<h2 class="h2-regular thin animated-element phase-1">Subscribe to our newsletter and be the first to get the latest news</h2>
												</div>
											</div>
										</div>
									
										<div class="row">
											<div class="col col-md-6 offset-md-3 col-xl-4 offset-xl-4">
												<!-- Widget - Subscribe
												================================================== -->
												<div class="widget custom_subscribe_widget">
													<div class="sk__widget-inner">
														
														<!-- Preview Only Static Form -->
														<form class="sk__form sk__subscribe-form animated-element phase-2">
															<div class="form-group">
																<input type="email" name="the_email" placeholder="Enter email address*" tabindex="1">
															</div>
															<button type="submit" tabindex="2">SUB</button>
														</form>

														<!-- Real Working Form - Simple Forms V3 -->
														<!-- <div class="sf-wrapper">
															<form id="sk__subscribe-form-1" class="sk__form sk__subscribe-form animated-element phase-2" action="assets/vendor/simple-forms/sendmail.php" method="post">

																<div class="form-group">
																	<input type="text" name="email" placeholder="Enter email address*" class="validate-email" value="" tabindex="1">
																</div>

																<div class="form-submit">
																	<button type="submit" tabindex="2">SUB</button>
																</div>

																<div class="server-response"></div>

															</form>
														</div> -->

													</div>
												</div>
												<!-- /.custom_subscribe_widget -->
											</div>
										</div>

									</div>

									<!-- Social icons section -->
									<div class="container sk__supercontainer text-center">
										<div class="row">
											<div class="col col-md-6 offset-md-3 col-xl-4 offset-xl-4 px-0">
												<!-- Footer Social Icons Menu -->
												<?php  include_once("includes/social-link.php") ?>
											</div>
										</div>
									</div>

									<!-- Footer (inside hero)
									================================================== -->
									<div class="container sk__supercontainer position-relative">
										<footer class="sk__footer-simple">
											<div class="row footer-bottom">
												<div class="col-12 col-sm-6 col-lg-4 text-center text-sm-start">
													<h5>Skilltech Dark&#8198;star Web</h5>
												</div>
												<div class="col-12 col-lg-4 order-3 order-lg-2 text-center text-sm-start text-lg-center">
													<p class="p-footer-copyright">Copyright © 2022    <a href="http://www.skilltechwebdesign.com/" target="_blank">SkilltechWebDesign.com</a></p>
												</div>
												<div class="col-12 col-sm-6 col-lg-4 order-2 order-lg-3 text-center text-sm-end">
													<a class="footer-bottom-right-links" href="#" target="_blank">Privacy</a>
													<a class="footer-bottom-right-links" href="#" target="_blank">Terms</a>
													<a class="footer-bottom-right-links" href="#" target="_blank">Contact</a>
												</div>
											</div>
										</footer>
									</div>

								</section>
							</div>
							<!-- /.hero-slide-1 -->
				
						</div>
						
					</div>
					<!-- /#sk__hero-carousel-slider -->
				</section>
				<!-- /.sk__hero-section -->
				
				<section class="sk__parallax-background-section sk__parallax-fixer-section sk__parallax-fixer-ignore-height overflow-hidden" style="max-height: 0;">
					<div class="sk__parallax-background-element"></div>
				</section>


				<!-- Helper div for inserting before scripts
				================================================== -->
				<div class="sk__body-end"></div>

			</div>
			<!-- /#smooth-content -->

		</div>
		<!-- /#smooth-wrapper -->

	</main>
	<!-- /main#primary.site-main -->


	<!-- Scripts / Body End
	================================================== -->
	<!-- Vendor Scripts -->
	<script src="assets/vendor/bootstrap/5.1.3/bootstrap.min.js"></script>
	<script src="assets/vendor/offcanvas-nav/hc-offcanvas-nav.js"></script>
	<script src="assets/vendor/greensock/gsap.min.js"></script>
	<script src="assets/vendor/greensock/ScrollTrigger.min.js"></script>
	<script src="assets/vendor/greensock/ScrollSmoother.min.js"></script>
	<script src="assets/vendor/greensock/ScrollToPlugin.min.js"></script>
	<script src="assets/vendor/slick/1.8.1/slick.min.js"></script>
	<script src="assets/vendor/parallax/3.1.0/parallax.min.js"></script>

	<!-- Delivery Form Scripts -->
	<script src="assets/vendor/simple-forms/js/simple-forms-translations.js"></script>
	<script src="assets/vendor/simple-forms/js/simple-forms.min.js"></script>
	<script src="assets/js/form.js"></script>

	<!-- Main Theme JS File -->
	<script src="assets/js/theme.js"></script>

	<!-- Theme Preview Only Scripts -->
	<script src="assets/vendor/spectrum/spectrum.min.js"></script>
	<script src="assets/vendor/clipboard/clipboard.min.js"></script>
	<script src="assets/js/theme-preview-only.js"></script>

	<!-- Theme Preview Only CSS -->
	<link href="assets/vendor/spectrum/spectrum.min.css" rel="stylesheet">

</body>

</html>