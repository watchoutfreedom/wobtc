<?php

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 */

// Get ACF vars from options

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/scss/main.css" as="styles">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
  <title><?php bloginfo('title'); ?></title>
  
  <meta charset="UTF-8">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="keywords" content="bitcoin, evento, Madrid, 2024, Blockchain, Talleres, Entrevista, Arte Bitcoin, Actuaciones, Merche, Hackaton, Debates">
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon.png" type="image/png" />


  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-1GPPQC4PBG"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1GPPQC4PBG');
  </script>

</head>

<body>
