<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tavomorean_iw
 */

get_header();
?>
		<div id="singlepost-banner" class="singlepost_banner">
			<div class="container">
				<h1 class="hero_title"><?php the_title();?></h1>
			</div>
		</div> <!-- END BANNER SECTION -->
	<main id="primary" class="site-main">

  <div id="meta-info">
    <div class="entry-meta">
      <?php
      tavomorean_iw_posted_on();
      ?>
    </div><!-- .entry-meta -->
    <div class="share-btns">
      Share
      <ul>
        <li>
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php urlencode(the_permalink()); ?>" class="fb-share-button" data-layout="button" data-size="large" data-mobile-iframe="true" target="_blank" class="menuitem" id="fb">Facebook</a>
        </li>
        <li>
          <a href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php urlencode(the_permalink()); ?>&hashtags=Colombia,MemoriasDeUnaHabladora,DigniColombia" class="twitter-share-button" data-size="large" data-show-count="false" class="menuitem" target="_blank" id="twitter">Twitter</a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?text=<?php the_title(); ?> – <?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share" target="_blank" class="menuitem" id="whatsapp">WhatsApp</a>
        </li>
      </ul>
    </div>
  </div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'tavomorean_iw' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'tavomorean_iw' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

  </main><!-- #main -->
  <?php do_action('back_button'); ?>

  <!-- <button id='go_back' class='btn button go_back' onclick='javascript:history.back()'>Back</button> -->
<?php
//get_sidebar();
get_footer();
