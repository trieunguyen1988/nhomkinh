<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ProfitMag
 */

get_header(); ?>

<?php

$profitmag_settings = profit_get_theme_options(); 

if( is_singular() ) {

        $sidebar_layout = $profitmag_settings['profitmag_sidebar_layout_setting'];    

}else {

       $sidebar_layout = 'right_sidebar';

}
if( $sidebar_layout == 'both_sidebar' ) {

       echo '<div id="primary-wrap" class="clearfix">';
}
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar( 'left' ); ?>
<?php
if( $sidebar_layout == 'both_sidebar' ) {
    echo '</div>';
}
?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
