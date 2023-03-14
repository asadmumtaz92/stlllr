<?php

    echo '
        <section id="contact-us" class="sk__contact-us sk__py-m sk__parallax-background-section sk__flex-center-y">
			<div class="sk__parallax-background-element sk__absolute sk__image-back-cover"></div>
			<div class="sk__tint sk__absolute"></div>
			<div class="container sk__powercontainer">
				<!-- Section Header -->
				<div class="row sk__contact-info sk__inner-header text-center">
					<div class="col-12 col-lg-10 offset-lg-1">
						<h1 class="h1-small">' . " Let's" . ' Start Creating</h1>
						<p class="p-v2">Want to start a project of this caliber but do not know where to start? Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
					</div>
				</div>
				<div class="row">
					<!-- Contact Form -->
					<div class="col-12 col-lg-10 offset-0 offset-lg-1 sk__contact-form-col d-flex justify-content-end">
						<div class="sk__contact-right text-center text-sm-start">

							<!-- Preview Only Static Form -->
							<form class="sk__form sk__contact-form">
								<div class="form-group">
									<input type="text" name="the_name" placeholder="Name*" tabindex="1">
								</div>
								<div class="form-group">
									<input type="email" name="the_email" placeholder="Email*" tabindex="2">
								</div>
								<div class="form-group">
									<textarea name="the_message" placeholder="Message*" tabindex="3"></textarea>
								</div>
								<button type="submit" tabindex="4">Submit</button>
							</form>

							<!-- Real Working Form - Simple Forms V3 -->
							<!-- <div class="sf-wrapper">
							<form id="contact-form-1" class="sk__form sk__contact-form" action="assets/vendor/simple-forms/sendmail.php" method="post">
								<div class="form-group">
									<input type="text" name="name" value="" class="validate-name" placeholder="Name*" min="2" required>
								</div>
								<div class="form-group">
									<input type="text" name="email" class="validate-email" placeholder="Email*" value="">
								</div>		
								<div class="form-group">
									<textarea name="message" placeholder="Message*" required></textarea>
								</div>
								<div class="form-submit">
									<button type="submit">Send now</button>
								</div>
								<div class="server-response"></div>
							</form>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</section>
    ';
?>
