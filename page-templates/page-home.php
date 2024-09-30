<?php
/**
* Template Name: Home
* teste 2
*/

get_header(); ?>

<?php get_template_part('components/hero'); ?>
<?php get_template_part('components/message'); ?>
<div class="heading heading--entradas" id="entradas">
	<h2 class="heading__title">OG Entradas 2025<span></span></h2>
	<div class="heading__btns">
		<a href="https://www.tickettailor.com/events/wobitcoin/1411507" target="_blank">Comprar en Euros '25</a>
		<a class="heading__btns--bitcoin" href="https://pagos.dinerosinreglas.com/plugins/TicketTailor/Uh94CGZJqCbUXTN74KpkSPUrDsL" target="_blank">Comprar en Bitcoin '25</a>	
	</div>
</div>


<?php get_template_part('components/ponentes'); ?>

<div class="heading heading--entradas" id="entradas">
	<h2 class="heading__title">Entradas 2024<span>27, 28 y 29 de septiembre</span></h2>
	<div class="heading__btns">
		<a href="https://www.tickettailor.com/events/wobitcoin/1176670" target="_blank">Comprar en Euros</a>

		<a class="heading__btns--bitcoin" href="https://pagos.dinerosinreglas.com/plugins/TicketTailor/3cbvZfxYjUHfAsE9NFzNMRQxFM9w" target="_blank">Comprar en Bitcoin</a>	
	</div>
</div>
<?php get_template_part('components/pricing'); ?>

<div class="heading" id="red">
	<h2 class="heading__title">Publicaciones en la Red Wob!</h2>
	<div class="heading__btns">
		<!-- <a href="https://docs.google.com/forms/d/e/1FAIpQLSe0-fwY0o65VI3YDfPkOtYn4jp-ye0hslGhrkKQboI3wfaC1A/viewform" target="_blank">Quiero ser ponente</a> -->
	</div>
</div>

<div class="ponentes">
<iframe src="https://help.wobitcoin.org/es/Embbed/9" width="100%" height="800px" overflow="scroll" frameborder="0"></iframe>
</div>

<div class="heading"  id="programa">
	<h2 class="heading__title">Programa 2024</h2>
	<div class="heading__btns">
		<a href="https://wobitcoin.org/talleres/programa/" target="_blank">Ver programa</a>
	</div>
</div>


<div class="heading"  id="sponsor">
	<h2 class="heading__title">Sponsors 2024</h2>
	<div class="heading__btns">
		<!-- <a href="https://docs.google.com/forms/d/e/1FAIpQLSe0-fwY0o65VI3YDfPkOtYn4jp-ye0hslGhrkKQboI3wfaC1A/viewform" target="_blank">Quiero ser sponsor</a> -->
	</div>
</div>

<?php get_template_part('components/sponsor'); ?>

<div class="heading heading--bottom" id="partner">
	<h2 class="heading__title">Partners 2024</h2>
	<div class="heading__btns">
		<!-- <a href="https://docs.google.com/forms/d/e/1FAIpQLSe0-fwY0o65VI3YDfPkOtYn4jp-ye0hslGhrkKQboI3wfaC1A/viewform" target="_blank">Quiero ser partner</a> -->
	</div>
</div>

<?php get_template_part('components/partner'); ?>


<div class="heading heading--bottom" id="media">
	<h2 class="heading__title">Media Partners 2024</h2>
	<div class="heading__btns">
		<!-- <a href="https://docs.google.com/forms/d/e/1FAIpQLSe0-fwY0o65VI3YDfPkOtYn4jp-ye0hslGhrkKQboI3wfaC1A/viewform" target="_blank">Quiero ser Media</a> -->
	</div>
</div>
<?php get_template_part('components/media'); ?>

<div class="heading heading--bottom" id="media">
	<h2 class="heading__title">Bitcoin Artists 2024</h2>
	<div class="heading__btns">
		Descubre su trabajo en el evento.
	</div>
</div>
<?php get_template_part('components/artistas'); ?>



<div class="heading heading--bottom" id="faq">
	<h2 class="heading__title">FAQs</h2>
</div>
<?php get_template_part('components/faq'); ?>


<?php get_template_part('components/last'); ?>

<?php get_template_part('components/gallery'); ?>

<?php get_footer(); ?>
