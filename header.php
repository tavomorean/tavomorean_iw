<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tavomorean_iw
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tavomorean_iw' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
		<div class="site-branding">
			<img class="hardright_brand" src="<?php echo get_template_directory_uri(); ?>/assets/img/hardright-brand.svg"> 
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$tavomorean_iw_description = get_bloginfo( 'description', 'display' );
			if ( $tavomorean_iw_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $tavomorean_iw_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tavomorean_iw' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
<script>
	$(window).scroll(function() {

//After scrolling 100px from the top...
if ( $(window).scrollTop() >= 100 ) {
		$('header.site-header').css('background-color', 'rgba(0,0,0,0.65');

//Otherwise remove inline styles and thereby revert to original stying
} else {
		$('header.site-header').attr('style', '');

}
});
</script>