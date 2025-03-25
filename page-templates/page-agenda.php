<?php
/**
* Template Name: Agenda
*/

get_header(); ?>
<div class="wrap">
  <h1>Agenda example</h1>
  <h2>Viernes, 27 de septiembre</h2>
  <?php 
// Obtener el grupo de campos llamado 'viernes'
$grupo_campos = get_field('viernes');

if ($grupo_campos): ?>
    <ul class="campos-grupo">
        <?php 
        // Verificar y mostrar los campos dentro del grupo
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
