<?php
/**
* Template Name: Home
* teste 2
*/

get_header(); ?>

<?php get_template_part('components/hero'); ?>
<?php get_template_part('components/message'); ?>

<div class="heading heading--entradas" id="entradas">
	<h2 class="heading__title">Entradas 2024</h2>
	<div class="heading__btns">
		<a href="https://www.tickettailor.com/events/wobitcoin/1176670" target="_blank">Comprar en euros</a>
		<a href="https://pagos.dinerosinreglas.com/plugins/TicketTailor/3cbvZfxYjUHfAsE9NFzNMRQxFM9w" target="_blank">Comprar en Bitcoins</a>	
	</div>
</div>
<?php get_template_part('components/pricing'); ?>

<div class="heading" id="ponentes">
	<h2 class="heading__title">Ponentes</h2>
	<div class="heading__btns">
		<a href="https://docs.google.com/forms/d/e/1FAIpQLSe0-fwY0o65VI3YDfPkOtYn4jp-ye0hslGhrkKQboI3wfaC1A/viewform" target="_blank">Quiero ser ponente</a>
	</div>
</div>
<?php get_template_part('components/ponentes'); ?>

<div class="heading"  id="sponsor">
	<h2 class="heading__title">Sponsors</h2>
	<div class="heading__btns">
		<a href="https://docs.google.com/forms/d/e/1FAIpQLSe0-fwY0o65VI3YDfPkOtYn4jp-ye0hslGhrkKQboI3wfaC1A/viewform" target="_blank">Quiero ser sponsor</a>
	</div>
</div>

<?php get_template_part('components/sponsor'); ?>
<div class="heading" id="partner">
	<h2 class="heading__title">Partners</h2>
	<div class="heading__btns">
		<a href="https://docs.google.com/forms/d/e/1FAIpQLSe0-fwY0o65VI3YDfPkOtYn4jp-ye0hslGhrkKQboI3wfaC1A/viewform" target="_blank">Quiero ser partner</a>
	</div>
</div>
<?php get_template_part('components/partner'); ?>

<?php get_template_part('components/last'); ?>

<?php get_footer(); ?>
