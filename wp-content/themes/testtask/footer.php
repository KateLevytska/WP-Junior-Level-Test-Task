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

<footer class="footer">

	<div class="footer__logo" style="background-image: url(<?php the_field('footer_logo', 'option') ?>)">
	</div>
		<?php if (have_rows('social_links', 'option')) : ?>
			<div class="facebook">
				<?php while (have_rows('social_links', 'option')) : the_row(); ?>
					<div style="background-image: url('<?php the_sub_field("icon", "option") ?>')" class="facebook__item">
						<a href="<?php the_sub_field("link", "option") ?>" class="facebook__link"></a>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>