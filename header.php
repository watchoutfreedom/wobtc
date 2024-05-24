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
  <link rel='dns-prefetch' href='//polyfill.io' />
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

</head>

<body <?php body_class(); ?>>
