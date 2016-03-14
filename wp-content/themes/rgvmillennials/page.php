<?php get_header(); ?>

	<div class="page-wrap responsive-gutter">

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

	</div>

<?php get_footer();