<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TestTask
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_title( sprintf( '<h2 class="search__subtitle"><a href="%s" rel="bookmark" class="search__links">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			testtask_posted_on();
			testtask_posted_by();
			?>
		</div>
		<?php endif; ?>

	<?php testtask_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
</article><?php the_ID(); ?> -->
