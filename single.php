<?php get_header(); ?>    

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="single">
    <div class="single__meta">
      <h1 class="single__title"><?php the_title(); ?></h1>
    </div>
    <div class="single__content main">
    <?php the_content("Sigue leyendo"); ?>     
    </div>
  
<?php endwhile; else: ?> 
	<?php include (TEMPLATEPATH . '/404.php'); ?>		
<?php endif; ?>
</article>

<?php get_footer(); ?>
