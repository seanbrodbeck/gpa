<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gpa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<link href="https://fonts.googleapis.com/css?family=Lusitana:400,700" rel="stylesheet">
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gpa' ); ?></a>

	<header id="masthead" class="site-header row">

		<div class="site-branding col-3">
			<a href="/"><img src="/wp-content/themes/gpa/dist/images/gpa-logo.svg"/></a>
		</div><!-- .site-branding -->

		<div class="col-9 nopad">
				<div class="secondary-nav">
					<div class="secondary-nav-menu">
						<?php wp_nav_menu( array( 'menu' => 'Secondary Nav') ); ?>
					</div>
					<div class="header-social">
						<a href="#" class="socicon socicon-facebook"></a>
						<a href="#" class="socicon socicon-twitter"></a>
						<a href="#" class="socicon socicon-youtube"></a>
						<a href="#" class="socicon socicon-flickr"></a>
					</div>
				</div>
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'gpa' ); ?></button>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav><!-- #site-navigation -->
		</div>

	
	</header><!-- #masthead -->

	<div id="content" class="site-content">
