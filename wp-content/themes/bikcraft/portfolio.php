<?php	
	//Template Name: Portfolio
	get_header();	
	if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

	<?php	include(TEMPLATEPATH . "/inc/introducao.php");	?>


		<section class="container animar-interno">
			<ul class="rslides">
				<li>
					<blockquote class="quote_clientes">
						<?php	the_field('quote_1');	?>
						<cite><?php	the_field('quote_author_1');	?></cite>
					</blockquote>
				</li>

				<li>
					<blockquote class="quote_clientes">
						<?php	the_field('quote_2');	?>
						<cite><?php	the_field('quote_author_2');	?></cite>
					</blockquote>
				</li>

				<li>
					<blockquote class="quote_clientes">
						<?php	the_field('quote_3');	?>
						<cite><?php	the_field('quote_author_3');	?></cite>
					</blockquote>
				</li>
			</ul>
		</section>

		
	<?php	include(TEMPLATEPATH . "/inc/clientes-portfolio.php");	?>

	<?php	endwhile; else: endif;	?>

<?php
	get_footer();	
?>
