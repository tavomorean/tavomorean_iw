<?php
/**
 * Template Name: Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tavomorean_iw
 */

get_header();
?>


	<main id="primary" class="site-main">
		<!-- <div id="home-banner" class="home_banner">
			<div class="container">
				<h1 class="hero_title"><span class="blueTxt">HR software</span><br>that really matters</h1>
			</div>
		</div>  --><!-- END BANNER SECTION -->


		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
