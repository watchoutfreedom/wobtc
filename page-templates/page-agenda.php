<?php
/**
* Template Name: Agenda
*/

get_header(); ?>
<div class="wrap">
  <h2 class="day-title">Viernes, 3 de octubre</h2>
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
                    echo '<p>' . wp_kses_post( $descripcion ) . '</p></div>'; 
                }
            echo '</li>';
        }
        echo '</ul>';
    }
    ?>


<h2 class="day-title">Sábado, 4 de octubre</h2>
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
                  echo '<p>' . wp_kses_post( $descripcion ) . '</p></div>'; 
                }
            echo '</li>';
        }
        echo '</ul>';
    }
    ?>


<h2 class="day-title">Domingo, 5 de octubre</h2>
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
                  echo '<p>' . wp_kses_post( $descripcion ) . '</p></div>'; 
                }
            echo '</li>';
        }
        echo '</ul>';
    }
    ?>

</div>

<?php get_footer(); ?>
