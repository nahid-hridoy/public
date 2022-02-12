<?php 
    $blg_featured_img = get_the_post_thumbnail_url();
    if (empty($blg_featured_img))
    {
        $blg_featured_img = "/wp-content/uploads/inf-2.jpg";
    }
?>

<div class="col-md-6 col-lg-4">
    <div class="article-card">
        <div class="article-card-image">
        <?php 
            $postid = get_the_ID();
            $s_categories = get_the_category( $postid ); 
        ?>
        <?php foreach( $s_categories as $s_category ): ?>
        <span class="badge badge-white"><?php echo $s_category->name; ?></span>
        <?php endforeach; ?>
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo esc_url( $blg_featured_img ); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" />
        </a>
        </div>
        <div class="article-card-body">
        <h4 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </div>
        <div class="article-footer">
        <a href="<?php the_permalink(); ?>" class="read-more">
            <span class="link-text"><?php echo esc_html_e( 'Read More','authenticate' ); ?></span>
            <span class="icon-arrow-right"></span>
        </a>
        </div>
    </div>
</div>