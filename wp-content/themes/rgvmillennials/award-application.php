<?php /* Template Name: Award Application */ 

get_header(); ?>

	<div class="page-wrap responsive-gutter">

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
								<hr>
								<ul class="menu share-links text-right">
									<li>Share This</li>
									<li><a href="#" class="share-on-fb"><img class="icon-facebook" src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.svg" alt="Facebook"></a></li>
								</ul>

							</article>

						<?php endwhile; ?>

					</main>
				</div>
				<div class="small-12 xxlarge-4 columns">
					<?php get_template_part('sidebar'); ?>
				</div>
			</div>
		</div>

	</div>

<?php get_footer();
