<?php
    $sp_sec_ttile = get_field( 'sponsor_sec_title' );
    $sig_sp_sec_ttile = get_field( 'sig_sponsor_sec_title' );
    $supp_sp_sec_ttile = get_field( 'supp_sponsor_sec_title' );
    $ana_sp_sec_ttile = get_field( 'ana_sponsor_sec_title' );

?>

<section id="sponsors" class="sponsors-section">
    <div class="container">
    <div class="section-heading">
        <h2 class="text-uppercase"><?php echo $sp_sec_ttile; ?></h2>
    </div>
    <div class="sponsors-wrapper">
        <div class="row">
        <div class="col-12">
            <div class="sponsor-item">
            <span class="sponsor-category lg"><?php echo $sig_sp_sec_ttile; ?></span>
            <!-- sponsors list -->
            <!-- additional CLASS signature-sponsors -->
            <!-- additional CLASS justify-content-lg-start -->
            <?php 
            $s_images = get_field('signature_sponsors');
            if( $s_images ): ?>
            <ul class="sponsors-list signature-sponsors justify-content-lg-start">
                
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


            </div>
        </div>
        <?php 
        $sp_images = get_field('supporting_sponsors_logo');
        if( $sp_images ): ?>
        <div class="col-lg-6">
            <div class="sponsor-item">
            <span class="sponsor-category"><?php echo $supp_sp_sec_ttile; ?></span>
            <!-- sponsors list -->
            <!-- additional CLASS base-sponsors -->
            <?php 
            $s_images = get_field('supporting_sponsors_logo');
            if( $s_images ): ?>
            <ul class="sponsors-list base-sponsors">
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


            </div>
        </div>
        <?php endif; ?>
        <?php 
        $ap_images = get_field('analyst_partners');
        if( $ap_images ): ?>
        <div class="col-lg-6">
            <div class="sponsor-item">
            <span class="sponsor-category"><?php echo $ana_sp_sec_ttile; ?></span>
            <!-- sponsors list -->
            <!-- additional CLASS base-sponsors -->
            <?php 
            $s_images = get_field('analyst_partners');
            if( $s_images ): ?>
            <ul class="sponsors-list base-sponsors">
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
            </div>
        </div>
        <?php endif; ?>


        </div>
    </div>
    </div>
</section>