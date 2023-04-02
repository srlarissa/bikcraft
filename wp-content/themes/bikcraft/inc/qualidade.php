<?php $contato = get_page_by_title('sobre');	?>
<section class="qualidade container"> 
	<h2 class="subtitulo"><?php	the_field('titulo_principal', $sobre );	?></h2>
	<img src="<?php	echo get_template_directory_uri();	?>/img/bikcraft-qualidade.png" alt="Bikcraft">
	<ul class="qualidade_lista">
		<li class="grid-1-3">
			<h3><?php the_field('titulo_1', $sobre );   ?></h3>
			<p><?php the_field('content_1', $sobre );    ?></p>
		</li>
		<li class="grid-1-3">
			<h3><?php the_field('titulo_2', $sobre );    ?></h3>
			<p><?php the_field('content_2', $sobre );    ?></p>
		</li>
		<li class="grid-1-3">
			<h3><?php the_field('titulo_3', $sobre );    ?></h3>
			<p><?php the_field('content_3', $sobre );    ?></p>
		</li>
	</ul>

	<?php	if ( !is_page('sobre')) {	?>
		<div class="call">
			<p><?php the_field('call_sobre_texto');    ?></p>
			<a href="/bikcraft/sobre/" class="btn btn-preto">Sobre</a>
		</div>
	<?php	}	?>
</section>