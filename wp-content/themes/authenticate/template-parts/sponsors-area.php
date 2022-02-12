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
    
        <ul class="sponsors-list signature-sponsors">
            <?php foreach( $sponsors as $sponsor ): 
                $permalink = get_permalink( $sponsor->ID );
                $title = get_the_title( $sponsor->ID );
                $thumbnail_url = get_the_post_thumbnail_url( $sponsor->ID );
                $white_logo_av = get_field( 'white_version_av', $sponsor->ID );
                $white_logo = get_field( 'alternate_logo', $sponsor->ID );

                if( $white_logo ){
                    $thumbnail_url = $white_logo['url'];
                }else{
                    $thumbnail_url = $thumbnail_url;
                }
            ?>
                <li>
                    <div class="logo-img">
                        <a href="<?php echo esc_url( $permalink ); ?>" >
                            <img class="" src="<?php echo esc_url( $thumbnail_url ); ?>" alt="" />
                        </a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

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