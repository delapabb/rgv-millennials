<?php get_header(); ?>

	<?php if (is_user_logged_in()) { ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="hero-banner image-background" 
				<?php if (get_field('event_background_image_toggle')) { ?>
					style="background:url('<?php the_field('event_hero_image'); ?>')";
				<?php } ?>
			>
				<div class="image-color">

					<header class="column row">
						<h1><?php the_title() ?></h1>
						
						<?php if ( get_field('event_start_date') == get_field('event_end_date') ) { ?>

							<p><?php the_field('event_start_date'); ?></p>

							<?php if ( get_field('event_start_time') && get_field('event_end_time') ) { ?>

								<p><?php the_field('event_start_time'); ?> to <?php the_field('event_end_time'); ?></p>

							<?php } ?>

						<?php } else { ?>

							<p><?php the_field('event_start_date'); ?> to <?php the_field('event_end_date'); ?></p>

						<?php } ?>

						<?php if ( get_field('event_venue') ) { ?>
							<?php 
								$event_map_array = get_field('location');
								$event_map_link = 'https://maps.google.com/maps?q=' . $event_map_array['address'];
							?>
							<p><a class="map-link" href="<?php echo $event_map_link ?>" target="_blank"><?php the_field('event_venue') ?></a></p>
						<? } ?>
						<?php if ( get_field('event_city') ) { ?><p><?php the_field('event_city') ?></p><? } ?>
						<div class="intro-text">
							<?php if ( get_field('event_intro_text') ) { ?><p><?php the_field('event_intro_text') ?></p><? } ?>
						</div>

						<?php if (get_field('event_intro_cta_toggle')) { ?>
							<a class="button" href="<?php the_field('event_intro_cta_button_link') ?>" target="_blank"><?php the_field('event_intro_cta_button_text') ?></a>
						<?php } ?>

					</header>

				</div>
			</div>

		<?php endwhile; else : ?>

		<?php endif; ?>

	<?php } else { ?>

		<div class="landing">
			<div class="column row">
				<img class="rgvm-logo" src="<?php echo get_template_directory_uri(); ?>/images/rgvm-logo.svg" alt="RGV Millennials">
			</div>
		</div>

	<?php } ?>

<?php get_footer();