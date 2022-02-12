<?php
    $spb_title = get_field( 'sp_bottom_title' );
    $spb_btn = get_field( 'sp_bottom_button' );
?>


<?php /* Hide for now

<section class="cta-section with-top-border">
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-10">
        <div class="section-heading text-center">
        <h2 class="text-uppercase"><?php echo $spb_title; ?></h2>
        </div>
        <div class="section-btn text-center">

        <?php if( $spb_btn ): 
            $btn_title = $spb_btn['title'];    
            $btn_url = $spb_btn['url'];
            $link_target = $spb_btn['target'] ? $spb_btn['target'] : '_self';  
            ?>
            <a href="<?php echo esc_url( $btn_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-primary btn-lg"><?php echo esc_html( $btn_title ); ?></a>

        <?php endif; ?>

        </div>
    </div>
    </div>
</div>
</section>

*/ ?>