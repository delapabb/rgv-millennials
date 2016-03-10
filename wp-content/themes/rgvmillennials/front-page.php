<?php get_header(); ?>

	<div class="page-wrap">

		<?php if (is_user_logged_in()) { ?>

			<div class="hero" style="background:url('<?php echo get_template_directory_uri(); ?>/images/hero-image.jpg');">
				<div class="row">
					<div class="small-12 columns">
						<img class="rgvm-logo" src="<?php echo get_template_directory_uri(); ?>/images/rgvm-logo.svg" alt="RGV Millennials">
						<div class="tagline">
							<p>RGV Millennials is an initiative led by young adults across the Rio Grande Valley promoting hands-on regional advancement of public polilcy, social progress, entrepreneurship, and education.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="millennial-banner">
				<div class="row">
					<div class="small-12 columns">
						<p class="linebreak-spans-on-large"><span>It's Grassroots Regional Leadership</span> <span>By Rio Grande Valley Millennials</span></p>
					</div>
				</div>
			</div>

			<section class="event-teaser">
				<div class="row">
					<div class="small-12 columns">
						<header>
							<h2>Our Next Event</h2>
						</header>
						<h3>2016 RGV Millennials Summit</h3>
						<div class="event-details">
							<p>March 23, 2016</p>
							<p>Edinburg Conference Center at Renaissance</p>
						</div>
						<a class="button" href="<?php echo site_url(); ?>/events/2016-millennial-summit/">Attend The Summit</a>
					</div>
				</div>
			</section>

			<section class="post teaser">
				<div class="row">
					<div class="small-12 xxxlarge-9 columns">
						<div class="get-involved">
							<header>
								<h2>Latest</h2>
							</header>
							<article>
								<div class="article-image">
									<header>
										<h3>RGV Millennial of The Year Award</h3>
									</header>
									<p class="excerpt">This year, we’ll be recognizing one Millennial at our RGV Millennial Summit on March 23, 2016. This is the official application form to be considered for the award. All applicants will be highlighted at the summit, and the deadline for application is March 16, 2016.</p>
									<a class="button" href="<?php echo site_url(); ?>/2016millennial/">Highlight Your Work</a>
								</div>

								<ul class="menu share-links">
									<li>Share This</li>
									<li><div class="fb-share-button" data-href="http://www.rgvmillennials.org/2016millennial" data-layout="button"></div></li>
								</ul>
							</article>
						</div>
					</div>
					<div class="small-12 xxxlarge-3 columns">
						<div class="reach-out">
							<aside>
								<header>
									<h2>Reach Out</h2>
								</header>
								<div class="links">
									<a class="button" href="<?php echo site_url(); ?>/contact/">Send Us A Message</a>
									<a class="button" href="https://www.facebook.com/rgvmillennials" target="_blank">Facebook</a>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</section>

		<?php } else { ?>

			<div class="landing">
				<div class="column row">
					<img class="rgvm-logo" src="<?php echo get_template_directory_uri(); ?>/images/rgvm-logo.svg" alt="RGV Millennials">
				</div>
			</div>

		<?php } ?>

	</div>

<?php get_footer();