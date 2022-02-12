<?php
    $about_title = get_field('about_title');
    $about_desc = get_field('about_details');
    $about_btn = get_field('about_button_link');

?>

<section class="about-section decorated-section persective-lr bg-primary text-white">
    <span class="decor"></span>
    <div class="container">
    <div class="row justify-content-end">
		<div class="col-md-4 col-xl-5">
		<?php if( get_field('about_image') ): ?>
			<img src="<?php the_field('about_image'); ?>" />
		<?php endif; ?>
		</div>
	
        <div class="col-md-8 col-xl-7">
        <div class="section-heading">
            <h2 class="text-uppercase"><?php echo $about_title; ?></h2>
            <div class="section-heading-text">
            <?php echo wpautop( $about_desc ); ?>
            </div>
            <?php if( $about_btn ): 
                $btn_title = $about_btn['title'];    
                $btn_url = $about_btn['url'];
                $link_target = $about_btn['target'] ? $about_btn['target'] : '_self';  
            ?>
                <a href="<?php echo esc_url( $btn_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-white"><?php echo esc_html( $btn_title ); ?></a>
                
            <?php endif; ?>
        </div>
        </div>
    </div>
    </div>
</section>