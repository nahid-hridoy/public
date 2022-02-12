<section class="sponsors-section">
<div class="container">
    <div class="sponsors-wrapper">

    <?php
    if( have_rows('add_all_sponsors') ):
        $count = 0;
        while( have_rows('add_all_sponsors') ) : the_row();
        $count++;
            $spm_title = get_sub_field('sponsor_title');
            $sponsors = get_sub_field('assign_sponsor');
    ?>

    <div class="sponsor-item">
        <span class="sponsor-category <?php if( 1 == $count ): ?>lg<?php endif; ?>"><?php echo $spm_title; ?></span>
        

            <?php if( $sponsors ): ?>
            <ul class="sponsors-list signature-sponsors">
                <?php foreach( $sponsors as $sponsor ): 
                    $permalink = get_permalink( $sponsor->ID );
                    $title = get_the_title( $sponsor->ID );
                    $thumbnail_url = get_the_post_thumbnail_url( $sponsor->ID );
                ?>
                    <li>
                        <div class="logo-img">
                        <a href="<?php echo esc_url( $permalink ); ?>" >
                            <img class="<?php echo $sp_custom_class; ?>" src="<?php echo esc_url( $thumbnail_url ); ?>" alt="" />
                        </a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
      

    </div>

    
    <?php endwhile; endif; ?>



    </div>
</div>
</section>