<?php
/**
* Template Name: Agenda
*/

get_header(); ?>
<div class="wrap">
  <h1>Agenda example</h1>
  <h2>Viernes, 27 de septiembre</h2>
  <?php
  if (have_posts()) :
      while (have_posts()) : the_post();
          $campo1 = get_field('field_67e2f17840618'); // Campo 1
          $campo2 = get_field('field_67e2f19a40619'); // Campo 2
          $campo3 = get_field('field_67e2f1a44061a'); // Campo 3

          if ($campo1) {
              echo '<p>Campo 1: ' . esc_html($campo1) . '</p>';
          }

          if ($campo2) {
              echo '<p>Campo 2: ' . esc_html($campo2) . '</p>';
          }

          if ($campo3) {
              echo '<p>Campo 3: ' . esc_html($campo3) . '</p>';
          }
      endwhile;
  else :
      echo '<p>No se encontraron publicaciones.</p>';
  endif;
  ?>
  
</div>

<?php get_footer(); ?>
