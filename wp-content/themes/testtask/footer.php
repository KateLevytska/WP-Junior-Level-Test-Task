<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TestTask
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="facebook">
		<a href="<?php the_field('facebook')?>"><?php the_field('facebook')?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
