<?php   $contato = get_page_by_title('contato');    ?>
<div class="grid-4 footer_redes">
	<ul>
		<li><a href="<?php the_field('link_1'); ?>" target="_blank"><img src="<?php the_field('link_img_1'); ?>" alt="<?php the_field('alt_redesocial_1');   ?>"></a></li>
		<li><a href="<?php the_field('link_2'); ?>" target="_blank"><img src="<?php the_field('link_img_2'); ?>" alt="<?php the_field('alt_redesocial_2');   ?>"></a></li>
		<li><a href="<?php the_field('link_3'); ?>" target="_blank"><img src="<?php the_field('link_img_3'); ?>" alt="<?php the_field('alt_redesocial_3');   ?>"></a></li>
    </ul>
</div>