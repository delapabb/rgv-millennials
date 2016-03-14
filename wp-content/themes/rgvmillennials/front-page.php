<?php get_header(); ?>

	<div class="page-wrap">

		<div class="hero" style="background:url('<?php echo get_template_directory_uri(); ?>/images/hero-image.jpg');">
			<div class="row">
				<div class="small-12 columns">
					<img class="rgvm-logo" src="<?php echo get_template_directory_uri(); ?>/images/rgvm-logo.svg" alt="RGV Millennials">
					<div class="tagline">
						<p>RGV Millennials is an affinity group of United Way of Southern Cameron County led by young adults across the Rio Grande Valley promoting hands-on regional advancement of public polilcy, social progress, entrepreneurship, and education.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="millennial-banner">
			<div class="row">
				<div class="small-12 columns">
					<p class="linebreak-spans-on-large"><span>It Is Grassroots Regional Leadership</span> <span>By Rio Grande Valley Millennials</span></p>
				</div>
			</div>
		</div>

		<section class="event-teaser">
			<div class="row">
				<div class="small-12 columns">
					<header>
						<h2>Our Next Event</h2>
					</header>

					<?php
						$event_query_args = array( 'post_type' => 'events', 'p' => '95' ); 
						$event_query = new WP_Query($event_query_args);
					?>

					<?php if ($event_query->have_posts()): while($event_query->have_posts()): $event_query->the_post(); ?>

						<h3><?php the_title(); ?></h3>
						<div class="event-details">

							<?php if ( get_field('event_start_date') && get_field('event_end_date') ) { ?>
								<?php if ( get_field('event_start_date') == get_field('event_end_date') ) { ?>
									<p><?php the_field('event_start_date'); ?></p>
								<?php } else { ?>
									<p><?php the_field('event_start_date'); ?> to <?php the_field('event_end_date'); ?></p>
								<?php } ?>					
							<?php } elseif ( get_field('event_start_date') ) { ?>
								<p><?php the_field('event_start_date'); ?></p>
							<?php } elseif ( get_field('event_end_date') ) { ?>
								<p><?php the_field('event_end_date'); ?></p>
							<?php } ?>

							<?php if ( get_field('event_venue') ) { ?>
								<?php  	$event_map_array = get_field('event_map_link');
										$event_map_link = 'https://maps.google.com/maps?q=' . $event_map_array['address']; ?>
								<p><a class="map-link" href="<?php echo $event_map_link ?>" target="_blank">
										<?php the_field('event_venue') ?>
								</a></p>
							<?php } ?>

						</div>

						<a class="button" href="<?php the_permalink(); ?>">Attend The Summit</a>

					<?php endwhile; ?>

					<?php endif; ?>

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
								<p class="excerpt">This year, we will be recognizing one Millennial at our RGV Millennial Summit on March 23, 2016. This is the official application form to be considered for the award. All applicants will be highlighted at the summit, and the deadline for application is March 16, 2016.</p>
								<a class="button" href="<?php echo site_url(); ?>/2016millennial/">Highlight Your Work</a>
							</div>

							<ul class="menu share-links text-center">
								<li>Share This</li>
								<li><a href="#" class="share-on-fb"><img class="icon-facebook" src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.svg" alt="Facebook"></a></li>
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

	</div>

<?php get_footer();