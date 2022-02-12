<?php
    //setup_postdata( $post ); 
    $blg_featured_img = get_the_post_thumbnail_url();
    if (empty($blg_featured_img))
    {
        $blg_featured_img = "/wp-content/uploads/inf-2.jpg";
    }
    $postid = get_the_ID();
?>
<?php
    $sp_terms = get_the_terms( $postid, 'Speaker-Category' );
?>
<div class="col-sm-6 col-lg-4 flex-direction-column filter-item <?php foreach( $sp_terms as $sp_term ): ?><?php echo $sp_term->slug; ?> <?php endforeach; ?>">
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
            <?php if( 1 == $fet_job ): ?>
            <?php echo wpautop( $sp_job['job_Name'] ); ?>
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