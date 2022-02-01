<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TestTask
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header id="masthead" class="header">
			<div class="branding">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()) :
				?>

				<?php
				endif;
				$testtask_description = get_bloginfo('description', 'display');
				if ($testtask_description || is_customize_preview()) :
				?>
				<?php endif; ?>
			</div><!-- .branding -->
			<div style="background-image: url('<?php the_field('section1_banner-image') ?>')" class="header__banner"></div>
			<div style="background-image: url('<?php the_field('section1_banner-image2') ?>')" class="header__banner-overlay"></div>
			<p class="header__phone"><?php the_field('section1_phone') ?></p>
			<div class="header__text">
				<h1 class="header__title"><?php the_field('section1_title') ?></h1>
				<p class="header__item"><?php the_field('section1_description1') ?></p>
				<p class="header__description"><?php the_field('section1_description2') ?></p>
			</div>
		</header><!-- #masthead -->