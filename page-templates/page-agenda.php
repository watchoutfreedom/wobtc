<?php
/**
* Template Name: Agenda
*/

get_header(); ?>
<div class="wrap">
  <h1>Agenda example</h1>
  <h2>Viernes, 27 de septiembre</h2>

  <?php 
$rows = get_field('field_67e2f16d40617'); // Reemplaza 'repeater_field_name' con el nombre de tu campo repetidor

if( $rows ) {
    echo '<ul class="slides">'; // Clase opcional para la lista
    foreach( $rows as $row ) {
        $texto = $row['field_67e2f17840618']; // Reemplaza 'texto' con el nombre del subcampo donde guardas el texto
        echo '<li>';
            echo esc_html( $texto ); // Muestra el texto de manera segura
        echo '</li>';
    }
    echo '</ul>';
}
?>

</div>

<?php get_footer(); ?>
