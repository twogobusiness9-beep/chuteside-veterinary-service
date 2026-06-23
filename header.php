<?php
/**
 * Header template.
 *
 * @package Chuteside
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="topbar">
	<div class="container">
		📞 <a href="tel:+14062853923">(406) 285-3923</a>　·　24-Hour Emergency Service　·　2520 Bench Road, Three Forks, MT
	</div>
</div>

<header class="site-header" id="siteHeader">
	<div class="container nav-wrap">
		<div class="brand">
			<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			} else {
				printf(
					'<a href="%1$s"><img src="%2$s" alt="%3$s"></a>',
					esc_url( home_url( '/' ) ),
					esc_url( get_stylesheet_directory_uri() . '/assets/images/logo.svg' ),
					esc_attr( get_bloginfo( 'name' ) )
				);
			}
			?>
			<span class="brand-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></span>
		</div>

		<button class="nav-toggle" aria-label="<?php esc_attr_e( 'Toggle menu', 'chuteside' ); ?>" aria-expanded="false" aria-controls="primaryNav">
			<span></span><span></span><span></span>
		</button>

		<nav class="main-navigation" id="primaryNav" aria-label="<?php esc_attr_e( 'Primary Menu', 'chuteside' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'fallback_cb'    => 'chuteside_default_menu',
				)
			);
			?>
			<a class="btn btn-primary btn-nav" href="#appointment"><?php esc_html_e( 'Request a Visit', 'chuteside' ); ?></a>
		</nav>
	</div>
</header>
