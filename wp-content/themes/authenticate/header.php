<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package authenticate
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<?php
	if (have_rows('tracking_codes', 'option')) :
		while (have_rows('tracking_codes', 'option')) :
			the_row();
			if (get_sub_field('code_location', 'option') == 'head') :
				echo the_sub_field('code_snippet', 'option');
			endif;
		endwhile;
	endif;
	?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php
	if (have_rows('tracking_codes', 'option')) :
		while (have_rows('tracking_codes', 'option')) :
			the_row();
			if (get_sub_field('code_location', 'option') == 'body') :
				echo the_sub_field('code_snippet', 'option');
			endif;
		endwhile;
	endif;
	?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'authenticate' ); ?></a>

		<!-- static header -->
		<div class="wrapper" id="header_wrapper" style="padding-top: 0px !important;">
			<header class="main-header fixed-top <?php if( is_singular( 'event' ) ): ?>main-header-single<?php endif; ?>">
				<!-- navbar main -->
				<nav class="navbar navbar-expand-xl navbar-light bg-white">
					<!-- logo -->
					<div class="navbar-brand main-logo-1" href="/">
						<span class="navbar-logo">

							<?php
							if ( function_exists( 'the_custom_logo' ) ) {
								the_custom_logo();
							}
							?>
							
						</span>
					</div>
					<!-- Alternate logo on mobile -->
					<?php $mb_logo = get_field( 'mobile_logo', 'option' );  ?>
					<div class="navbar-brand main-logo-2" href="/">
						<span class="navbar-logo">
							<?php if( $mb_logo ): ?>
								<a href="/" class="custom-logo-link" rel="home">
									<img width="182" height="24" src="<?php echo esc_url( $mb_logo['url'] ); ?>" class="custom-logo" alt="Authenticate">
								</a>
								<?php else: ?>
									<?php
									if ( function_exists( 'the_custom_logo' ) ) {
										the_custom_logo();
									}
									?>
								<?php endif; ?>

							</span>
						</div>
						<!-- Alternate logo on mobile -->

						<!-- mobile toggler -->
						<button
						class="navbar-toggler"
						type="button"
						data-toggle="collapse"
						data-target="#navbarCollapse"
						aria-controls="navbarCollapse"
						aria-expanded="false"
						aria-label="Toggle navigation"
						>
						<span class="navbar-toggler-icon"></span>
					</button>
					<!-- mobile collapse -->
					<div class="collapse navbar-collapse" id="navbarCollapse">
						<div class="collapse-inner">
							<!-- main menu -->
							<?php
							wp_nav_menu(array(
								'theme_location'    => 'header-menu1',
								'menu_id'           => 'Primary',
								'container'         => 'ul',
								'menu_class'        => 'navbar-nav mr-xl-auto',
								'list_item_class'  	=> 'nav-item'
							));
							?>
							
							<!-- additional menu -->
							<?php
							wp_nav_menu(array(
								'theme_location'    => 'header-menu2',
								'menu_id'           => 'Primary2',
								'container'         => 'ul',
								'menu_class'        => 'navbar-nav add-nav',
								'list_item_class'  	=> 'nav-item'
							));
							?>
							<!-- Search-popup -->
							<div class="search-popup-wrapper">
								<button type="button" class="popup-opener nav-link"><span class="icon-search"></span><span class="d-xl-none">Search</span></button>
								<div class="search-popup bg-primary text-white">
									<button type="button" class="popup-close close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<div class="search-popup-inner">
										<div class="container">
											<!-- Search Form -->
											<form action="<?php echo esc_url(home_url()); ?>" class="search-form custom-label-position" id="searchform" method="get" role="search">
												<input id="s" name="s" type="search" class="form-control" />
												<label for="s">What are you looking for?</label>
												<input value="Search" id="searchsubmit" type="submit" class="btn btn-white" />
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- sign up button -->
							<a href="/sign-up" class="btn btn-primary sign-up-btn">Sign Up for updates</a>
						</div>
					</div>
				</nav>

				<?php if( is_singular( 'event' ) ): ?>
					<?php get_template_part( 'template-parts/event-header' ) ; ?>
				<?php endif; ?>

			</header>

<?php /*
	<header id="masthead" class="site-header">
		<div class="site-branding">
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
		$authenticate_description = get_bloginfo( 'description', 'display' );
		if ( $authenticate_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo $authenticate_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
	</div><!-- .site-branding -->

	<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'authenticate' ); ?></button>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			)
		);
		?>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->

*/ ?>
