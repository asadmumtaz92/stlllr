<?php

	echo '
		<footer class="dark-shade-2-bg position-relative">

			<div class="footer-background-container sk__absolute">
				<div class="sk__gradient-background-tint footer-background sk__absolute"></div>
			</div>
					
			<div class="container sk__supercontainer position-relative">

				<span class="divider sk__subtle-divider"></span>

				<div class="row footer-main text-center text-sm-start">
					<div class="col-sm-12 col-md-6 col-lg-4 footer-main-small-col widget_nav_menu">
						<h5>Our Office Info</h5>
						<ul>
							<li>
								<p style="color: gray; cursor: pointer">Al-Hussain Arcade, Office # 04</p>
							</li>
							<li>
								<p style="color: gray; cursor: pointer">Sector G, Bahria Enclave</p>
							</li>
							<li>
								<p style="color: gray; cursor: pointer">Islamabad, Pakistan</p>
							</li>
							<li>
								<p style="color: gray; cursor: pointer">+92 333 8444015</p>
							</li>
						</ul>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-4 footer-main-small-col widget_nav_menu">
						<h5>Page Navigation</h5>
						<ul>
							<li>
								<a href="index.php" class="footer-main-links gradient-links">Home</a>
							</li>
							<li>
								<a href="#" class="footer-main-links gradient-links">Our Services</a>
							</li>
							<li>
								<a href="#" class="footer-main-links gradient-links">Other Services</a>
							</li>
							<li>
								<a href="contact_us.php" class="footer-main-links gradient-links">Contact Us</a>
							</li>
						</ul>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-4 footer-main-small-col">
						<div class="row">
							<div class="col">
								<!-- Footer Social Icons Menu -->
								<section class="footer-socials-section">
									<h5>Follow Us</h5>
									<div class="footer-socials-inner">
										<div class="footer-socials">
											<a class="social-icons" href="#" target="_blank"><span><span class="icon-linkedin1"></span></span></a>
											<a class="social-icons" href="#" target="_blank"><span><span class="icon-facebook1"></span></span></a>
											<a class="social-icons" href="#" target="_blank"><span><span class="icon-twitter1"></span></span></a>
											<a class="social-icons" href="#" target="_blank"><span><span class="icon-instagram"></span></span></a>
										</div>
									</div>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<!-- Widget - Subscribe -->
								<div class="widget custom_subscribe_widget">
									<div class="sk__widget-inner">

										<!-- Preview Only Static Form -->
										<form class="sk__form sk__subscribe-form">
											<div class="form-group">
												<input type="email" name="the_email" placeholder="Enter email address*" tabindex="1">
											</div>
											<button type="submit" tabindex="2">SUB</button>
										</form>

										<!-- Real Working Form - Simple Forms V3 -->
										<!-- <div class="sf-wrapper">
										<form id="sk__subscribe-form-1" class="sk__form sk__subscribe-form" action="assets/vendor/simple-forms/sendmail.php" method="post">
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
				</div>

				<span class="divider sk__subtle-divider"></span>

				<div class="row footer-bottom">
					<div class="col-xs-12 col-sm-6 col-md-4 text-center text-sm-start">
						<h5 style="font-size:30px; line-spacing: 2px;">StlllR</h5>
					</div>
					<div class="col-12 col-md-4 order-xs-3 order-sm-3 order-md-2 text-center text-sm-start text-md-center">
						<p class="p-footer-copyright">Copyright © ' . date("Y") . ' <a href="http://www.stlllr.com/" target="_blank">stlllr.com</a></p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 order-sm-2 order-md-3 text-center text-sm-end" style="padding-right:30px;">
						<a class="footer-bottom-right-links" href="privacy-policy.php" target="_blank">Privacy</a>
						<a class="footer-bottom-right-links" href="terms-and-conditions.php" target="_blank">Terms</a>
					</div>
				</div>
			</div>

		</footer>
	';
?>
