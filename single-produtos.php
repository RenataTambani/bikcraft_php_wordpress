<?php
//Template Name: Single Produtos
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="container produto_item animar-interno">
			<div class="grid-11">
			<img src="<?php the_field('foto_produto_1'); ?>" alt="Bikcraft">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="grid-5 produto_icone">
			<img src="<?php the_field('icone_produto'); ?>" alt="Icone Passeio">
		</div>
			<div class="grid-8"><img src="<?php the_field('foto_produto2'); ?>" alt="Bikcraft Passeio"></div>
			<div class="grid-8 produto_info">
				<?php the_content(); ?>
			
			</div>
		</section>
<!-- 
		<section class="container produto_item">
			<div class="grid-11">
				<img src="img/produtos/bikcraft-esporte-1.jpg" alt="Bikcraft Esporte">
				<h2>Esporte</h2>
			</div>
			<div class="grid-5 produto_icone"><img src="img/produtos/esporte.png" alt="Icone Esporte"></div>
			<div class="grid-8"><img src="img/produtos/bikcraft-esporte-2.jpg" alt="Bikcraft Esporte"></div>
			<div class="grid-8 produto_info">
				<p>Mais rápida do que Forrest Gump, ninguém vai pegar você. A Bikcraft Esporte é uma bicicleta desenhada para a máxima performance. O seu desenpenho supera qualquer uma da categoria.</p>
				<ul>
					<li>Precisão</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>

		<section class="container produto_item">
			<div class="grid-11">
				<img src="img/produtos/bikcraft-retro-1.jpg" alt="Bikcraft Retrô">
				<h2>Retrô</h2>
			</div>
			<div class="grid-5 produto_icone"><img src="img/produtos/retro.png" alt="Icone Retrô"></div>
			<div class="grid-8"><img src="img/produtos/bikcraft-retro-2.jpg" alt="Bikcraft Retrô"></div>
			<div class="grid-8 produto_info">
				<p>O passado volta para lembrarmos o que devemos fazer no futuro. A Bikcraft Retrô é uma bicicleta estiloza, feita para você que gosta do clássico, mas que não abre mão do conforto.</p>
				<ul>
					<li>Conforto</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section> -->



<?php include(TEMPLATEPATH . "/inc/produtos-orcamento.php"); ?>
			</div>
		</section>
		<?php endwhile; else: endif; ?>
		<?php get_footer(); ?>