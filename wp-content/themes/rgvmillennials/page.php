<?php get_header(); ?>

	<div class="page-wrap responsive-gutter">

		<?php if (is_user_logged_in()) { ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="column row">

					<header>
						<h1><?php the_title(); ?></h1>
					</header>

					<div class="content">
						<?php the_content(); ?>
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

	</div>

<?php get_footer();