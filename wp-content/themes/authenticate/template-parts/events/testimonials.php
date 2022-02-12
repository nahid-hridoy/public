<?php
    $testi_bg = get_field('ev_testi_background_image');
?>


<div class="testimonial-section decorated-section">
    <div class="decor" style="background-image: url(<?php echo esc_url( $testi_bg['url'] ) ?>)"></div>
    <div class="container">
        <!-- testimonials 3 items required -->
        <div class="testimonials">
        <div class="row justify-content-center align-items-center">
            
        <?php
        $args = array(
            'post_type' => 'testimonial',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'ASC',
            'ignore_sticky_posts' => 1,
            'suppress_filters' => true,
            'posts_per_page' => 3
        
        );
        $loop = new WP_Query($args);
        $count = 0;
        while ($loop->have_posts()):
            $count++;
            $loop->the_post();
        ?>

        <?php
                $testi_auth_area = get_field('testi_area');
                $testi_auth_ratings = get_field('testi_ratings');
        ?>
        <!-- testimonial hidden on mobile -->
      
        <div class="<?php if( ($count % 2) != 0  ):?>col-md-6 col-lg-3 d-none d-md-block<?php else:?>col-md-6 col-lg-6<?php endif;?>">
        
            <div class="testimonial">
            <blockquote>
                <?php the_content(); ?>
                <footer>
                <ul class="rating">
                <?php for( $i = 0; $i < $testi_auth_ratings; $i++ ):  ?>
                    <li>
                    <span class="icon-star"></span>
                    </li>
                <?php endfor; ?>
                   
                </ul>
                <cite><?php the_title(); ?></cite>
                <span class="subcite"><?php echo $testi_auth_area; ?></span>
                </footer>
            </blockquote>
            </div>
        </div>
        <!-- testimonial main -> visible on mobile -->
        <?php endwhile; wp_reset_postdata(); ?>
          
            
            



        </div>
        </div>
    </div>
    </div>