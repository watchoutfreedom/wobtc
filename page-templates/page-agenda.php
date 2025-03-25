<?php
/**
* Template Name: Agenda
*/

get_header(); ?>
<div class="wrap">
  <h1>Agenda example</h1>
  <h2>Viernes, 27 de septiembre</h2>
  <?php
    // Asegúrate de estar en el bucle de WordPress
    if (have_posts()) :
        while (have_posts()) : the_post();
            // Obtener el grupo de campos utilizando el nombre del grupo (en lugar del field key)
            $grupo_campos = get_field('viernes'); // Cambia 'nombre_del_grupo' por el nombre correcto del grupo

            // Verifica si el grupo de campos tiene contenido
            if ($grupo_campos) {
                // Mostrar los valores dentro de una lista <ul>
                echo '<ul>';

                // Acceder y mostrar cada uno de los subcampos dentro del grupo
                if (isset($grupo_campos['field_67e2f17840618'])) {
                    echo '<li>' . esc_html($grupo_campos['field_67e2f17840618']) . '</li>'; // Campo 1
                }

                if (isset($grupo_campos['field_67e2f19a40619'])) {
                    echo '<li>' . esc_html($grupo_campos['field_67e2f19a40619']) . '</li>'; // Campo 2
                }

                if (isset($grupo_campos['field_67e2f1a44061a'])) {
                    echo '<li>' . esc_html($grupo_campos['field_67e2f1a44061a']) . '</li>'; // Campo 3
                }

                echo '</ul>';
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
