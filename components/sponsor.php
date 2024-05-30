<div class="sponsor">
<?php 	
  $args = array(
    'post_type' => 'sponsor',
    'posts_per_page' => -1
  );

  $sponsors = get_posts($args);
  if ($sponsors): 
    foreach($sponsors as $sponsor):  setup_postdata( $sponsor );?>
      <div class="sponsor__card">
        <div class="sponsor__content">
          <a href="<?php echo get_field("url",$sponsor->ID) ?>" class="sponsor__link" target="_blank">
            <img class="sponsor__img" src="<?php echo get_the_post_thumbnail_url($sponsor->ID) ?>" alt="" >
          </a>
            <h5 class="sponsor__title">
               <a href="<?php echo get_field("url",$sponsor->ID) ?>" class="sponsor__link" target="_blank">
                <?php echo $sponsor->post_title ?>
              </a>
            </h5>
        </div>
      </div>
    <?php endforeach;
    wp_reset_postdata();
  endif;?>
</div> <!-- sponsor -->
