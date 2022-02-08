
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_title( sprintf( '<h2 class="search__subtitle"><a href="%s" rel="bookmark" class="search__links">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	<?php testtask_post_thumbnail(); ?>

	<div class="search__content">
		<?php the_excerpt(); ?>
	</div>
</article>
