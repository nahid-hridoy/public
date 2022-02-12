<?php
/**
 * The template for displaying all single sessions
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package authenticate
 */

get_header();
?>

	

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-session', get_post_type() );


		endwhile; // End of the loop.
		?>

	

<?php
//get_sidebar();
get_footer();
