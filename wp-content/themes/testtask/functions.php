<?php

if (!defined('_S_VERSION')) {

	define('_S_VERSION', '1.0.0');
}

function testtask_setup()
{

	load_theme_textdomain('testtask', get_template_directory() . '/languages');

	add_theme_support('automatic-feed-links');


	add_theme_support('title-tag');

	add_theme_support('post-thumbnails');

	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'testtask'),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-background',
		apply_filters(
			'testtask_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

}

add_action('init', 'register_post_types');
function register_post_types()
{
	register_post_type('testimonials', [
		'label'  => null,
		'labels' => [
			'name'               => 'Testimonials',
			'singular_name'      => 'Testimonial',
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new title',
			'edit_item'          => 'Edit',
			'new_item'           => 'New testimonial',
			'view_item'          => 'View',
			'search_items'       => 'Search',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Testimonials',
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => null,
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-quote',
		'hierarchical'        => false,
		'supports'            => ['title', 'editor', 'thumbnail', 'custom-fields', 'author', 'revisions', 'page-attributes', 'post-formats', 'excerpt'],
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
		'can_export'           => true,
	]);
}

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}

add_action('after_setup_theme', 'testtask_setup');

function testtask_content_width()
{
	$GLOBALS['content_width'] = apply_filters('testtask_content_width', 640);
}
add_action('after_setup_theme', 'testtask_content_width', 0);

/**
 * Enqueue scripts and styles.
 */
function testtask_scripts()
{
	wp_style_add_data('testtask-style', 'rtl', 'replace');
	wp_enqueue_style('main-font', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
	wp_enqueue_style('slick-style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	wp_enqueue_style('testtask-style', get_stylesheet_uri(), array(), _S_VERSION);

	wp_enqueue_script('jquery');
	wp_enqueue_script('slick-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', 'jquery');
	wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/scripts.min.js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'testtask_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
