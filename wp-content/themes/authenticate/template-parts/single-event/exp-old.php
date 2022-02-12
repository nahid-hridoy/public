<?php
$experience_vis = get_field( 'experience_vis' );
?>
<?php if( 1 == $experience_vis ): ?>

    <section id="experience" class="pb-md-10 pt-md-0 py-5">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="text-uppercase text-primary">Experience</h2>
            </div>
            <div class="experience-wrapper">
                <div class="row d-flex">

                <?php //vars
                $ex_content_left  = get_field( 'experience_content_left' );
                $ex_content_right = get_field( 'experience_content_right' ); ?>

                <?php if( !empty( $ex_content_left ) ): ?>
                    <div class="col-md-6">
                        <?php echo $ex_content_left; ?>
                    </div>
                <?php endif; ?>

                <?php if( !empty( $ex_content_right ) ): ?>
                    <div class="col-md-6">
                        <?php echo $ex_content_right; ?>
                    </div>
                <?php endif; ?>
            </div>

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

                 <div class="map-section mb-md-10">
                    <?php 
                    $location = get_field('map_location');
                    if( $location ): ?>
                        <div class="acf-map" data-zoom="16">
                            <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
                        </div>
                    <?php endif; ?>
                </div>

                <div>
                    <strong>
                        FIDO Member Plenary
                    </strong>
                    <p>
                        Authenticate immediately precedes the FIDO Alliance Member Plenary, which takes place October 20-22 - and is restricted to employees of current FIDO Alliance members. All FIDO members receive a discount on Authenticate registration and can save even more by attending Authenticate and the plenary.
                    </p>
                    <p>To receive this discount code please email <a href="mailto:authenticate@fidoalliance.org">authenticate@fidoalliance.org</a></p>
                </div>

                <?php 
                $table = get_sub_field( 'pricing_table' );
                if ( ! empty ( $table ) ) { ?>

                    <div class="section-heading text-center m-auto pb-10 pt-5">
                        <h2 class="text-uppercase text-primary">Pricing</h2>
                    </div>
                    <?php
                    echo '<table border="0" class="table" style="background-color: #f9f9f9;">';
                    if ( ! empty( $table['caption'] ) ) {
                        echo '<caption>' . $table['caption'] . '</caption>';
                    }
                    if ( ! empty( $table['header'] ) ) {
                        echo '<thead>';
                        echo '<tr>';
                        foreach ( $table['header'] as $th ) {
                            echo '<th>';
                            echo $th['c'];
                            echo '</th>';
                        }
                        echo '</tr>';
                        echo '</thead>';
                    }
                    echo '<tbody>';
                    foreach ( $table['body'] as $tr ) {
                        echo '<tr>';
                        foreach ( $tr as $td ) {
                            echo '<td>';
                            echo $td['c'];
                            echo '</td>';
                        }
                        echo '</tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                }
                ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
</div>
</section>
<?php endif; ?>