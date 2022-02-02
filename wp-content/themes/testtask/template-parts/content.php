<?php
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('sliderReviews'); ?>>
	<?php
	if (is_singular()) : ?>

	<?php the_title('<h1 class="post__title">', '</h1>');
	else :
		the_title('<h2 class="post__title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
	endif;

	if ('post' === get_post_type()) :
	?>
		<div class="entry-meta">
			<?php
			testtask_posted_on();
			testtask_posted_by();
			?>
		</div>
	<?php endif; ?>

	<?php testtask_post_thumbnail(); ?>

	<div class="sliderReviews__text">
		<?php
		the_content(
			sprintf(
				wp_kses(
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'testtask'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="post__links">' . esc_html__('Pages:', 'testtask'),
				'after'  => '</div>',
			)
		);
		?>
	</div>
</article>