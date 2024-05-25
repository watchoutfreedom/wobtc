<?php
/**
* Template Name: Home
* teste 2
*/

get_header(); ?>

<?php get_template_part('components/hero'); ?>
<div class="heading">
	<h2 class="heading__title">Sponsors</h2>
	<div class="heading__btns">
		<a href="">Quiero ser sponsor</a>
	</div>
</div>
<?php get_template_part('components/sponsor'); ?>
<div class="heading">
	<h2 class="heading__title">Partners</h2>
	<div class="heading__btns">
		<a href="">Quiero ser partner</a>
	</div>
</div>
<?php get_template_part('components/partner'); ?>
<div class="heading">
	<h2 class="heading__title">Ponentes</h2>
	<div class="heading__btns">
		<a href="">Quiero ser ponente</a>
	</div>
</div>
<?php get_template_part('components/ponentes'); ?>
<div class="heading">
	<h2 class="heading__title">Entradas 2024</h2>
	<div class="heading__btns">
		<a href="">Comprar en euros</a>
		<a href="">Comprar en Bitcoins</a>	
	</div>
</div>
<?php get_template_part('components/pricing'); ?>

<?php get_footer(); ?>
