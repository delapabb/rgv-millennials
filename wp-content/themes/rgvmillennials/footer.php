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

		<?php if(!is_user_logged_in()) { ?>

			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-75151021-1', 'auto');
			  ga('send', 'pageview');
			</script>

		<?php } ?>

	</body>
</html>
