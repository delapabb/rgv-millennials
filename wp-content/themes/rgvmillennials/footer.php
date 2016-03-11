<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RGV_Millennials
 */

?>

			<footer class="site-footer">
				<div class="column row">
					<a href="http://www.tgmedia.io" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/powered-by-transient-grammar.svg" alt="Powered by Transient Grammar Community Media"></a>
				</div>
			</footer>

			</div><!-- Page wrapper for Slidebars Script -->

		<?php wp_footer(); ?>

		<?php if (is_front_page()) { ?>
			<script>
				$(document).ready(function(){
					$(".share-on-fb").on("click",function(){
			    		var fbpopup = window.open("https://www.facebook.com/sharer/sharer.php?u=<?php echo site_url(); ?>/2016millennial/", "pop", "width=320, height=300, scrollbars=no");
			    	return false;
					});
				});
			</script>
		<?php } else { ?>
			<script>
				$(document).ready(function(){
					$(".share-on-fb").on("click",function(){
			    		var fbpopup = window.open("https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>", "pop", "width=320, height=300, scrollbars=no");
			    	return false;
					});
				});
			</script>
		<?php } ?>

	</body>
</html>
