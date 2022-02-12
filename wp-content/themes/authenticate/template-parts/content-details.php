<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package authenticate
 */

?>
<!-- contain main informative part of the site -->
<div class="page-holder">
	<main class="main">
		<div class="post-blocks">
			<!-- post section -->
			<section class="post-section">
				<div class="container">
                    <div class="row">
                        <div class="col-md-10">
                         <!-- post -->
                         <article class="post">
                        <?php /*
                        <div class="feature-image">
                        <img src="<?php the_post_thumbnail_url(  ); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" />
                        </div>
                        */ ?>
                        <div class="post-head">
                            <h2 class="text-primary text-uppercase"><?php the_title(); ?></h2>
                            <?php /* <span class="post-author">By: <?php echo get_the_author_meta( "display_name" ); ?></span> */ ?>
                        </div>
                        <div class="post-text">
                            <?php echo wpautop( the_content() ); ?>
                        </div>

                        <?php // if Video Link exists
                        $video_link = get_field( 'add_video_link' ); ?>
                        <?php if( $video_link ): ?>
                            <div class="embed-container mt-5">
                                <?php echo $video_link ?>
                            </div>
                            <style>
                            .embed-container { 
                                position: relative; 
                                padding-bottom: 56.25%;
                                overflow: hidden;
                                max-width: 100%;
                                height: auto;
                            } 

                            .embed-container iframe,
                            .embed-container object,
                            .embed-container embed { 
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                            }
                        </style>
                    <?php endif; ?>

                    <?php // if Gallery exists
                    $gallery = get_field( 'add_content_gallery' );
                    $gallery_title = get_field( 'add_content_gallery_title' );
                    $gallery_info = get_field( 'add_content_gallery_info' );
                    if ($gallery):

                        echo '<div class="gallery mt-5">';
                        echo '<link rel="stylesheet" type="text/css" media="all" href="'.get_stylesheet_directory_uri().'/css/lightbox.css">';
                        echo '<script type="text/javascript" src="'.get_stylesheet_directory_uri().'/js/lightbox.js"></script>'; ?>

                        <script>
                            lightbox.option({
                              'resizeDuration': 200,
                              'wrapAround': true
                          });
                      </script>

                      <?php
                      if ( $gallery_title ):
                          echo "<h3>" . $gallery_title . "</h3>";
                      endif;

                      if ( $gallery_info ):
                          echo "<p>" . $gallery_info . "</p>";
                      endif;

                      foreach( $gallery as $img ) {
                          echo '<a href="'.$img['url'].'" class="gallery-image" data-lightbox="gallery" data-title="'.$img['alt'].'">';
                          echo '<img src="'.$img['sizes']['medium'].'">';
                          echo '</a>';
                      }
                      echo '</div>';
                      ?>
                  <?php endif; ?>
				  
					<?php // if Documents exists
                    $doc_embed_code = get_field( 'doc_embed_code' );
                    $doc_title = get_field( 'doc_title' );
                    $doc_info = get_field( 'doc_info' );
					
					if ($doc_embed_code): ?>
						<style>
						.embed-container { 
							position: relative; 
							padding-bottom: 56.25%;
							overflow: hidden;
							max-width: 100%;
							height: auto;
						} 
						.embed-container iframe,
						.embed-container object,
						.embed-container embed { 
							position: absolute;
							top: 0;
							left: 0;
							width: 100%;
							height: 100%;
						}
						.documents .embed-container div {
							display: none;
						}
						</style>	
					<?php 	
                        echo '<div class="documents mt-5">';
							if ( $doc_title ):
							echo "<h3>" . $doc_title . "</h3>";
							endif;

							if ( $doc_info ):
							echo "<p>" . $doc_info . "</p>";
							endif;

							if ( $doc_embed_code ):
							echo '<div class="embed-container">' . $doc_embed_code . '</div>';
							endif;
						echo '</div>';
                      ?>
                  <?php endif; ?>
              </article>
          </div>
      </div>
  </div>
</section>
</div>
</main>
</div>