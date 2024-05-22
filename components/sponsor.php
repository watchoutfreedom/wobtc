<div class="sponsor">
<?php 	
  $args = array(
    'post_type' => 'sponsor',
    'posts_per_page' => -1
  );

  $sponsors = get_posts($args);
  if ($sponsors): 
    foreach($sponsors as $sponsor):  setup_postdata( $sponsor );?>
      <div class="slide box5">
        <div class="single">
          <a href="<?php echo get_field("url",$sponsor->ID) ?>" class="text-decoration-none text-dark" target="_blank">
            <img class="img-fluid img-thumbnail wob-thumbnail" src="<?php echo get_the_post_thumbnail_url($sponsor->ID) ?>" alt="" >
            <h5>
                <?php echo $sponsor->post_title ?>
            </h5>
          </a>
        </div>
      </div>
    <?php endforeach;
    wp_reset_postdata();
  endif;?>
</div> <!-- sponsor -->
