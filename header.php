<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Another_Game_Another_Chance
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'agac' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-header-top-cont">
			<div class="site-header-top">
				<div class="site-header-top-left-cont">
					<div class="site-header-top-left">
						<div class="menu-items">
							<span class="menu-item"></span>
							<span class="menu-item"></span>
							<span class="menu-item"></span>
						</div>
					</div>
				</div>
				<div class="site-header-top-center-cont">
					<div class="site-header-top-center">
						<div class="logo-items">
							<img class="logo-item" src="<?php echo get_template_directory_uri().'/assets/images/logo.png'?>">
						</div>
					</div>
				</div>
				<div class="site-header-top-right-cont">
					<div class="site-header-top-right">
						<div class="search-items">
							<img class="search-item" src="<?php echo get_template_directory_uri().'/assets/icons/search.svg'?>">
						</div>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
