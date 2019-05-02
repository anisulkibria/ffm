<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fastfundmortgage
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site homepage">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fastfundmortgage' ); ?></a>
<div class="container main-container">
	<div class="row">

			<div class="col-md-6">
				<div class="logo">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>

					<?php endif; ?>
				</div>

			</div>

			<div class="col-md-6">
				<div class="top-menu"> 
					<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
						<div class="container">
							<!-- Brand and toggle get grouped for better mobile display -->
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
								<?php
								wp_nav_menu( array(
									'theme_location'    => 'menu-2',
									'depth'             => 2,
									'container'         => 'div',
									'container_class'   => 'collapse navbar-collapse',
									'container_id'      => 'bs-example-navbar-collapse-1',
									'menu_class'        => 'nav navbar-nav',
									'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
									'walker'            => new WP_Bootstrap_Navwalker(),
								) );
								?>
						</div>
						<?php echo do_shortcode('[gtranslate]'); ?>
					</nav>
						<h4 class="contact"><a href="tel:714-692-2955"><b><i class="fas fa-phone"></i>714-692-2955</b></a>
						<a href="tel:909-395-6474"><b><i class="fas fa-phone"></i>909-395-6474</b></a></h4>
				</div>
			</div>

	</div>
	
	<div class="row main-menu">
		<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'fastfundmortgage' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
		</nav><!-- #site-navigation -->
	</div>


	<div id="content" class="site-content">
