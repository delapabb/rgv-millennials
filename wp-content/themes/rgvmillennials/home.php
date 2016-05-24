<?php get_header(); ?>

	<div class="page-wrap responsive-gutter">

			<main class="row">

				<div class="small-12 xxxlarge-9 column">

					<div class="column row">
						<header>
							<h1><?php wp_title('',true,''); ?></h1>
						</header>
					</div>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<article>
							<header>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</header>

							<?php if (get_field('social_card_image')) { ?>
								<a href="<?php the_permalink(); ?>">
									<img class="featured-image" src="<?php the_field('social_card_image'); ?>">
								</a>
							<?php } ?>

							<div class="content">
								<?php if (get_field('social_card_description')) { ?>
									<p><?php the_field('social_card_description'); ?></p>
								<?php } ?>
							</div>
					
							<a class="button read-more" href="<?php the_permalink(); ?>">Read more</a>

						</article>

					<?php endwhile; else : ?>

					<?php endif; ?>

				</div>

				<div class="small-12 xxxlarge-3 column">

					<?php get_template_part('sidebar'); ?>

				</div>

			</main>

	</div>

<?php get_footer();