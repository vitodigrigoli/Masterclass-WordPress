<?php

	/* Dependecies
	------------------------------------------------------------------------- */
	require_once('blocks/actions-create-blocks.php');


	/* Setup theme
	--------------------------------------------------------------------------*/
	function ge_setup(){

		// Enable featured image
		add_theme_support( 'post-thumbnails' );

		// Enable custom logo
		add_theme_support( 'custom-logo' );

		// Enable excerpt page
		add_post_type_support( 'page', 'excerpt' );

		// Custom menu areas
		register_nav_menus( array(
			'header' => esc_html__( 'Header', 'ge' )
		));
	}

	add_action( 'after_setup_theme', 'ge_setup' );


	/* Enqueue CSS
	--------------------------------------------------------------------------*/
	function ge_styles(){
		wp_enqueue_style( 'ge-style', get_template_directory_uri().'/style.css' );
		wp_enqueue_style( 'ge-google-font','//fonts.googleapis.com/css?family=Manrope:wght@200;300;400;500;600;700;800&family=Indie+Flower&display=swap');
	}

	add_action( 'wp_enqueue_scripts', 'ge_styles' );


	/* Enqueue JS
	--------------------------------------------------------------------------*/
  	function ge_scripts(){
		wp_enqueue_script( 'ge-scripts-js', get_template_directory_uri().'/assets/js/scripts.js', null, null, true );
	}

	add_action( 'wp_enqueue_scripts', 'ge_scripts' );


	/* Add Font Awesome
  	------------------------------------------------------------------------- */
	  function ge_fontawesome_kit() {

		wp_enqueue_script( 'fa-kit', '//kit.fontawesome.com/3352ada0d1.js', null, false  );
	}
	
	add_action( 'wp_enqueue_scripts', 'ge_fontawesome_kit' );
	

	/* Enable Custom Blocks preview on Gutemberg
	--------------------------------------------------------------------------*/
	function ge_gutenberg_preview() {
		wp_enqueue_style( 'ge-gutemberg-preview', get_theme_file_uri( '/blocks/preview.css' ), false );
	}

	add_action( 'enqueue_block_editor_assets', 'ge_gutenberg_preview' );
?>
