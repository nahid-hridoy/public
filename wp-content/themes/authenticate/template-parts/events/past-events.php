<?php
    $pe_bg_img = get_field( 'pe_background_image' ); 
    $pe_title = get_field( 'pe_title' ); 
    $pe_desc = get_field( 'pe_description' ); 
    $event_button = get_field( 'pe_button' ); 
?>


<section class="about-section decorated-section image-skew">
<span class="decor" style="background-color: #a4d7be">
    <img src="<?php echo esc_url( $pe_bg_img['url'] ); ?>" />
</span>
<div class="container">
    <div class="row justify-content-end">
    <div class="col-lg-6">
        <div class="section-heading">
        <h2 class="text-uppercase"> <?php echo $pe_title; ?></h2>
        <div class="section-heading-text">
            <?php echo wpautop( $pe_desc ); ?>
        </div>
        <?php if( $event_button ): 
            $btn_title = $event_button['title'];    
            $btn_url = $event_button['url'];
            $link_target = $event_button['target'] ? $event_button['target'] : '_self';  
        ?>
            <a href="<?php echo esc_url( $btn_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-secondary"><?php echo esc_html( $btn_title ); ?></a>
            

        <?php endif; ?>

        </div>
    </div>
    </div>
</div>
</section>