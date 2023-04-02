<?php	$portfolio = get_page_by_title('portfolio');	?>
<section class="portfolio">
	<div class="container">
		<ul class="portfolio_lista rslides_portfolio">
			<li>
				<div class="grid-8"><img src="<?php	the_field('bike_1', $portfolio )?>" alt="<?php	the_field('bike_1_alt', $portfolio )?>"></div>
				<div class="grid-8"><img src="<?php	the_field('bike_2', $portfolio )?>" alt="<?php	the_field('bike_2_alt', $portfolio )?>"></div>
				<div class="grid-16"><img src="<?php	the_field('bike_3', $portfolio )?>" alt="<?php	the_field('bike_3_alt', $portfolio )?>"></div>
			</li>
			<li>
				<div class="grid-8"><img src="<?php	the_field('bike_4', $portfolio )?>" alt="<?php	the_field('bike_4_alt', $portfolio )?>"></div>
				<div class="grid-8"><img src="<?php	the_field('bike_5', $portfolio )?>" alt="<?php	the_field('bike_5_alt', $portfolio )?>"></div>
				<div class="grid-16"><img src="<?php	the_field('bike_6', $portfolio )?>" alt="<?php	the_field('bike_6_alt', $portfolio )?>"></div>
			</li>

		</ul>
	</div>
</section>
<?php	if ( !is_page('portfolio')) {	?>
	<div class="call">
		<p><?php	the_field('chamada_portfolio');	?></p>
		<a href="/bikcraft/portfolio/" class="btn">Portfólio</a>
	</div>
<?php	}	?>