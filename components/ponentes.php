<div class="ponentes">
    <?php 
    $args = array(
      'post_type' => 'ponente',
      'posts_per_page' => -1
    );
    $ponentes = get_posts($args);
    if ($ponentes): 
      foreach($ponentes as $ponente):  setup_postdata( $ponente );?>
      <div class="box2">
        <div class="single">
          <a href="<?php echo get_field("url",$ponente->ID) ?>" class="text-decoration-none 	text-dark" target="_blank">
            <img class="img-fluid img-thumbnail wob-thumbnail" src="<?php echo get_the_post_thumbnail_url($ponente->ID) ?>" alt="" >
            <div class="wob-thumbnail__name">
              <h5>
                <?php echo $ponente->post_title ?>
              </h5>
              <p>
                <?php echo $ponente->post_excerpt ?>
              </p>
            </div>
          </a>
        </div>
    </div>
      <?php endforeach;
      wp_reset_postdata();
    endif;?>
</div> <!-- ponentes -->