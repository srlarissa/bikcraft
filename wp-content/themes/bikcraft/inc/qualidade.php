<section class="qualidade container">
	<h2 class="subtitulo">Qualidade</h2>
	<img src="<?php	echo get_template_directory_uri();	?>/img/bikcraft-qualidade.png" alt="Bikcraft">
	<ul class="qualidade_lista">
		<li class="grid-1-3">
			<h3><?php the_field('titulo_1');    ?></h3>
			<p><?php the_field('content_1');    ?></p>
		</li>
		<li class="grid-1-3">
			<h3><?php the_field('titulo_2');    ?></h3>
			<p><?php the_field('content_2');    ?></p>
		</li>
		<li class="grid-1-3">
			<h3><?php the_field('titulo_3');    ?></h3>
			<p><?php the_field('content_3');    ?></p>
		</li>
	</ul>
	<div class="call">
		<p>conheça mais a nossa história</p>
		<a href="/bikcraft/sobre/" class="btn btn-preto">Sobre</a>
	</div>
</section>