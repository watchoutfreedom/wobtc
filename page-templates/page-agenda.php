<?php
/**
* Template Name: Agenda
*/

get_header(); ?>
<div class="wrap">
  <h1>Agenda example</h1>
  <h2>Viernes, 27 de septiembre</h2>
  <?php 
    $grupo_campos = get_field('field_67e2f16d40617');

    if ($grupo_campos): ?>
        <ul class="campos-grupo">
            <?php 
            if (!empty($grupo_campos['field_67e2f17840618'])): ?>
                <li><?php echo esc_html($grupo_campos['field_67e2f17840618']); ?></li>
            <?php endif; ?>
            
            <?php if (!empty($grupo_campos['field_67e2f19a40619'])): ?>
                <li><?php echo esc_html($grupo_campos['field_67e2f19a40619']); ?></li>
            <?php endif; ?>
            
            <?php if (!empty($grupo_campos['field_67e2f1a44061a'])): ?>
                <li><?php echo esc_html($grupo_campos['field_67e2f1a44061a']); ?></li>
            <?php endif; ?>
        </ul>
<?php endif; ?>

</div>

<?php get_footer(); ?>
