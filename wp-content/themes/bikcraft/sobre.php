<?php	
	//Template Name: Sobre
	get_header();
	if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

	<?php	include(TEMPLATEPATH . "/inc/introducao.php");	?>

		<section class="missao_sobre container animar-interno">
			<div class="grid-10">
				<h2 class="subtitulo-interno">História, Missão e Visão</h2>
				<p><?php	the_field('missao');	?></p>
			</div>
			<div class="grid-6">
				<h2 class="subtitulo-interno">Valores</h2>
				<ul>
					<?php	the_field('valores');	?>
				</ul>
			</div>

			<div class="grid-16 foto-equipe">
				<img src="<?php	the_field('equipe_bikcraft');	?>" alt="Equipe Bikcraft">
			</div>

		</section>

	<?php include(TEMPLATEPATH . '/inc/qualidade.php')    ?>	


	<?php	endwhile; else: endif;	?>

<?php
	get_footer();	
?>