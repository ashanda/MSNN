<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package msnn
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<link rel="shortcut icon" type="image/x-icon"
		href="<?php echo get_template_directory_uri(); ?>/inc_files/images/favicon.png" />
	<link rel="apple-touch-icon"
		href="<?php echo get_template_directory_uri(); ?>/inc_files/images/apple-touch-icon.png" />

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="application-name" content="MSNN" />

	<!--styles-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css?=1.00" />

	<!--fonts-->
	<link rel="stylesheet" type="text/css"
		href="<?php echo get_template_directory_uri(); ?>/inc_files/fonts/font-awesome/css/font-awesome.min.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@500;600&family=Quicksand&display=swap"
		rel="stylesheet">

	<title>MSNN</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="main-wrapper">
		<div id="header-wrapper">
			<div id="header-top">
				<p class="header-contact"><span class="fa fa-phone"></span><a
						href="tel:<?php the_field('comapny_phone_number','option');?>"></a>
					<?php the_field('comapny_phone_number','option');?> <label>|</label> <a href="#">CONTACT</a></p>
				<a href="<?php echo get_home_url(); ?>" id="main-logo"><img
						src="<?php the_field('comapny_logo_headr','option');?>" alt="" width="" height="" /></a>
				<div class="social-icons">



					<?php if( have_rows('social_media','option') ): ?>

					<?php while( have_rows('social_media','option') ): the_row();?>
					
					<a href="<?php the_sub_field('social_link'); ?>" target="_blank" class="<?php the_sub_field('social_icon'); ?>"></a>
						
					
					<?php endwhile; ?>

					<?php endif; ?>
					
					
				</div>
			</div>
			<div id="header-bottom">
				<div class="page-width">
					<a href="#" id="menu-button">MENU</a>

					<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id' => 'main-menu', 
									'container' => 'ul', 
									'container_id'    => 'main-menu',
									
								)
							);
							?>


				</div>
			</div>
		</div>
		<!--header wrapper end-->