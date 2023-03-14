<?php

	echo '
		<!-- Master Curtain Effect -->
		<section class="sk__master-curtain">
			<div class="mcurtain mcurtain-center"></div>
			<!--div class="mcurtain mcurtain-left"></div>
			<div class="mcurtain mcurtain-right"></div-->
		</section>

		<!-- Back to top button -->
		<div class="sk__back-to-top-wrap">
			<a class="sk__back-to-top" href="#smooth-content">
				<span class="sk__back-to-top"></span>
			</a>
		</div>

		<!-- Navigation Menu -->
		<div class="sk__mobile-menu-bar"></div>

		<!-- Mobile Menu Logo -->
		<a class="sk__mobile-main-logo" href="index.php" style="margin-left: 10px">
			<img alt="Website logo." src="assets/logo/logo_white.png">
		</a>

		<nav id="main-nav" style="opacity: 0;" class="sk__menu navbar sk__navbar navbar-expand-lg navbar-dark static-top">

			<!-- Desktop Menu Logo -->
			<a class="navbar-brand" href="index.php" style="margin-left: 10px">
				<img id="sk__main-logo" alt="Website logo." src="assets/logo/logo_white.png">
			</a>


			<!-- The Menu -->
			<ul class="navbar-nav ms-auto">

				<!-- Mobile Menu Logo (only use if "close" buttons are set to false in JS) -->
				<li data-nav-custom-content class="custom-content sk__mobile-menu-logo">
					<a class="sk__mobile-navbar-brand" href="#">
						<img alt="Website mobile logo." src="assets/logo/logo_white.png">
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="index.php"><span class="sk__menu-icon">
						<span class="icon-home"></span></span>Home
					</a>
				</li>
				
				<!-- Regular Menu Items Start -->
				<li class="nav-item menu-item-has-children">
					<a class="nav-link hvr-underline-from-center" href="#">
						<span class="sk__menu-icon"><span class="icon-th"></span></span>Our Services
					</a>
					<ul class="sk__submenu-ul">
						<li class="nav-item">
							<a class="nav-link active" href="index.php"><span class="sk__menu-icon"><span class="icon-user-circle"></span></span>Wordpress Development</a><
						/li>
						<li class="nav-item">
							<a class="nav-link" href="home-portfolio.php"><span class="sk__menu-icon"><span class="icon-th"></span></span>Mobile App Developments</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="home-morphing-hover-hero-image.php"><span class="sk__menu-icon"><span class="icon-codepen1"></span></span>Admin Panel development</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="home-mega-text-video.php"><span class="sk__menu-icon"><span class="icon-th"></span></span>API Development</a><
						/li>
						<li class="nav-item">
							<a class="nav-link" href="home-parallax.php"><span class="sk__menu-icon"><span class="icon-object-group"></span></span>Ui/Ux Development</a>
						</li>

					</ul>
				</li>

				<li class="nav-item menu-item-has-children">
					<a class="nav-link hvr-underline-from-center" href="#">
						<span class="sk__menu-icon"><span class="icon-th"></span></span>Other Services
					</a>
					<ul class="sk__submenu-ul">
						<li class="nav-item">
							<a class="nav-link" href="page-about-us.php"><span class="sk__menu-icon"><span class="icon-user-circle"></span></span>SEO</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="page-services.php"><span class="sk__menu-icon"><span class="icon-th"></span></span>E-Commerce</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="page-service-item.php"><span class="sk__menu-icon"><span class="icon-codepen1"></span></span>Social Media</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="page-portfolio.php"><span class="sk__menu-icon"><span class="icon-th"></span></span>Website Content</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="page-portfolio-item.php"><span class="sk__menu-icon"><span class="icon-object-group"></span></span> Advertising Marketing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="page-portfolio-item-classic-gallery.php"><span class="sk__menu-icon"><span class="icon-object-group"></span></span> Logo Design</a>
						</li>
					</ul>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="contact_us.php">
						<span class="sk__menu-icon"><span class="icon-phone"></span></span>Contact Us
					</a>
				</li>

				<!--li class="nav-item menu-item-has-children">
					<a class="nav-link hvr-underline-from-center" href="#">
						<span class="sk__menu-icon"><span class="icon-th"></span></span>Elements
					</a>
					<ul class="sk__submenu-ul">
						<li class="nav-item menu-item-has-children">
							<a class="nav-link" href="#">
								<span class="sk__menu-icon green sk__icon-popup">
									<span class="icon-usd"></span>
									<span class="icon-usd"></span>
									<span class="sk__icon-popup-text">$235 Added Value</span>
								</span>Premium & Extras
							</a>
							<ul class="sk__sub-submenu-ul">
								<li class="nav-item">
									<a class="nav-link" href="elements-gsap.php"><span class="sk__menu-icon green sk__icon-popup"><span class="icon-usd"></span><span class="icon-usd"></span><span class="sk__icon-popup-text">Best Premium Animation Engine on the market. $199 Added Value</span></span>Greensock GSAP</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="elements-forms.php"><span class="sk__menu-icon green sk__icon-popup"><span class="icon-usd"></span><span class="icon-usd"></span><span class="sk__icon-popup-text">Fully Working Forms! $14 Added Value</span></span>Contact Forms</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="elements-forms.php#subscribe-form"><span class="sk__menu-icon green sk__icon-popup"><span class="icon-usd"></span><span class="icon-usd"></span><span class="sk__icon-popup-text">Fully Working Forms! $14 Added Value</span></span>Subscribe Forms</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="elements-mockups.php"><span class="sk__menu-icon green sk__icon-popup"><span class="icon-usd"></span><span class="icon-usd"></span><span class="sk__icon-popup-text">Premium Mockups included, $22 Added Value</span></span>PSD & AI Mockups</a>
								</li>
							</ul>
						</li>
						<li class="nav-item menu-item-has-children">
							<a class="nav-link" href="#"><span class="sk__menu-icon"><span class="icon-codepen1"></span></span>Sliders & Hero</a>
							<ul class="sk__sub-submenu-ul">
								<li class="nav-item">
									<a class="nav-link" href="elements-hero-combo-slider.php"><span class="sk__menu-icon"><span class="icon-codepen1"></span></span>Combo Slider</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="elements-hero-fullscreen-video.php"><span class="sk__menu-icon"><span class="icon-play-circle"></span></span>Full Screen Video</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="elements-hero-fullscreen-video-yt.php"><span class="sk__menu-icon"><span class="icon-youtube-play"></span></span>Full Screen Video (YT)</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="elements-hero-slide-show.php"><span class="sk__menu-icon"><span class="icon-photo"></span></span>Hero Slide Show</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="elements-hero-mega-text-video.php"><span class="sk__menu-icon"><span class="icon-cc-jcb"></span></span>Mega Text (Video)</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="elements-hero-mega-text-image.php"><span class="sk__menu-icon"><span class="icon-cc-jcb"></span></span>Mega Text (Image)</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="elements-hero-parallax-strips.php"><span class="sk__menu-icon"><span class="icon-view_week"></span></span>Parallax Strips Hero</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="elements-hero-animated-headline.php"><span class="sk__menu-icon"><span class="icon-play_arrow"></span></span>Animated Hero Headline</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="elements-hero-image.php"><span class="sk__menu-icon"><span class="icon-photo"></span></span>Hero Image</a>
								</li>
							</ul>
						</li>
						<li class="nav-item menu-item-has-children">
							<a class="nav-link" href="elements-content.php"><span class="sk__menu-icon"><span class="icon-th"></span></span>Content Sections</a>
							<ul class="sk__sub-submenu-ul">
								<li>
									<a class="nav-link" href="elements-content.php"><span class="sk__menu-icon"><span class="icon-th"></span></span>Content Sections</a>
								</li>
								<li>
									<a class="nav-link" href="elements-content.php#animated-counters-section"><span class="sk__menu-icon"><span class="icon-spinner1"></span></span>Animated Counters</a>
								</li>
								<li>
									<a class="nav-link" href="elements-content.php#cta-section"><span class="sk__menu-icon"><span class="icon-commenting-o"></span></span>Call To Action (CTA)</a>
								</li>
								<li>
									<a class="nav-link" href="elements-content.php#contact-section"><span class="sk__menu-icon"><span class="icon-envelope-open-o"></span></span>Contact Us</a>
								</li>
								<li>
									<a class="nav-link" href="elements-content.php#features-section"><span class="sk__menu-icon"><span class="icon-table2"></span></span>Features</a>
								</li>
								<li>
									<a class="nav-link" href="elements-content.php#icon-boxes-section"><span class="sk__menu-icon"><span class="icon-th"></span></span>Icon Boxes</a>
								</li>
								<li>
									<a class="nav-link" href="elements-content.php#image-boxes-section"><span class="sk__menu-icon"><span class="icon-th"></span></span>Image Boxes</a>
								</li>
								<li>
									<a class="nav-link" href="elements-content.php#partners-section"><span class="sk__menu-icon"><span class="icon-slideshare"></span></span>Partners</a>
								</li>
								<li>
									<a class="nav-link" href="elements-content.php#portfolio-section"><span class="sk__menu-icon"><span class="icon-th"></span></span>Portfolio</a>
								</li>
								<li>
									<a class="nav-link" href="elements-content.php#skills-section"><span class="sk__menu-icon"><span class="icon-server"></span></span>Skills</a>
								</li>
								<li>
									<a class="nav-link" href="elements-content.php#testimonials-section"><span class="sk__menu-icon"><span class="icon-comments"></span></span>Testimonials</a>
								</li>
							</ul>
						</li>
						<li class="nav-item menu-item-has-children">
							<a class="nav-link" href="elements-parallax-content.php"><span class="sk__menu-icon"><span class="icon-codepen1"></span></span>Parallax Sections</a>
							<ul class="sk__sub-submenu-ul">
								<li>
									<a class="nav-link" href="elements-parallax-content.php"><span class="sk__menu-icon"><span 	class="icon-codepen1"></span></span>Parallax Sections</a>
								</li>
								<li>
									<a class="nav-link" href="elements-parallax-content.php#about-us-section"><span class="sk__menu-icon"><span class="icon-id-card-o"></span></span>About Us (Parallax)</a>
								</li>
								<li>
									<a class="nav-link" href="elements-parallax-content.php#animated-counters-section"><span class="sk__menu-icon"><span class="icon-spinner1"></span></span>Anim. Counters (Parallax)</a>
								</li>
								<li>
									<a class="nav-link" href="elements-parallax-content.php#cta-parallax-section"><span class="sk__menu-icon"><span class="icon-commenting-o"></span></span>CTA Section (Parallax)</a>
								</li>
								<li>
									<a class="nav-link" href="elements-parallax-content.php#contact-parallax-section"><span class="sk__menu-icon"><span class="icon-envelope-o"></span></span>Contact Us (Parallax)</a>
								</li>
								<li>
									<a class="nav-link" href="elements-parallax-content.php#featured-project-section"><span class="sk__menu-icon"><span class="icon-photo"></span></span>Featured Project</a>
								</li>
								<li>
									<a class="nav-link" href="elements-parallax-content.php#features-parallax-section"><span class="sk__menu-icon"><span class="icon-object-ungroup"></span></span>Features (Parallax)</a>
								</li>
								<li>
									<a class="nav-link" href="elements-parallax-content.php#icon-boxes-parallax-section"><span class="sk__menu-icon"><span class="icon-th"></span></span>Icon Boxes (Parallax)</a>
								</li>
								<li>
									<a class="nav-link" href="elements-parallax-content.php#image-boxes-parallax-section"><span class="sk__menu-icon"><span class="icon-th"></span></span>Image Boxes (Parallax)</a>
								</li>
								<li>
									<a class="nav-link" href="elements-parallax-content.php#laptop-section"><span class="sk__menu-icon"><span class="icon-laptop1"></span></span>Laptop Section</a>
								</li>
								<li>
									<a class="nav-link" href="elements-parallax-content.php#parallax-text-section"><span class="sk__menu-icon"><span class="icon-clone"></span></span>Parallax Text</a>
								</li>
								<li>
									<a class="nav-link" href="elements-parallax-content.php#parallax-images-section"><span class="sk__menu-icon"><span class="icon-object-ungroup"></span></span>Parallax Images</a>
								</li>
								<li>
									<a class="nav-link" href="elements-parallax-content.php#parallax-videos-section"><span class="sk__menu-icon"><span class="icon-ondemand_video"></span></span>Parallax Video</a>
								</li>
								<li>
									<a class="nav-link" href="elements-parallax-content.php#partners-parallax-section"><span class="sk__menu-icon"><span class="icon-slideshare"></span></span>Partners</a>
								</li>
								<li>
									<a class="nav-link" href="elements-parallax-content.php#rings-section"><span class="sk__menu-icon"><span class="icon-bullseye"></span></span>Rings Section</a>
								</li>
								<li>
									<a class="nav-link" href="elements-parallax-content.php#skills-parallax-section"><span class="sk__menu-icon"><span class="icon-server"></span></span>Skills (Parallax)</a>
								</li>
								<li>
									<a class="nav-link" ref="elements-parallax-content.php#testimonials-parallax-section"><span class="sk__menu-icon"><span class="icon-server"></span></span>Testimonials (Parallax)</a>
								</li>
							</ul>
						</li>
						<li class="nav-item menu-item-has-children">
							<a class="nav-link" href="#"><span class="sk__menu-icon"><span class="icon-photo"></span></span>Galleries</a>
							<ul class="sk__sub-submenu-ul">
								<li>
									<a class="nav-link" href="elements-galleries.php#classic-gallery"><span class="sk__menu-icon"><span class="icon-photo"></span></span>Classic Gallery</a>
								</li>
								<li>
									<a class="nav-link" href="elements-galleries.php#gallery-section"><span class="sk__menu-icon"><span class="icon-newspaper-o"></span></span>Gallery Section</a>
								</li>
								<li>
									<a class="nav-link" href="elements-galleries.php#parallax-gallery"><span class="sk__menu-icon"><span class="icon-square-o"></span></span>Parallax Gallery</a>
								</li>
							</ul>
						</li>
						<li class="nav-item menu-item-has-children">
							<a class="nav-link" href="#"><span class="sk__menu-icon"><span class="icon-gears"></span></span>Footers</a>
							<ul class="sk__sub-submenu-ul">
								<li class="nav-item">
									<a class="nav-link" href="elements-footer-simple.php"><span class="sk__menu-icon"><span class="icon-square"></span></span>Footer - Simple</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="elements-footer-full.php"><span class="sk__menu-icon"><span class="icon-table2"></span></span>Footer - Full</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="elements-typography.php"><span class="sk__menu-icon"><span class="icon-font1"></span></span>Typography</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="elements-icon-fonts.php"><span class="sk__menu-icon"><span class="icon-th"></span></span>Icon Fonts</a>
						</li>
					</ul>
				</li-->
				<!-- Regular Menu Items End -->

				<!-- Mobile Menu Social Icons -->
				<li data-nav-custom-content class="custom-content sk__menu-socials">
					<section class="footer-socials-section">
						<h3><strong>Connect</strong> with us</h3>
						<div class="footer-socials-inner">
							<div class="footer-socials">
								<a class="social-icons" href="#" target="_blank"><span><span class="icon-linkedin1"></span></span></a>
								<a class="social-icons" href="#" target="_blank"><span><span class="icon-facebook1"></span></span></a>
								<a class="social-icons" href="#" target="_blank"><span><span class="icon-twitter1"></span></span></a>
								<a class="social-icons" href="#" target="_blank"><span><span class="icon-instagram1"></span></span></a>
							</div>
						</div>
					</section>
				</li>

			</ul>
		</nav>
		<!-- /.sk__menu -->
	'
?>
