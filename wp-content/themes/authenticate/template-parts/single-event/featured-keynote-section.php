<?php
$featured_keynote_vis = get_field( 'featured_keynote_vis' );
?>
<?php if( 1 == $featured_keynote_vis ): ?>

    <section id="featured-keynote" class="py-10 my-md-10 my-5 bg-light decorated-section skew-lr">
        <span class="decor"></span>
        <div class="container">
            <div class="featured-keynote-wrapper">
                <div class="row d-flex">

                <?php //vars
                $kn_image     = get_field('featured_keynote_image');
                $kn_name      = get_field('featured_keynote_name');
                $kn_company   = get_field('featured_keynote_company');
                $kn_content   = get_field( 'featured_keynote_content', false, false );

                if( !empty( $kn_image ) ): ?>
                    <div class="col-md-6 col-lg-4 align-self-center">
                        <div class="member-image mb-md-0 mb-5">
                            <img src="<?php echo esc_url($kn_image['url']); ?>" alt="<?php echo esc_attr($kn_image['alt']); ?>" />
                        </div>
                    </div>
                <?php endif; ?>
                <?php if( !empty( $kn_content || $kn_name || $kn_company ) ): ?>
                    <div class="col-md-6 col-lg-8 align-self-center">
                        <div class="member-head m-0">
                            <span class="member-categories">
                              <span>
                                  Featured Keynote
                              </span>
                          </span>
                          <h2 class="mb-0 text-uppercase"><?php echo $kn_name; ?></h2>
                          <i class="d-block mb-4"><?php echo $kn_company; ?></i>
                          <p class="mb-0"><?php echo $kn_content; ?></p>
                      </div>
                  </div>
              <?php endif; ?>
          </div>
      </div>
  </div>
</section>
<?php endif; ?>