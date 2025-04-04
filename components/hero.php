<div class="hero" id="portada">
	<div class="hero__menu">
		<a href="#portada">Portada</a>
		<a href="#ponentes">Ponentes</a>
		<a href="#entradas">Entradas</a>
		<a href="#programa">Programa</a>
		<a href="#sponsor">Sponsors</a>
		<a href="#faq">FAQs</a>
		<a href="#2023">Evento23</a>
	</div>

	<div class="hero__img">
		<img src="<?php bloginfo('template_directory'); ?>/assets/img/wob25_01_promo_nologo.jpg" alt="Fotografia del evento wobitcoin" />
	</div>

	<div class="hero__content">
		<div class="hero__header">
			<div class="hero__logo">
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/wob24-logo.png"></a>
			</div>
			<div class="hero__meta"></div>
		</div>
		<div class="hero__message">
			<div class="hero__subtitle hero__subtitle">

				<span>
				<?php 
$grupo = get_field('field_67efd9320d32f'); // Obtiene el grupo de campos, NO imprime
if ($grupo && isset($grupo['field_67efd93f0d330'])) { 
    echo esc_html($grupo['field_67efd93f0d330']); // Imprime el campo de texto correcto
} else {
    echo "Campo vacío o no encontrado.";
}
?>
				</span>
			</div>
			<h1 class="hero__title">
				<?php the_field('field_67efd95d0d331'); ?>
			</h1>
			<div class="hero__btns">
				<a href="#ponentes" class="hero__link hero__link--arrow"><?php get_template_part('icons/arrow'); ?><span>Saber más</span></a>
				<a href="<?php the_field('field_67efd98d0d332'); ?>" target="_blank" class="hero__link hero__link--c">Entrada '25 en Euros</a>
				<a href="<?php the_field('field_67efd9b70d333'); ?>" target="_blank" class="hero__link hero__link--c hero__link--bitcoin">Entrada '25 en Bitcoin</a>
			</div>
		</div>
	</div>
</div>