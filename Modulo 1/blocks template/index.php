<?php

get_header();

// WordPress Loop
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
	?>
		<div class="container">
			<?php the_content(); ?>
		</div>
	<?php

    endwhile;
else :
	?>
	<div class="container">
		<?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
	</div>

	<?php
endif;

get_footer();

?>