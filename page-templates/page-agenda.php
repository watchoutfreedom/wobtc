<?php
/**
* Template Name: Agenda
*/

get_header(); ?>
<div class="wrap">
  <h1>Agenda example</h1>
  <h2>Viernes, 27 de septiembre</h2>
  <?php 
    $rows = get_field('viernes');

    if( $rows ) {
        echo '<ul class="day">';
        foreach( $rows as $row ) {
            $hora = $row['hora'];
            $titulo = $row['titulo']; 
            $descripcion = $row['descripcion']; 
            echo '<li>';
                if( !empty($hora) ) {
                    echo '<div><strong>Hora:</strong> ' . esc_html( $hora ) . '</div>';
                }
                if( !empty($titulo) ) {
                    echo '<div><h3>' . esc_html( $titulo ) . '</h3>'; 
                }
                if( !empty($descripcion) ) {
                    echo '<p><strong>Descripción:</strong> ' . esc_html( $descripcion ) . '</p></div>'; 
                }
            echo '</li>';
        }
        echo '</ul>';
    }
    ?>
</div>

<?php get_footer(); ?>
