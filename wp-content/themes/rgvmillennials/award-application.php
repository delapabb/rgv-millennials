<?php /* Template Name: Award Application */ 

get_header(); ?>

	<div class="page-wrap">

			<?php if (!is_user_logged_in()) { ?>

				<div class="page-header">
					<div class="row">
						<div class="small-12 columns text-center">
							<img class="rgvm-logo" src="<?php bloginfo('template_url'); ?>/images/rgvm-logo.svg" alt="RGV Millennials Logo">
						</div>
					</div>
				</div>

			<?php } ?>

		<div class="page-content pad-top">
			<div class="row">
				<div class="small-12 xxlarge-8 columns">
					<main role="main">
						
						<?php while ( have_posts() ) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<header class="entry-header">
									<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
								</header>

								<div class="entry-content">
									<?php the_content(); ?>
								</div>

							</article>

						<?php endwhile; ?>

					</main>
				</div>
				<div class="small-12 xxlarge-4 columns">
					<div class="hide-for-large">
						<hr>
					</div>
					<div class="application-sidebar">
						<h2>2016 Summit</h2>
						<a href="https://www.facebook.com/events/1065680763498418/" target="_blank">
							<img src="<?php bloginfo('template_url'); ?>/images/2016-summit-flyer.jpg" alt="2016 RGV Millennials Summit Flyer Invitation">
						</a>
						<div class="text-center">
							<a href="https://www.eventbrite.com/e/rgv-millennials-2016-summit-tickets-21846986926" class="button" target="_blank">Register To Attend</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

<?php get_footer();
