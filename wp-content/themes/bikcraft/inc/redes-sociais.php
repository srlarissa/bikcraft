<?php   $contato = get_page_by_title('contato');    ?>
<div class="grid-4 footer_redes">
	<ul>
		<li><a href="<?php the_field('link_1', $contato); ?>" target="_blank"><img src="<?php the_field('link_img_1', $contato); ?>" alt="<?php the_field('alt_redesocial_1', $contato);   ?>"></a></li>
		<li><a href="<?php the_field('link_2', $contato); ?>" target="_blank"><img src="<?php the_field('link_img_2', $contato); ?>" alt="<?php the_field('alt_redesocial_2', $contato);   ?>"></a></li>
		<li><a href="<?php the_field('link_3', $contato); ?>" target="_blank"><img src="<?php the_field('link_img_3', $contato); ?>" alt="<?php the_field('alt_redesocial_3', $contato);   ?>"></a></li>
    </ul>
</div>