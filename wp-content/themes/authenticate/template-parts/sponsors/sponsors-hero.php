<?php
    $sp_title = get_field( 'sp_title' );
    $sp_desc = get_field( 'sp_desc' );
    $sp_btn = get_field( 'sp_button' );
?>


<section class="page-head">
    <div class="container">
        <div class="row">
        <div class="col-md-10 col-xl-8">
            <div class="section-heading">
            <h1 class="text-primary text-uppercase"><?php echo $sp_title; ?></h1>
            <div class="section-heading-text">
                <?php echo wpautop( $sp_desc ); ?>
            </div>
            <?php if( $sp_btn ): 
            $btn_title = $sp_btn['title'];    
            $btn_url = $sp_btn['url'];
            $link_target = $sp_btn['target'] ? $sp_btn['target'] : '_self';  
            ?>
            <a href="<?php echo esc_url( $btn_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-primary"><?php echo esc_html( $btn_title ); ?></a>

            <?php endif; ?>

            </div>
        </div>
        </div>
    </div>
</section>