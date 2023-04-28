<?php
/*
------------------------------
Template Name: Gallery
------------------------------
*/


get_header();


// WordPress Loop
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

	<!-- Header -->
	<header class="header header--sticky">
		<div class="container">

			<div class="header__text">

				<h1 class="text--1 watch"><?php the_title()?></h1>

				<div class="header__text__sign watch">
					<img src="<?php echo get_theme_file_uri('assets/images/signature.png')?>" alt="firma daros">
				</div>

				<div class="header__text__excerpt">
					<p class="text--3 watch"><?php echo get_the_excerpt() ?></p>
				</div>
			
			</div>

			<div class=" header__media pictures">
				<?php the_content() ?>
			</div>

		</div>
	</header>

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