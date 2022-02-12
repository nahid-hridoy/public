<?php
    $home_sp_title = get_field( 'sponsors_title' );
    $home_sp_desc = get_field( 'sponsors_sub_title' );
    $home_spb_text = get_field( 'sp_bottom_text' );
    $home_spb_btn = get_field( 'sponsor_button_link' );

?>

<section class="sponsors-section bg-secondary text-white heading-custom-position">
    <div class="container">
    <div class="section-heading text-center mb-0">
        <h2 class="text-uppercase"><?php echo $home_sp_title; ?></h2>
        <p class="text-primary"><?php echo $home_sp_desc; ?></p>
    </div>
    <!-- sponsors list -->
    <!-- additional CLASS signature-sponsors -->

    <?php
    $sponsors = get_field('home_add_sponsors');
    if( $sponsors ): ?>
    <?php 
    foreach( $sponsors as $sponsor ):
        $spm_title = get_the_title( $sponsor->ID );
    ?>

    <?php 
    $s_images        = get_field('sp_gallery', $sponsor->ID);
    if( $s_images ): ?>
        <ul class="sponsors-list signature-sponsors">
            <?php foreach( $s_images as $s_image ): ?>
                <li>
                    <div class="logo-img">
                    <?php $sponsor_url = get_field( 'sponsor_link',$s_image['ID'] );
                     $sp_custom_class  = get_field( 'custom_class',$s_image['ID'] );
                     ?>
                    <a href="<?php echo esc_url( $sponsor_url ); ?>" target="_blank">
                        <img class="<?php echo $sp_custom_class; ?>" src="<?php echo esc_url($s_image['url']); ?>" alt="<?php echo esc_attr($s_image['alt']); ?>" />
                    </a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php endforeach; ?>
    <?php endif; ?>


    <div class="section-btn text-center">
        <div class="section-btn-text">
        <?php echo wpautop( $home_spb_text ); ?>
        </div>
        <?php if( $home_spb_btn ): 
            $btn_title = $home_spb_btn['title'];    
            $btn_url = $home_spb_btn['url'];
            $link_target = $home_spb_btn['target'] ? $home_spb_btn['target'] : '_self';  
        ?>
            <a href="<?php echo esc_url( $btn_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-primary"><?php echo esc_html( $btn_title ); ?></a>

        <?php endif; ?>
    </div>
    </div>
</section>