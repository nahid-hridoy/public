<?php 
$blg_featured_img = get_the_post_thumbnail_url();
if (empty($blg_featured_img))
{
    $blg_featured_img = "/wp-content/uploads/inf-2.jpg";
}

$current_CTG = get_queried_object();
$body_classes = get_body_class();
?>

<style>
p.speaker_name_cn {
    font-size: 1rem;
}

p.speaker_name_cn span {
    color: #25cc7e;
    font-weight: 500;
}
</style>

<div class="col-sm-6 col-lg-4 d-flex flex-direction-column">
    <div class="article-card">
        <div class="article-card-image">
            <?php 
            $postid = get_the_ID();
            $s_categories = get_the_terms( $postid, 'Content-Type' ); 
            ?>
            <?php foreach( $s_categories as $s_category ): ?>
                <?php if(in_array("archive", $body_classes)):  ?>
                    <?php if( ($current_CTG->name) == ($s_category->name)  ): ?>
                    <span class="badge badge-white"><?php echo $s_category->name; ?></span>
                <?php endif; ?>
            <?php else: ?>
                <span class="badge badge-white"><?php echo $s_category->name; ?></span>
            <?php endif; ?>
        <?php endforeach; ?>
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo esc_url( $blg_featured_img ); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" />
        </a>
    </div>
    <div class="article-card-body">
        <h4 class="article-title pb-2 mb-0">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h4>
        <?php
        $c_speakers = get_field('add_speaker_name_fl');
        ?>
        <?php if( $c_speakers ):
            if( count($c_speakers)){ ?>
             <p class="speaker_name_cn"><span>Speakers: </span> <?php
             foreach($c_speakers as $k=>$speaker){
                if($k) echo ', ';
                $c_speaker_name = get_the_title($speaker);
                echo $c_speaker_name;
            } ?>
            </p><?php
        } ?>
    <?php endif; ?>
</div>
</div>
</div>