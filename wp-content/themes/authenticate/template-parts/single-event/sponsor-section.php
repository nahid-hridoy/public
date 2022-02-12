<?php
    $sp_sec_ttile = get_field( 'sponsor_sec_title' );
?>

<section id="sponsors" class="sponsors-section">
    <div class="container">
    <div class="section-heading text-center mb-0">
        <h2 class="text-uppercase"><?php echo $sp_sec_ttile; ?></h2>
    </div>
    <!-- sponsors list -->
    <!-- additional CLASS signature-sponsors -->

    <?php 
    $s_images = get_field('featured_sponsors');
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
   

    <!-- <div class="section-btn text-center">
        <a href="#" class="btn btn-primary btn-lg">Signup for This Event</a>
        <a href="#" class="btn btn-secondary btn-lg">See all sponsors</a>
    </div> -->
    </div>
</section>