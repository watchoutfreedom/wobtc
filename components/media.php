<div class="ponentes">
    <?php 
    $args = array(
      'post_type' => 'media',
      'posts_per_page' => -1
    );
    $medias = get_posts($args);
    if ($medias): 
      foreach($medias as $media):  setup_postdata( $media );?>
      <div class="ponentes__card">
        <a class="ponentes__link" href="<?php echo get_field("url",$media->ID) ?>" class="text-decoration-none 	text-dark" target="_blank"></a>            
        <img class="ponentes__img" src="<?php echo get_the_post_thumbnail_url($media->ID) ?>" alt="<?php echo $media->post_title ?>" >
        <div class="ponentes__content">
            <div class="ponentes__title">
              <h5>
                <?php echo $media->post_title ?>
              </h5>
              <p>
                <?php echo $media->post_excerpt ?>
              </p>
            </div>
        </div>
    </div>
      <?php endforeach;
      wp_reset_postdata();
    endif;?>
</div> <!-- ponentes -->