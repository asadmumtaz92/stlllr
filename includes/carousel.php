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
					<button type="button" data-bs-target="#sk__hero-carousel-slider" data-bs-slide-to="3" aria-label="Slide 4"></button>
				</div>
				
				<!-- Slides -->
				<?php  include_once("includes/carousel.php") ?>

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
			<!-- /#sk__hero-carousel-slider -->
		</section>
		<!-- /.sk__hero-section -->
    '
?>
