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

			<div class="agenda">
				<section class="column row">
					<header>
						<h2><?php the_field('agenda_section_title') ?></h2>
					</header>

					<div class="schedule">
						<?php if( have_rows('event_agenda') ) : while ( have_rows('event_agenda') ) : the_row(); ?>

							<div class="entry">

								<?php if( get_row_layout() == 'discussion_panel' ) : ?>

									<h3><?php the_sub_field('discussion_panel_title') ?></h3>

									<?php if (get_sub_field('discussion_panel_start_time') && get_sub_field('discussion_panel_end_time')) { ?>
										<p class="title"><?php the_sub_field('discussion_panel_start_time') ?> to <?php the_sub_field('discussion_panel_end_time') ?></p>
									<?php } elseif (get_sub_field('discussion_panel_start_time')) { ?>
										<p class="title"><?php the_sub_field('discussion_panel_start_time') ?></p>
									<?php } elseif (get_sub_field('discussion_panel_end_time')) { ?>
										<p class="title"><?php the_sub_field('discussion_panel_end_time') ?></p>
									<?php } ?>

									<?php if (get_sub_field('discussion_panel_detail')) { ?>
										<p><?php the_sub_field('discussion_panel_detail'); ?></p>
									<?php } ?>

									<?php if (have_rows('panelists')) : ?>

										<p class="title">Panelists</p>

										<ul class="participant-list">

											<?php while (have_rows('panelists')) : the_row(); ?>

												<li class="name"><?php the_sub_field('panelist_name'); ?></li>
												<li class="detail"><?php the_sub_field('panelist_detail'); ?></li>

											<?php endwhile; ?>

										</ul>

									<?php endif; ?>

									<?php if (have_rows('moderators')) : ?>

										<p class="title">Moderators</p>

										<ul class="participant-list">

											<?php while (have_rows('moderators')) : the_row(); ?>

												<li class="name"><?php the_sub_field('moderator_name'); ?></li>
												<li class="detail"><?php the_sub_field('moderator_detail'); ?></li>

											<?php endwhile; ?>

										</ul>

									<?php endif; ?>

								<?php elseif( get_row_layout() == 'presentation' ) : ?>
								
									<h3><?php the_sub_field('presentation_title') ?></h3>

									<?php if (get_sub_field('presentation_start_time') && get_sub_field('presentation_end_time')) { ?>
										<p class="title"><?php the_sub_field('presentation_start_time') ?> to <?php the_sub_field('presentation_end_time') ?></p>
									<?php } elseif (get_sub_field('presentation_start_time')) { ?>
										<p class="title"><?php the_sub_field('presentation_start_time') ?></p>
									<?php } elseif (get_sub_field('presentation_end_time')) { ?>
										<p class="title"><?php the_sub_field('presentation_end_time') ?></p>
									<?php } ?>

									<?php if (get_sub_field('presentation_detail')) { ?>
										<p><?php the_sub_field('presentation_detail'); ?></p>
									<?php } ?>

									<?php if (have_rows('presenters')) : ?>

										<p class="title">Presenters</p>

										<ul class="participant-list">

											<?php while (have_rows('presenters')) : the_row(); ?>

												<li class="name"><?php the_sub_field('presenter_name'); ?></li>
												<li class="detail"><?php the_sub_field('presenter_detail'); ?></li>

											<?php endwhile; ?>

										</ul>

									<?php endif; ?>

								</div>

							<?php endif; ?>

						<?php endwhile; ?>

						<?php else : ?>
							<!-- No flexible layouts were created -->
						<?php endif; ?>
					</div>

				</section>
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