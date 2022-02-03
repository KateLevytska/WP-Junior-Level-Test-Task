<?php

get_header();

?>

	<main id="primary" class="site-main">

	<div class="archive">

		<?php if ( have_posts() ) : ?>

				<?php
				the_archive_title( '<h1 class="archive__title">', '</h1>' );
				the_archive_description( '<div class="archive__description">', '</div>' );

				?>


			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</div>

	</main>
<?php
get_footer();
