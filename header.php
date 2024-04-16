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
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel='dns-prefetch' href='//polyfill.io' />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;700&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Event",
      "name": "Watch Out, Bitcoin!'24",
	  "url":"https://wobitcoin.org/",
      "startDate": "2024-09-27T10:00-23:00",
      "endDate": "2024-08-29T10:00-20:00",
      "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
      "eventStatus": "https://schema.org/EventScheduled",
      "location": {
        "@type": "Place",
        "name": "Espacio Pablo VI",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Paseo Juan XXIII, 3",
          "addressLocality": "Madrid",
          "postalCode": "28040",
          "addressRegion": "MA",
          "addressCountry": "ES"
        }
      },
      "image": [
		"https://wobitcoin.org/wp-content/themes/Basebuild/dist/img/icon-naranja.png",
        "https://wobitcoin.org/wp-content/themes/Basebuild/dist/img/wob24_retiro_lowres.jpg",
        "https://wobitcoin.org/wp-content/themes/Basebuild/dist/img/wob23_auditorio_low_res.jpg"
       ],
      "description": "El mayor evento sobre Bitcoin en español. The most important Bitcoin event in spanish community",
      "offers": {
        "@type": "Offer",
        "url": "https://www.wobitcoin.org/",
        "price": "119",
        "priceCurrency": "EUR",
        "availability": "https://schema.org/InStock",
        "validFrom": "2024-03-01T12:00"
      },
      "organizer": {
        "@type": "Organization",
        "name": "Watch Out, Freedom!",
        "url": "https://watchoutfreedom.com"
      }
    }
    </script>


  <?php wp_head(); ?>

  <!-- test css file -->
  <link rel="stylsheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/main.css" />
</head>

<body <?php body_class(); ?>>


<div class="glowing">
    
    <span style="--i:1;"></span>
    
    <span style="--i:2;"></span>
    
    <span style="--i:3;"></span>
    
</div>

<nav class="navbar navbar-expand-md bg-orange-2 sticky-top ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#wobnavbar" aria-controls="wobnavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

	  <!-- <a class="navbar-brand" href="">
      		<img src="<?php echo get_theme_file_uri() ?>/dist/img/logo-white.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
		</a> -->


    <div id="wobnavbar" class="collapse navbar-collapse justify-content-center">
      <ul class="navbar-nav">
		  <li class="nav-item" >
		  	<a class="nav-link"  href="#entradas">Entradas</a>
          </li>
		  <li class="nav-item" >
		  	<a class="nav-link"  href="#sponsors">Sponsors'24</a>
          </li>
		  <li class="nav-item" >
		  	<a class="nav-link"  href="#tienda_anchor">Tienda</a>
          </li>
		  <li class="nav-item" >
		  	<a class="nav-link"  href="#comunidad">Red</a>
          </li>
		  <li class="nav-item" >
		  	<a class="nav-link"  href="#contacto">Contacto</a>
          </li>
        </ul>
		<div class="social-nav">
			<ul class="navbar-nav">

			<li alt="instagram" class="nav-item"><a href="https://instagram.com/Wo_Bitcoin"><i class="fab fa-instagram"></i></a></li>
			<li alt="twitter" class="nav-item"><a href="https://twitter.com/Wo_Bitcoin"><i class="fab fa-twitter"></i></a></li>	
			<li alt="telegram" class="nav-item"><a href="https://t.me/WoBitcoin"><i class="fab fa-telegram"></i></a></li>
			<li alt="buttons" class="nav-item"><a href="https://help.wobitcoin.org/Explore#?zoom=5&lat=40.2476&lng=-3.5713"><img src="<?php echo get_theme_file_uri() ?>/dist/img/buttons.png" alt="" class="button-icon"></a></li>	
			<li alt="youtube" class="nav-item"><a href="https://www.youtube.com/@WOBitcoin"><i class="fab fa-youtube"></i></a></li>	
			</ul>
		</div>
	
	</div>

    </div>

  
  </nav>
  <div class="background bg-orange" data-bs-spy="scroll" data-bs-target="#wobnavbar">
  
	<div class="text-white welcome__section">
		<div class="title__container column d-flex">
			<div class="header__logo">
				<div class="offer__message">¡Periodo Early Bird!</div>
				<img class="img-fluid  header__logo--img pt-5" src="<?php echo get_theme_file_uri() ?>/dist/img/wob24_final_00.png" alt="">
			</div>
			<div class="col-md-5 d-flex">
				<div id="entradas" class="pb-5 home-title">
					<div class="slogan__pre">27, 28 y 29 de septiembre // Espacio Pablo VI, Madrid</div>	

					<p class=" slogan orange">Un nuevo camino, para pensar juntos.</p>	
					<!-- <h1 class=" fs-2 pt-5 orange">No one thinks about Bitcoin like you do.</h1> -->
					<p class="slogan__sub">Descubre, aprende y comparte de la mano de expertos -y no tan expertos- en el evento referencia sobre Bitcoin en español.</p>
					<!-- <p class="orange">Learn, share, improve, and collaborate hand in hand with the best known in the Hispanic world and beyond.</p> -->
					<a class="my-button btc " href="https://www.tickettailor.com/events/wobitcoin/1176670">
						ENTRADAS EN EUROS
					</a>
					<!-- <h1 class=" fs-2 pt-5 ">O adquiere tu entrada con Bitcoin</h1> -->
					<!-- <p class=" ">Y aparece en todas las wobTalks y proyectos anuales de la asociación por el mismo precio.</p> -->
					<a class="my-button btc-orange" href="https://pagos.dinerosinreglas.com/plugins/TicketTailor/3cbvZfxYjUHfAsE9NFzNMRQxFM9w">
						ENTRADAS EN BITCOIN
					</a>

				</div>
			</div>
		</div>
	</div>

	<?php include get_template_directory() . '/modal.php'; ?>