<?php

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<?php testtask_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'testtask' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<?php if ( get_edit_post_link() ) : ?>
	<?php endif; ?>
</article><?php the_ID(); ?>
