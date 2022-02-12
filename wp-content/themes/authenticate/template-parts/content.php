<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package authenticate
 */

?>

<!-- contain main informative part of the site -->
<div class="page-holder">
	<main class="main">
		<div class="post-blocks">
			<!-- post section -->
			<section class="post-section">
				<div class="container">
					<!-- post -->
					<article class="post">
				<?php /*
				<div class="feature-image">
				<img src="<?php the_post_thumbnail_url(  ); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" />
				</div>
				*/ ?>
				<div class="post-head">
					<h2 class="text-primary text-uppercase"><?php the_title(); ?></h2>
					<?php /* <span class="post-author">By: <?php echo get_the_author_meta( "display_name" ); ?></span> */ ?>
				</div>
				<div class="post-text">
					<?php echo wpautop( the_content() ); ?>
				</div>
			</article>
		</div>
	</section>
	<section class="more-posts">
		<div class="container">
			<div class="section-heading text-center">
				<h2 class="text-uppercase"><?php echo esc_html_e( 'More Posts','authenticate' ); ?></h2>
			</div>
			<div class="articles-wrapper">
				<div class="row">
					<?php
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'post__not_in' => array( $post->ID ),
						'orderby' => 'date',
						'order' => 'DESC',
						'ignore_sticky_posts' => 1,
						'suppress_filters' => true

					);
					$loop = new WP_Query($args);
					?>
					<?php if ( $loop->have_posts() ) : ?>
						<?php while( $loop->have_posts() ): $loop->the_post(); ?>
							<!-- More Posts Loop Start -->
							<?php get_template_part( 'template-parts/related-blog-card' ); ?>
							<!-- More Posts Loop End -->
						<?php endwhile; wp_reset_postdata(); ?>
						<?php else : ?>
							<h3>No Post Found</h3>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</section>
	</div>
</main>
</div>
