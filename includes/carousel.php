<?php
	echo '
		<section class="sk__hero-section">
			<!-- Carousel -->
			<div id="sk__hero-carousel-slider" class="carousel slide dark-shade-1-bg">
				<!-- Hero Dots Navigation Bootstrap 5 -->
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#sk__hero-carousel-slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#sk__hero-carousel-slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#sk__hero-carousel-slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>

				<!-- Slides -->
				<div class="carousel-inner">
					<!-- Slide 1 -->
					<div class="carousel-item zooming active hero-slide-1 sk__hero-slider-item sk__image-back-cover">
						<section class="sk__parallax-background-section sk__hero-item-theme-style">
							<!-- Parallax background -->
							< <div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(assets/carousel_images/codding.webp);"></div>
							<div class="flex-helper-div"></div>

							<!-- Main hero heading -->
							<div class="hero-h1-box">
								<div class="cover-text-wrapper">
									<h1 class="hero-h1 animated-element phase-1 text-center text-md-start text-white">Website <br />Development</h1>
								</div>
							</div>

							<!-- Bottom Left box -->
							<div class="hero-box-bottom-left text-center text-sm-start">
								<a class="btn btn-outline-light animated-element phase-1 mb-4" href="#services" role="button">CHECK OUR SERVICES</a>

								<div class="cover-text-wrapper">
									<h3 class="animated-element phase-1 text-center text-sm-start text-white">
										MAKE A MASSIVE <strong>STEP</strong> FORWARD
									</h3>
								</div>
								<div class="cover-text-wrapper">
									<p class="hero-box-p animated-element phase-1 text-center text-sm-start" style="color: #FFFFFF !important; font-size: 14px;">
										We develop websites and mobile apps that will inspire your customers and 
										increase your business all at the while making sure that the innovative 
										needs of the global market are met.
									</p>
								</div>
							</div>
							<!-- Bottom Right Box -->
							<div class="hero-box-bottom-right text-center text-sm-start">
								<div class="cover-text-wrapper">
									<span class="big-abbreviated-heading animated-element phase-2 text-white">Beyond.</span>
								</div>
								<div class="cover-text-wrapper">
									<p class="animated-element phase-2 text-white" style="font-size: 25px;line-height: 23px;">
										your opportunities above & 
									</p>
								</div>
								<div class="cover-text-wrapper">
									<h4 class="animated-element phase-2 text-white" style="font-size: 38px;">Develop</h4>
								</div>
							</div>
						</section>
					</div>
					<!-- /.hero-slide-1 -->

					<!-- Slide 2 -->
					<div class="carousel-item zooming hero-slide-2 sk__hero-slider-item sk__image-back-cover">
						<section class="sk__parallax-background-section sk__hero-item-center-center">
							<div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(assets/carousel_images/mobile_app.webp);"></div>
							<!-- Hero content -->
							<div class="mb-2 text-center">
								<span class="animated-element phase-1"></span>
								<span class="animated-element phase-1"></span>
								<div class="cover-text-wrapper">
									<h1 class="hero-h1 animated-element phase-1">Mobile Apps</h1>
									<h1 class="hero-h1 animated-element phase-1">Development</h1>
								</div>
								<div class="cover-text-wrapper">
									<h2 class="h2-regular thin animated-element phase-1" style="color: #72063c; background-color:#FFFFFF88; font-weight: 500; padding-left: 10px; padding-right: 10px">
										We develop cross platfor applications iOS, Android & Windows.
									</h2>
								</div>
								<div class="cover-text-wrapper">
									<a class="btn btn-lg btn-outline-light animated-element phase-1" href="mobile_app_development.php" role="button">OUR SERVICES</a>
								</div>
							</div>
						</section>
					</div>
					<!-- /.hero-slide-2 -->

					<!-- Slide 3 -->
					<div class="carousel-item zooming hero-slide-3 sk__hero-slider-item sk__image-back-cover">
						<section class="sk__parallax-background-section sk__hero-item-theme-style">
										
							<!-- Parallax background -->
							<div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(assets/carousel_images/adminpanel.webp);"></div>
							<div class="flex-helper-div"></div>

							<!-- Main hero heading -->
							<div class="hero-h1-box">
								<div class="cover-text-wrapper">
									<h1 class="hero-h1 animated-element phase-1 text-center text-md-start text-white">Admin <br >Panel</h1>
								</div>
							</div>
							<!-- Bottom Left box -->
							<div class="hero-box-bottom-left text-center text-sm-start">
								<!--a class="btn btn-outline-light animated-element phase-1 mb-4" href="#" role="button">OPEN PROJECT</a-->

								<div class="cover-text-wrapper">
									<h3 class="animated-element phase-1 text-center text-sm-start text-white">CUSTOMIZE <strong>SET UP</strong></h3>
								</div>
								<div class="cover-text-wrapper">
									<p class="hero-box-p animated-element phase-1 text-center text-sm-start text-white" style="color: white; font-size: 14px;">
										An admin panel, also known as an administrative panel, is a web-based interface 
										that allows authorized users to manage a website or web application. This 
										interface typically requires authentication, meaning that the user must log in 
										with a username and password to access the administrative features.
									</p>
								</div>
							</div>
							<!-- Bottom Right Box -->
							<div class="hero-box-bottom-right text-center text-sm-start">
								<div class="cover-text-wrapper">
									<span class="big-abbreviated-heading animated-element phase-2 text-white">Develop</span>
								</div>
								<div class="cover-text-wrapper">
									<p class="animated-element phase-2 text-white" style="font-size: 25px;line-height: 23px;">
										your opportunities above &
									</p>
								</div>
								<div class="cover-text-wrapper">
									<h4 class="animated-element phase-2 text-white" style="font-size: 38px;">Beyond.</h4>
								</div>
							</div>
						</section>
					</div>
					<!-- /.hero-slide-3 -->
				</div>

				<!-- Arrows Bootstrap 5 -->
				<button class="carousel-control-prev" type="button" data-bs-target="#sk__hero-carousel-slider" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#sk__hero-carousel-slider" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>
	';
?>
