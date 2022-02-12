<section id="hotel_map" class="pb-md-10 pt-md-0 py-5">
    <div class="container">
            <div class="row d-flex">
            <?php
            if( have_rows('hotel') ): ?>
                <?php while( have_rows('hotel') ): the_row(); 

                $hotel_image   = get_sub_field( 'hotel_image' );
                $hotel_content = get_sub_field( 'hotel_content' ); ?>

                <?php if( !empty( $hotel_image ) ): ?>
                    <div class="col-12 col-md-6 pt-md-10 pb-md-5">
                        <img class="mb-md-0 mb-5" src="<?php echo esc_url($hotel_image['url']); ?>" alt="<?php echo esc_attr($hotel_image['alt']); ?>" />
                    </div>
                <?php endif; ?>

                <?php 
                if( !empty( $hotel_content ) ): ?>
                    <div class="col-12 col-md-6 align-self-center">
                        <?php echo $hotel_content; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php endwhile; endif; ?>

            <div class="map-section mb-md-10">
            <?php 
            $location = get_field('map_location');
            if( $location ): ?>
                <div class="acf-map" data-zoom="16">
                    <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
                </div>
            <?php endif; ?>
            </div>
    </div>
</section>