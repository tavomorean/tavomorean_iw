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
	<div class="get_ahead_container">
		<div class="get_ahead-left_box">
			<img src="<?php echo get_post_meta( get_the_ID(), 'get_ahead_img', true );?>" class="get_ahead_img" />
		</div>
		<div class="get_ahead-right_box">
			<div class="get_ahead-info">
				<h2 class="get_ahead-title"><?php echo get_post_meta( get_the_ID(), 'get_ahead_title', true );?></h2>
				<p class="get_ahead_paragraph"><?php echo get_post_meta( get_the_ID(), 'get_ahead_paragraph', true );?></p>
			</div>
		</div>
	</div>

	<div id="based_on_data-wrap">
		<div class="based_data-title"><h2>Based on data from:</h2>
		<div id="based_on_data">
		<div class="based_data-item_box">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tickets.svg"/>
			<div class="based_data-info_box">
				<h2 class="based_data-title"><?php echo get_post_meta( get_the_ID(), 'based_data_tickets', true );?></h2>
				<p class="based_data-type">Tickets</p>
			</div>
		</div>
		<div class="based_data-item_box">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/customers.svg"/>
			<div class="based_data-info_box">
				<h2 class="based_data-title"><?php echo get_post_meta( get_the_ID(), 'based_data_customers', true );?></h2>
				<p class="based_data-type">Customers</p>
			</div>
		</div>
		<div class="based_data-item_box">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/agents.svg"/>
			<div class="based_data-info_box">
				<h2 class="based_data-title"><?php echo get_post_meta( get_the_ID(), 'based_data_agents', true );?></h2>
				<p class="based_data-type">Agents</p>
			</div>
		</div>
		<div class="based_data-item_box">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/customers-tools.svg"/>
			<div class="based_data-info_box">
				<h2 class="based_data-title"><?php echo get_post_meta( get_the_ID(), 'based_data_customers_tools', true );?></h2>
				<p class="based_data-type">Customers</p>
			</div>
		</div>
		</div>
		</div>
	</div>

	<div id="see_where-stand" class="see_where-stand">
		<div class="sw-container">
			<h2><?php echo get_post_meta( get_the_ID(), 'sw_head-title', true );?></h2>
			<p><?php echo get_post_meta( get_the_ID(), 'sw_head-paragraph', true );?></p>
			<form id="sw_filter">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_Select_Industry.svg"/>	
				<select name="industry-filter" id="industry_filter">
					<option disabled selected>Select</option>
					<option value="Agencies">Agencies</option>
					<option value="Gastronomy">Gastronomy</option>
					<option value="House">House</option>
				</select>
			</form>
		</div>
	</div>

	<div id="research-section">
		<div class="rs-container">
			<h2><?php echo get_post_meta( get_the_ID(), 'rs_head-title', true );?></h2>
			<p><?php echo get_post_meta( get_the_ID(), 'rs_head-paragraph', true );?></p>
		</div>
		<div class="rs-feed">
			<?php //echo do_shortcode('[lastest-post]'); ?>
			<?php echo latest_research_post(); ?>
		</div>
	</div>

	<div id="see-us">
		<div class="rs-container">
			<h2><?php echo get_post_meta( get_the_ID(), 'see_us_title', true );?></h2>
			<p><?php echo get_post_meta( get_the_ID(), 'see_us_paragraph', true );?></p>
		</div>
		<div class="video-container">
			<?php echo get_post_meta( get_the_ID(), 'see_us_video_link', true);?>
		</div>
		<span class="latt"><?php echo get_post_meta( get_the_ID(), 'latitud_map', true );?></span>
		<span class="latt"><?php echo get_post_meta( get_the_ID(), 'longitud_map', true );?></span>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
