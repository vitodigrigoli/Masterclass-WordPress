<?php

get_header();

?>

<!-- Overlay -->

<div class="overlay overlay--hidden">
	<video id="player" class="overlay__video" muted autoplay playsinline >
		<source src="<?php echo get_theme_file_uri( '/assets/images/anim4.webm') ?>">
	</video>
</div>


<!-- Header -->
<header class="header">
	<div class="container">

		<div class="header__text">

			<h1 class="text--1 watch"><?php bloginfo() ?></h1>

			<div class="header__text__sign watch">
				<img src="<?php echo get_theme_file_uri('assets//images/signature.png')?>" alt="firma daros">
			</div>

			<div class="header__text__excerpt">
				<p class="text--3 watch"><?php echo get_the_excerpt() ?></p>
			</div>
		
		</div>

		<div class="header__media">
			<figure class="picture">
				<img src="<?php echo get_theme_file_uri('assets//images/Da-Vinci.jpg')?>" alt="">
				<figcaption class="picture__caption watch">Da Vinci, 1997</figcaption>
			</figure>
		</div>
	</div>
</header>


<?php 
// WordPress Loop
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
else :
	?>
	<div class="container">
		<?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
	</div>

	<?php
endif;

?>

<script>	

	function supportsHEVCAlpha() {
		const navigator = window.navigator;
		const ua = navigator.userAgent.toLowerCase()
		console.log(ua)
		const hasMediaCapabilities = !!(navigator.mediaCapabilities && navigator.mediaCapabilities.decodingInfo)
		const isSafari = ((ua.indexOf('safari') != -1) && (!(ua.indexOf('chrome')!= -1) && (ua.indexOf('version/')!= -1)))
		return isSafari && hasMediaCapabilities
	}

	const overlay = document.querySelector('.overlay')
	const player = document.getElementById("player")

	const animation = () => {
		if( !supportsHEVCAlpha() ){
			overlay.classList.remove('overlay--hidden')
			player.play()
			player.addEventListener("ended", () => overlay.classList.add('overlay--hidden') )
		}
	}

	animation()

</script>

<?php

get_footer();

?>

