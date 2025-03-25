<?php
/**
* Template Name: Agenda
*/

get_header(); ?>
<div class="wrap">
  <h2 class="day-title">Viernes, 27 de septiembre</h2>
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
                    echo '<div class="time">' . esc_html( $hora ) . '</div>';
                }
                if( !empty($titulo) ) {
                  echo '<div class="content"><h3 class="title">' . esc_html( $titulo ) . '</h3>'; 
                }
                if( !empty($descripcion) ) {
                    echo '<p><strong>Descripción:</strong> ' . esc_html( $descripcion ) . '</p></div>'; 
                }
            echo '</li>';
        }
        echo '</ul>';
    }
    ?>


<h2 class="day-title">Sábado, 28 de septiembre</h2>
<?php 
    $rows = get_field('sabado');

    if( $rows ) {
        echo '<ul class="day">';
        foreach( $rows as $row ) {
            $hora = $row['hora'];
            $titulo = $row['titulo']; 
            $descripcion = $row['descripcion']; 
            echo '<li>';
                if( !empty($hora) ) {
                    echo '<div class="time">' . esc_html( $hora ) . '</div>';
                }
                if( !empty($titulo) ) {
                    echo '<div class="content"><h3 class="title">' . esc_html( $titulo ) . '</h3>'; 
                }
                if( !empty($descripcion) ) {
                  echo '<p>' . esc_html( $descripcion ) . '</p></div>'; 
                }
            echo '</li>';
        }
        echo '</ul>';
    }
    ?>


<h2 class="day-title">Domingo, 29 de septiembre</h2>
  <?php 
    $rows = get_field('domingo');

    if( $rows ) {
        echo '<ul class="day">';
        foreach( $rows as $row ) {
            $hora = $row['hora'];
            $titulo = $row['titulo']; 
            $descripcion = $row['descripcion']; 
            echo '<li>';
                if( !empty($hora) ) {
                    echo '<div class="time">' . esc_html( $hora ) . '</div>';
                }
                if( !empty($titulo) ) {
                  echo '<div class="content"><h3 class="title">' . esc_html( $titulo ) . '</h3>'; 
                }
                if( !empty($descripcion) ) {
                  echo '<p>' . esc_html( $descripcion ) . '</p></div>'; 
                }
            echo '</li>';
        }
        echo '</ul>';
    }
    ?>

</div>

<?php get_footer(); ?>
