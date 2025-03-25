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
        // Obtener el grupo de campos utilizando la clave del grupo
        $grupo_campos = get_field('field_67e2f16d40617'); 

        // Verifica si el grupo de campos tiene contenido
        if ($grupo_campos) {
            // Obtener los valores de los campos dentro del grupo
            $campo1 = $grupo_campos['field_67e2f17840618']; // Campo 1
            $campo2 = $grupo_campos['field_67e2f19a40619']; // Campo 2
            $campo3 = $grupo_campos['field_67e2f1a44061a']; // Campo 3

            // Mostrar los valores si existen
            if ($campo1) {
                echo '<p>Campo 1: ' . esc_html($campo1) . '</p>';
            }

            if ($campo2) {
                echo '<p>Campo 2: ' . esc_html($campo2) . '</p>';
            }

            if ($campo3) {
                echo '<p>Campo 3: ' . esc_html($campo3) . '</p>';
            }
        } else {
            echo '<p>No se encontraron datos del grupo de campos.</p>';
        }
    endwhile;
else :
    echo '<p>No se encontraron publicaciones.</p>';
endif;
?>

</div>

<?php get_footer(); ?>
