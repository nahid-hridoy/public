<?php
wp_reset_query();
 ?>  
<div class="callout-section">
<div class="container">
    <div class="callout-blocks">
    
    <?php
    $row_c = 0;
    if( have_rows('add_event_callout') ):
        while( have_rows('add_event_callout') ) : the_row();
        $row_c++;

        $co_title = get_sub_field('evc_title');
        $co_img = get_sub_field('evc_featured_image');
        $co_desc = get_sub_field('evc_details');
        $co_link = get_sub_field('evc_button');
		$co_link2 = get_sub_field('evc_button2');
    ?>
    <!-- callout block -->
    <div class="callout-block">
        <div class="row <?php if( ($row_c%2) == 0 ): ?>flex-lg-row-reverse<?php endif; ?>">
        <div class="col-lg-6">
            <h3 class="d-lg-none"><?php echo $co_title; ?></h3>
            <div class="callout-image">
            <img src="<?php echo esc_url( $co_img['url'] ); ?>" alt="<?php echo esc_url( $co_img['alt'] ); ?>" />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="callout-content">
            <h3 class="d-none d-lg-block"><?php echo $co_title; ?></h3>
            <?php echo wpautop( $co_desc ); ?>
			<div class="row button2">
<div class="col-lg-6">
            <?php if( $co_link ): 
                $btn_title = $co_link['title'];    
                $btn_url = $co_link['url'];
                $link_target = $co_link['target'] ? $co_link['target'] : '_self';  
            ?>
                <a href="<?php echo esc_url( $btn_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-primary "><?php echo esc_html( $btn_title ); ?></a>

            <?php endif; ?>
			</div>
			<div class="col-lg-6">
			
			 <?php if( $co_link2 ): 
                $btn_title2 = $co_link2['title'];    
                $btn_url2 = $co_link2['url'];
                $link_target2 = $co_link2['target'] ? $co_link2['target'] : '_self';  
            ?>
                <a href="<?php echo esc_url( $btn_url2 ); ?>" target="<?php echo esc_attr( $link_target2 ); ?>" class="btn btn-primary "><?php echo esc_html( $btn_title2 ); ?></a>

            <?php endif; ?>
			</div>
			</div>
			
            </div>
        </div>
        </div>
    </div>
    <!-- callout block -->
    <?php endwhile; endif; ?>


    </div>
</div>
</div>