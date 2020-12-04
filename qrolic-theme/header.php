<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package qrolic_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
	<!-- Header start -->
	<header id="masthead" class="site-header">
		<div class="header">
			<div class="header__inner">
				<div class="header__logo">
					<a href="<?php echo get_home_url();?>">
						<img src="<?php echo get_template_directory_uri();?>/images/qrolic-logo.png" alt="Logo">
					</a>
				</div>
				<div class="header__menu-icon">
					<div class="menu-icon">
						<i class="fal fa-bars"></i>
					</div>
				</div>
				<div class="header__menu">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
					?>
				</div>
			</div>
		</div>
	</header>
	<!-- Header end -->

	<!-- Mobile menu start -->
	<div class="sidebar">
		<div class="sidebar__inner">
			<div class="sidebar__menu">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>		
			</div>
		</div>
	</div>
    <div class="close-sidebar"></div>
	<!-- Mobile menu end -->
