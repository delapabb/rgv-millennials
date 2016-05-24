<?php get_header(); ?>

	<div class="page-wrap responsive-gutter">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<main class="row">

				<div class="small-12 xxxlarge-9 column">

					<article>

						<header>
							<h1><?php the_title(); ?></h1>
						</header>

						<ul class="menu share-links">
							<li>Share This</li>
							<li><a href="#" class="share-on-fb"><img class="icon-facebook" src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.svg" alt="Facebook"></a></li>
						</ul>


						
						<?php
						// Post Feature

						// check if the flexible content field has rows of data
						if( have_rows('post_feature') ):

						     // loop through the rows of data
						    while ( have_rows('post_feature') ) : the_row();

						        if( get_row_layout() == 'photo_gallery' ):

						        	$images = get_sub_field('images');

						        	if( $images ): ?>

						        		<div class="flexslider">
						        			<ul class="slides">

												<?php

								        		foreach( $images as $image ):

								        			echo '<li><img src="' . $image['sizes']['large'] . '" ></li>';

								        		endforeach; ?>

						        			</ul>

						        		</div>

						        	<?php

						        	endif;

						        endif;

						    endwhile;

						else  :

						    if (get_field('social_card_image')) { ?>

								<img class="featured-image" src="<?php the_field('social_card_image'); ?>">
						
							<?php }

						endif;

						?>

						<div class="content">
							<?php the_content(); ?>
						</div>

					</article>

				</div>

				<div class="small-12 xxxlarge-3 column">

					<?php get_template_part('sidebar'); ?>

				</div>

			</main>

		<?php endwhile; else : ?>

		<?php endif; ?>

	</div>

<?php get_footer();