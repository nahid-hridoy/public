<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package authenticate
 */

?>
<style>
span.icon-linkedin.ico-circle {
	background: #25cc7e !important;
	color: #fff !important;
	font-size: 28px !important;
	padding: 10px !important;
	border-radius: 50px !important;
	transition: .5s !important;
}

span.icon-linkedin.ico-circle:hover {
	background: #198b56 !important;
}
</style>
<?php
$auth_footerTopText = get_field('footer_text','options');
$auth_footerCopyText = get_field('footer_copy_text','options');


?>

<footer class="main-footer">
	<!-- tweets section -->
	<section class="tweets-section pb-xl-5">
		<div class="container">
			<div class="row">
				<?php
				if( have_rows('add_twt_timline','options') ):
					while( have_rows('add_twt_timline','options') ) : the_row();

						$timelineTitle = get_sub_field('timeline_title');
						$timelineUrl = get_sub_field('timeline_url');
						?>
						<div class="col-md-6 col-12">
							<a class="twitter-timeline" data-height="500" href="<?php echo esc_url($timelineUrl); ?>"><?php echo $timelineTitle; ?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</section>
		<!-- footer section -->
		<section class="footer-section text-center">
			<div class="container">
				<div class="row">
					<div class="col-12 order-md-1">
						<!-- footer text -->
						<div class="footer-text text-muted">
							<?php echo wpautop( $auth_footerTopText ); ?>
						</div>
					</div>
					<div class="col-md-6 order-md-3 text-md-right">
						<!-- social -->
						<ul class="social mr-xxxl-n8">
							<?php
							if( have_rows('social_links','options') ):
								while( have_rows('social_links','options') ) : the_row();

									$socialMedia = get_sub_field('social_media');
									$socialLink = get_sub_field('link');
									?>
									<li>
										<a href="<?php echo esc_url( $socialLink ); ?>" target="_blank">
											<span class="<?php if( $socialMedia == 'facebook' ){
												echo 'icon-facebook-circle';
											}
											elseif( $socialMedia == 'twitter' ){
												echo 'icon-twitter-circle';
												}else{
													echo 'icon-linkedin ico-circle';
												} ?>"></span>
											</a>
										</li>
										
									<?php endwhile; endif; ?>
								</ul>
							</div>
							<div class="col-md-6 order-md-2 text-md-left">
								<!-- footer logo -->
								<strong class="footer-logo ml-xxxl-n8">
									<?php
									if ( function_exists( 'the_custom_logo' ) ) {
										the_custom_logo();
									}
									?>
								</strong>
							</div>
							<div class="col-12 order-md-4">
								<!-- copyright -->
								<div class="copyright text-muted">
									<?php echo wpautop( $auth_footerCopyText ); ?>
								</div>
							</div>
						</div>
					</div>
				</section>
			</footer>
		</div><!-- .wrapper -->
	</div><!-- #page -->
	<?php wp_footer(); ?>
	<?php 
	if(have_rows('tracking_codes', 'option')) :
		while(have_rows('tracking_codes', 'option')) :
			the_row();
			if(get_sub_field('code_location', 'option') == 'body_end') :
				echo the_sub_field('code_snippet', 'option');
			endif;
		endwhile;
	endif;
	?>
</body>
</html>
