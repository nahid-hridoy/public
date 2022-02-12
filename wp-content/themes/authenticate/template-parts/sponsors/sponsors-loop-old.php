<section class="sponsors-section">
<div class="container">
    <div class="sponsors-wrapper">

    <?php
    $sponsors = get_field('add_sponsors');
    if( $sponsors ): ?>
    <?php 
    $count = 0;
    foreach( $sponsors as $sponsor ):
        $count++;
        $spm_title = get_the_title( $sponsor->ID );
        $sp_slug = get_field( 'sp_slug',$sponsor->ID );
    ?>

    <div class="sponsor-item">
        <span class="sponsor-category <?php if( 1 == $count ): ?>lg<?php endif; ?>"><?php echo $spm_title; ?></span>
        

        <?php 
        $s_images = get_field('sp_gallery', $sponsor->ID);
        if( $s_images ): ?>
            <ul class="sponsors-list <?php echo $sp_slug; ?>">
                <?php foreach( $s_images as $s_image ): ?>
                    <li>
                        <div class="logo-img">
                        <?php $sponsor_url = get_field( 'sponsor_link',$s_image['ID'] );
                        $sp_custom_class   = get_field( 'custom_class',$s_image['ID'] ); ?>
                        <a href="<?php echo esc_url( $sponsor_url ); ?>" target="_blank">
                            <img class="<?php echo $sp_custom_class; ?>" src="<?php echo esc_url($s_image['url']); ?>" alt="<?php echo esc_attr($s_image['alt']); ?>" />
                        </a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

    </div>

    <?php endforeach; ?>
    <?php endif; ?>



    </div>
</div>
</section>