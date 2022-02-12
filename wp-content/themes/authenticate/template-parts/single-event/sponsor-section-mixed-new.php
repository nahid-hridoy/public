<?php
    $sp_sec_ttile = get_field( 'sponsor_sec_title' );
?>

<style>
    ul.sponsors-list.signature-sponsors.fourlogo li {
        width: 24.33% !important;
    }

    #sponsors {
        margin-top: 4rem;
    }
</style>

<section id="sponsors" class="sponsors-section">
    <div class="container">

    <?php
    if( have_rows('add_all_sponsors') ):
        $count = 0;
        while( have_rows('add_all_sponsors') ) : the_row();
        $count++;
            $spm_title = get_sub_field('sponsor_title');
            $sponsors = get_sub_field('assign_sponsor');
    ?>
    <div class="section-heading text-center mb-0">
        <h2 class="text-uppercase"><?php echo $spm_title; ?></h2>
    </div>

    <?php if( $sponsors ): ?>
    <ul class="sponsors-list signature-sponsors fourlogo">

        <?php foreach( $sponsors as $sponsor ): 
            $permalink = get_permalink( $sponsor->ID );
            $title = get_the_title( $sponsor->ID );
            $thumbnail_url = get_the_post_thumbnail_url( $sponsor->ID );
        ?>
            <li>
                <div class="logo-img">
                <a href="<?php echo esc_url( $permalink ); ?>">
                    <img class="<?php echo $sp_custom_class; ?>" src="<?php echo esc_url( $thumbnail_url ); ?>" alt="" />
                </a>
                </div>
            </li>

        <?php endforeach; ?>
       
    </ul>
    <?php endif; ?>
    <?php endwhile; endif; ?>
    


    <!-- <div class="section-btn text-center">
        <a href="#" class="btn btn-primary btn-lg">Signup for This Event</a>
        <a href="#" class="btn btn-secondary btn-lg">See all sponsors</a>
    </div> -->
    </div>
</section>