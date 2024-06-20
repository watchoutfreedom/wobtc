<div class="sponsor">
<?php 	
  $args = array(
    'post_type' => 'sponsor',
    'post_type' => 'Gold',
    'posts_per_page' => -1
  );

  $sponsors = get_posts($args);
  if ($sponsors): 
    foreach($sponsors as $sponsor):  setup_postdata( $sponsor );?>
      <div class="sponsor__card">
        <div class="sponsor__content">
          <a href="<?php echo get_field("url",$sponsor->ID) ?>" class="sponsor__link" target="_blank">
            <img class="sponsor__img" src="<?php echo get_the_post_thumbnail_url($sponsor->ID) ?>" alt="<?php echo $sponsor->post_title ?>" >
            <div style="display:none;">
              <?php echo get_field('category') ?>
              <?php echo $sponsor->category ?>

            </div>
            <h5 class="sponsor__title">
              <?php echo $sponsor->post_title ?>
            </h5>
            </a>
            </div>
      </div>
    <?php endforeach;
    wp_reset_postdata();
  endif;?>
</div> <!-- sponsor -->
