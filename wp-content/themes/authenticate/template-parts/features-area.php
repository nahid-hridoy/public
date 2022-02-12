<?php
    $fet_main_title = get_field( 'feature_area_title' );
    $feature_button = get_field( 'feature_button' );
?>

<section class="feature-section bg-secondary text-white">
    <div class="container">
    <div class="section-heading text-center">
        <h2 class="text-uppercase"><?php echo esc_html( $fet_main_title ); ?></h2>
    </div>
    </div>

    <!-- max list length 9 items -->
    <div class="feature-list">
    <div class="row no-gutters">

        <?php
            if( have_rows('add_feature') ):
                while( have_rows('add_feature') ) : the_row();

                $fet_logo = get_sub_field('fet_icon_image');
                $fet_title = get_sub_field('feature_title');
                $fet_desc = get_sub_field('feature_description');
        ?>
        <!-- feature item -->
        <div class="col-md-6 col-lg-4">
            <div class="feature-item">
                <div class="inner-content">
                <div class="feature-item-head">
                    <div class="feature-item-img">
                    <img src="<?php echo esc_url( $fet_logo['url'] ) ?>" />
                    </div>
                    <h4 class="feature-title"><?php echo $fet_title; ?></h4>
                </div>
                <div class="feature-item-text">
                    <?php echo wpautop($fet_desc); ?>
                </div>
                </div>
            </div>
        </div>
        <!-- feature item -->
        <?php endwhile; endif; ?>

    </div>
    </div>
    <!-- section btn -->
    <div class="section-btn text-center">
    <?php if( $feature_button ): 
        $btn_title = $feature_button['title'];    
        $btn_url = $feature_button['url'];
        $link_target = $feature_button['target'] ? $feature_button['target'] : '_self';  
    ?>
        <a href="<?php echo esc_url( $btn_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-white"><?php echo esc_html( $btn_title ); ?></a>
    <?php endif; ?>

    </div>
</section>