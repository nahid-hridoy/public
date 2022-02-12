<div class="speakers-wrapper">
    <?php  
      $speakers= get_field('add_speakers_od');
      if( $speakers ): ?>
    <div class="row">

    <?php 
        foreach( $speakers as $post ): 
        setup_postdata($post); 
    ?>

        <?php
            //setup_postdata( $post ); 
            $blg_featured_img = get_the_post_thumbnail_url();
            if (empty($blg_featured_img))
            {
                $blg_featured_img = "/wp-content/uploads/inf-2.jpg";
            }
            $postid = get_the_ID();
        ?>
        <!-- single member -->
        <div class="col-sm-6 col-lg-3 col-xxl-3 d-flex flex-direction-column">
        <div class="member-card">
            <div class="member-card-image">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo esc_url( $blg_featured_img ); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" />
            </a>
            </div>
            <div class="member-card-body">
            <h4 class="text-primary member-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php $sp_jobs = get_field( 'add_jobs', $post->ID ) ?>
            <?php if( $sp_jobs ): ?>
                <?php 
                foreach ($sp_jobs as $sp_job ): 
                    $fet_job = $sp_job['main_job'];
                ?>
                <?php $sp_jobs = get_field( 'add_jobs', $post->ID )?>
                <?php if( 1 == $fet_job ): ?>
                    <?php $sp_pos = $sp_job['job_comp']; ?>
                    <p><?php echo  $sp_job['job_Name'] ; ?><?php if( $sp_pos ): ?>, <b><?php echo $sp_pos; ?></b><?php endif; ?></p>
                <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
            <ul class="social">
                <?php $sp_socials = get_field( 'social_links', $post->ID ) ?>
                <?php if( $sp_socials ): ?>
                <?php 
                    foreach ($sp_socials as $sp_social ): 
                    $sp_social_link = $sp_social['link'];
                    $socialMedia = $sp_social['social_media'];
                ?>
                <li>
                    <a href="<?php echo esc_url( $sp_social_link ); ?>">
                        <span class="<?php if( $socialMedia == 'facebook' ){
                                        echo 'icon-facebook';
                                    }elseif( $socialMedia == 'twitter' ){
                                        echo 'icon-twitter';
                                    }elseif( $socialMedia == 'linkedin' ){
                                        echo 'icon-linkedin';
                                    }else{
                                        echo 'icon-instagram';
                                    } ?>"></span>
                    </a>
                </li>
                <?php endforeach; ?>
                <?php endif; ?>
            </ul>
            </div>
        </div>
        </div>
        <!-- single member -->
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    </div>