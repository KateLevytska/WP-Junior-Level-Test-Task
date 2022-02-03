<?php
get_header();
?>

	<main id="primary" class="site-main">
		

		<?php if ( have_posts() ) : ?>

			
				<h1 class="search__title">
					<?php
					printf( esc_html__( 'Search Results for: %s', 'testtask' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>

			<?php

			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main>

<?php
get_footer();
