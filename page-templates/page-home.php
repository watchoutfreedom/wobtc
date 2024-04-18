<?php
/**
* Template Name: Home
* teste
*/

get_header(); ?>


	<div class="float__message">
			<div class="title__container">
				<!-- <div class="col-md-6 text-center event_img">
					<img class="img-fluid pt-5" src="<?php echo get_theme_file_uri() ?>/dist/img/wob23_auditorio_low_res.jpg" alt="">
				</div> -->
				<div class="">
					<div class="mx-auto pb-5">
					<p class=" "> En 2024 + Encuentros + Talleres para noveles + Debates + Micro abierto + Hackaton + Proyectos + Lightning + Talleres avanzados + Brainstorms + Fan Zone + Oportunidad de negocio + Zona entrevistas + Merch + Presentaciones individuales + Arte Bitcoin + Actuaciones + Mucho +</p>
					<p class="float__message-subtitle">¿Tienes un proyecto, quieres colaborar y/o quieres ser sponsor?<a class="my-button button__over-orange" href="https://forms.gle/sSQiVc6MjqVizUZL7">COLABORAR</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="background-image parallax--ponentes parallax position-relative bg">
			<div class=" ">
				<div class="row border-top">
					<div class="slogan__title-section slogan" id="ponentes">
					</div>
				</div>
			</div>
	</div>

	<div class="container-fluid hotizontal-slider__section sponsors ponentes__section">
		<div class="hotizontal-slider__container">
		<h2 class="sponsor" style="color:white">Sponsor '24</h2>

		<div id="partners_anchor"></div>

			<div id="sponsors" class="wrapper5">
				<?php 	
					$args = array(
						'post_type' => 'sponsor',
						'posts_per_page' => -1
					);

					$sponsors = get_posts($args);
					if ($sponsors): 
						foreach($sponsors as $sponsor):  setup_postdata( $sponsor );?>
							<div class="slide box5">
								<div class="single">
									<a href="<?php echo get_field("url",$sponsor->ID) ?>" class="text-decoration-none text-dark" target="_blank">
										<img class="img-fluid img-thumbnail wob-thumbnail" src="<?php echo get_the_post_thumbnail_url($sponsor->ID) ?>" alt="" >
										<h5>
												<?php echo $sponsor->post_title ?>
										</h5>
									</a>
								</div>
							</div>
						<?php endforeach;
						wp_reset_postdata();
					endif;?>

			</div>
			<div class=" col-md-12 mx-auto my-auto px-5 py-5">
				<a href="mailto:sponsor@wobitcoin.org" target="_blank" class="button my-button button__over-orange">Unirme como Sponsor'24</a class="button">
			</div>
		</div>
	</div>

	<?php /*
	<div class="background-image parallax--mini-title parallax position-relative bg">
		<div class="container-lg ">
			<div class="row border-top">
				<div class="" id="ponentes_anchor">
					<h2>Ponentes '24</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid hotizontal-slider__section sponsors ponentes ponentes__section">
		<div class="hotizontal-slider__container">
			<div class="col-md-12 mx-auto my-auto px-5  py-5">
				<a href="mailto:info@wobitcoin.org" target="_blank" class="button my-button button__over-orange">Proponer ponente'24</a class="button">
			</div>
			<div id="ponentes" class="wrapper1 " >
				<?php 
				$args = array(
					'post_type' => 'ponente',
					'posts_per_page' => -1
				);
				$ponentes = get_posts($args);
				if ($ponentes): 
					foreach($ponentes as $ponente):  setup_postdata( $ponente );?>
					<div class="box2">
						<div class="single">
							<a href="<?php echo get_field("url",$ponente->ID) ?>" class="text-decoration-none 	text-dark" target="_blank">
								<img class="img-fluid img-thumbnail wob-thumbnail" src="<?php echo get_the_post_thumbnail_url($ponente->ID) ?>" alt="" >
								<div class="wob-thumbnail__name">
									<h5>
										<?php echo $ponente->post_title ?>
									</h5>
									<p>
										<?php echo $ponente->post_excerpt ?>
									</p>
								</div>
							</a>
						</div>
				</div>
					<?php endforeach;
					wp_reset_postdata();
				endif;?>

			</div>

		</div>
	
	</div>
	*/?>


	<div class="background-image parallax--ponentes parallax position-relative bg">
		<div class=" ">
			<div class="row border-top">
				<div class="slogan__title-section slogan" id="ponentes">
					Edición 2023
				</div>
			</div>
		</div>
	</div>

	<div class="background-image parallax--2023 parallax position-relative">
		<div class="container-lg ">
			<div class="row">
				<div class="col-md-12" id="ponentes_anchor">
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid seccion__texto sponsors ponentes ponentes__section ponentes__section--padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center py-5 gallery">
					<p class="texto__parrafo">En 2023, WOB creció con unas instalaciones únicas y multiplicó las oportunidades de encuentro entre los asistentes. Más de 300 personas se dieron cita en 3 días de actividades que mostraron la riqueza del pensamiento sobre Bitcoin en la comunidad hispana.</p>
				</div>
			</div>
		</div>
	
	</div>

	<div class="background-image parallax--tall parallax position-relative">
		<div class="container-lg ">
			<div class="row">
				<div class="col-md-12" id="ponentes_anchor">
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid seccion__texto sponsors ponentes ponentes__section ponentes__section--padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center py-5 gallery">
					<p class="texto__parrafo">Con capacidad para más de 600 personas, este año habrá más experiencias prácticas, formativas y oportunidades para establecer lazos de mutuo interés en el mejor ambiente.</p>
				</div>
			</div>
		</div>
	
	</div>
	<?php /*
	<div class="background-image--middle3 parallax--sponsors parallax position-relative" >
		<div class="container-lg">
			<div class="row border-top">
				<div class="col-md-12">
					<h2>Partners '24</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-lg sponsors hotizontal-slider__section hotizontal-slider__container ponentes__section">
		<div class="hotizontal-slider__container">
			<div id="partners" class="wrapper6">
				<?php 
					
					$args = array(
						'post_type' => 'partners',
						'posts_per_page' => -1
					);
					$sponsors = get_posts($args);
					if ($sponsors): 	
						foreach($sponsors as $sponsor):  setup_postdata( $sponsor );?>
					<div class="slide box6">
						<div class="single mb-4">
							<img class="img-fluid img-thumbnail wob-thumbnail" src="<?php echo get_the_post_thumbnail_url($sponsor->ID) ?>" alt="" class="img-fluid">
							<h5>
								<a href="<?php echo get_field("url",$sponsor->ID) ?>" class="text-decoration-none text-dark" target="_blank">
								<h5>
									<?php echo $sponsor->post_title ?>
								</h5>
								</a>
							</h5>
						</div>
					</div>
				<?php endforeach;
					wp_reset_postdata();
				endif;?>
			</div>
			<div class="col-md-12 mx-auto my-auto px-5  py-5">
				<a href="mailto:sponsor@wobitcoin.org" target="_blank" class="button my-button button__over-orange">Unirme como Partner'24</a class="button">
			</div>
		</div>
	</div>
	*/?>
	<div class="youtube video">
		<div class="youtube__wrap">
		<iframe width=""560 height="315" src="https://www.youtube.com/embed/Fy05-P2xakw?si=PAh3IlFO0oOQam8s&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
			<iframe width=""560 height="315" src="https://www.youtube.com/embed/06efjHgp62Q?si=PAh3IlFO0oOQam8s&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				<iframe width=""560 height="315" src="https://www.youtube.com/embed/F5fjW8IqJlw?si=PAh3IlFO0oOQam8s&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					<iframe width=""560 height="315" src="https://www.youtube.com/embed/SAoUcpMJhtI?si=PAh3IlFO0oOQam8s&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
		</div>
	</div>
	<div class="background-image parallax--mini-title parallax position-relative bg">
		<div class="container-lg">
			<div class="row border-top">
				<div class="col-md-12" id="comunidad">
					<h2>Red de Colaboración WOB</h2>
				</div>
			</div>
		</div>
	</div>		
	<div class="">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center py-5">
					<h5>Coordínate con otros asistentes para compartir transporte o vivienda, publica o consulta lugares que usan Bitcoin, encuentra oportunidades, solicita u ofrece tu ayuda para cualquier tema en esta herramienta web.</h5>
				</div>
				<div class="col-md-6 text-center d-flex align-items-center">
					<div class="mx-auto my-auto py-5">
						<a href="https://help.wobitcoin.org/HomeInfo" target="_blank" class="button my-button button__over-orange">Visitar</a class="button">
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="background-image parallax--mini-title parallax position-relative bg">
		<div class="container-lg">
			<div class="row border-top">
				<div class="col-md-12" id="tienda_anchor">
					<h2>Tienda y merch</h2>
				</div>
			</div>
		</div>
	</div>		
	<div class="">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center py-5">
					<h5>WOB es un proyecto sin ánimo de lucro. Consulta los artículos en nuestra página y apoya la causa de la asociación. Puedes recoger tu pedido en el evento o recibirlo en casa.</h5>
				</div>
				<div class="col-md-6 text-center d-flex align-items-center">
					<div class="mx-auto my-auto py-5">
						<a href="<?php echo get_field("merch"); ?>" target="_blank" class="button my-button button__over-orange">Consultar Tienda</a class="button">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="border-top ">

<div class="container-lg">
	<div class="row ">
		<div class="col-md-12 pt-5 pb-5" id="contacto">
			<div class="mb-5">
				<div class="square"></div>
				<h2>Contacto</h2>
				<div class="mx-auto my-auto py-5">
					<a href="mailto:info@wobitcoin.org" target="_blank" class="button my-button button__over-orange">Contactar</a class="button">
				</div>
			</div>
			<!-- <?php  echo do_shortcode("[weforms id=222]")?> -->
		</div>
	</div>
</div>
</div>

<?php get_footer(); ?>
