<?php
//Template Name: Portfolio
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php include(TEMPLATEPATH . "/inc/introducao.php") ?>

		<section class="container animar-interno">
			<ul class="rslides">
				<li>
					<blockquote class="quote_clientes">
						
					<p><?php the_field('quote_01'); ?></p>
						<cite><?php the_field('autor_01'); ?></cite>
					</blockquote>
				</li>

				<li>
					<blockquote class="quote_clientes">
						<p> <?php the_field('quote_02'); ?></p>
						<cite><?php the_field('autor_02'); ?></cite>
					</blockquote>
				</li>

				<li>
					<blockquote class="quote_clientes">
						<p><?php the_field('quote_03'); ?></p>
						<cite><?php the_field('autor_03'); ?></cite>
					</blockquote>
				</li> 
			</ul>
		</section>
<section class="portfolio">
	<div class="container">
	<?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php"); ?>
	</div>
</section>

		

		
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>