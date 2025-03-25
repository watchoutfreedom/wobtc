<?php
/**
* Template Name: Agenda
*/

get_header(); ?>
<div class="wrap">
  <h1>Agenda example</h1>
  <h2>Viernes, 27 de septiembre</h2>
  <?php 
// Check rows exists.
if( have_rows('field_67e2f16d40617') ):

    // Loop through rows.
    while( have_rows('field_67e2f16d40617') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('field_67e2f17840618');
        // Do something, but make sure you escape the value if outputting directly...

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>

</div>

<?php get_footer(); ?>
