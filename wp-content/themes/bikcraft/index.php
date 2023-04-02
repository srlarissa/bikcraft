
<?php	
	get_header();
	if ( have_posts() ) : while ( have_posts() ) : the_post();
?>


		<h1><?php	the_title();	?></h1>
<?php	
	the_content();
	endwhile; 
	else:
?>

<p><?php	_e('Sorry, no posts matched your criteria.')	?></p>

<?php	
	endif;
	get_footer();	
?>

	

	