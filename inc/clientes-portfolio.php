<?php $portfolio = get_page_by_title('portfolio'); ?>
<!--utilizar repetidor -->
<ul class="portfolio_lista slides_portfolio">
	<li>
		<div class="grid-8"><img src="<?php the_field('foto_01'); ?>" alt="Bicicleta Retrô"></div>
		<div class="grid-8"><img src="<?php the_field('foto_02'); ?>" alt="Bicicleta Passeio"></div>
		<div class="grid-16"><img src="<?php the_field('foto_03'); ?>"alt="Bicicleta Esporte"></div>
	</li>

	<li>
		<div class="grid-8"><img src="<?php the_field('foto_04'); ?>"alt="Bicicleta Retrô"></div>
		<div class="grid-8"><img src="<?php the_field('foto_05'); ?>" alt="Bicicleta Passeio"></div>
		<div class="grid-16"><img src="<?php the_field('foto_06'); ?>"alt="Bicicleta Esporte"></div>
	</li>
</ul>

<?php if (!is_page('portfolio')) { ?>}
<div class="call">
	<p><?php the_field('chamada_portfolio') ?>conheça mais o nosso portfólio</p>
	<a href="portfolio" class="btn">Portfólio</a>
</div>
<?php } ?>