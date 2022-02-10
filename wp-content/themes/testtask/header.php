
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
			<?php if (!is_front_page()) { ?>
				<a href="<?php echo home_url();?>" class="header__404">Home</a>
			<?php } else { ?>
				<div style="background-image: url('<?php the_field('header_banner-image') ?>')" class="header__banner"></div>
				<div style="background-image: url('<?php the_field('header_banner-image2') ?>')" class="header__banner-overlay"></div>

				<?php $phone = get_field('header_phone')?>
				<a href="tel:<?php echo $phone["url"] ?>" class="header__phone"><?php echo $phone["title"] ?></a>
				<div class="header__text">
					<div style="background-image: url('<?php the_field('header_logo', 'option')?>')" class="header__logo"> 
					</div>
					<h1 class="header__title"><?php the_field('header_title') ?></h1>
					<p class="header__item"><?php the_field('header_description1') ?></p>
					<p class="header__description"><?php the_field('header_description2') ?></p>
				</div>
			<?php } ?>
		</header>