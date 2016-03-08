<?php get_header(); ?>

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
					<a class="button" href="#">Register Now</a>
				</div>
			</div>
		</section>

		<section class="post teaser">
			<div class="row">
				<div class="small-12 xxxlarge-9 columns">
					<div class="get-involved">
						<header>
							<h2>Get Involved</h2>
						</header>
						<article>
							<div class="article-image">
								<header>
									<h3>2016 RGV Youth Entrepreneurship Award</h3>
								</header>
								<p class="date">March 1, 2016</p>
								<p class="excerpt">Nunc congue velit in urna cursus vehicula. Etiam id consequat ipsum, id volutpat purus. Integer venenatis leo lectus, et aliquet nisl interdum at. Nullam vestibulum ipsum vel elementum feugiat.</p>
								<a class="button" href="#">Be The First Winner</a>
							</div>
							<ul class="menu share-links">
								<li>Share This</li>
								<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.svg" alt="Share this article on Facebook."></a></li>
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
								<a class="button" href="#">Send Us A Message</a>
								<a class="button" href="#">Submit An Event</a>
								<a class="button" href="#">Follow On Facebook</a>
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

<?php get_footer();