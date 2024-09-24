<div class="sponsor">
<?php 	
  $args = array(
    'post_type' => 'artistas',
    'posts_per_page' => -1
  );

  $artistas = get_posts($args);
  if ($artistas): 
    foreach($artistas as $artista):  setup_postdata( $artista );?>
      <div class="sponsor__card">
        <div class="sponsor__content">
          <a href="<?php echo get_field("url",$artista->ID) ?>" class="sponsor__link" target="_blank">
            <img class="sponsor__img" src="<?php echo get_the_post_thumbnail_url($artista->ID) ?>" alt="<?php echo $artista->post_title ?>" >
            <h5 class="sponsor__title">
              <?php echo $artista->post_title ?>
            </h5>
            </a>
            </div>
      </div>
    <?php endforeach;
    wp_reset_postdata();
  endif;?>
</div> <!-- sponsor -->
