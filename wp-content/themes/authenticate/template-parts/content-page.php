<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package authenticate
 */

?>


<section class="page-head">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-xl-8">
				<div class="section-heading">
					<h1 class="text-primary text-uppercase"><?php the_title(); ?></h1>
					<div class="section-heading-text">
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="entry-content">
					<?php
					the_content();
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'authenticate' ),
							'after'  => '</div>',
						)
					);
					?>
				</div>
			</div>
		</div>
	</div>
</section>