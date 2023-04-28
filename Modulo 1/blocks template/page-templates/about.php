<?php
/*
------------------------------
Template Name: About
------------------------------
*/

get_header();


// WordPress Loop
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

	<!-- Header -->
	<header class="header">
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

			<div class="header__media">

			<div class="picture">
				<img src="<?php echo get_theme_file_uri('assets//images/daros.jpg')?>" alt="">
			</div>

		</div>
	</header>

	<aticle class="article">
		<div class="container">
			<?php the_content() ?>
		</div>

	</aticle>



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