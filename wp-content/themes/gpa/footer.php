<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gpa
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="row flex-center">
				<div class="col-1">
					<img src="/wp-content/themes/gpa/dist/images/gpa-crest.svg" width="80" height="auto"/>
				</div>
				<div class="col-9">
					<?php wp_nav_menu( array( 'menu' => 'Footer Menu') ); ?>
				</div>
				<div class="col-2 footer-social">
					<a href="#" class="socicon socicon-facebook"></a>
					<a href="#" class="socicon socicon-twitter"></a>
					<a href="#" class="socicon socicon-youtube"></a>
					<a href="#" class="socicon socicon-flickr"></a>
				</div>

			</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
