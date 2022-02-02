<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TestTask
 */

?>

<section class="sectionNotFound">
	
		<h1 class="sectionNotFound__title"><?php esc_html_e( 'Nothing Found', 'testtask' ); ?></h1>


	<div class="sectionNotFound__content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p class="sectionNotFound__text">' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'testtask' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p class="sectionNotFound__text"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'testtask' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p class="sectionNotFound__text"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'testtask' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
