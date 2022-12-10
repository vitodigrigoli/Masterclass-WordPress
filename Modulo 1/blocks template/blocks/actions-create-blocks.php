<?php
use function Genesis\CustomBlocks\add_block;
use function Genesis\CustomBlocks\add_field;

/*
-----------------------------------
Example Custom Block
-----------------------------------

function register_prefix_name_block() {

  add_block( 'prefix-name', array( 
    'title'    => 'PREFIX NAME', 
    'category' => 'common', 
    'icon'     => 'whatshot',  
  ));

  add_field( 'prefix-name', 'title' );

  add_field( 'prefix-name', 'description', array(
    'control' => 'textarea'
  ) );

  add_field( 'prefix-name', 'isValue', array(
    'control' => 'toggle'
  ) );

  add_field( 'prefix-name', 'button-cta', array(
    'control' => 'text',
    'width' => '50'
  ) );

  add_field( 'prefix-name', 'image', array(
    'control' => 'image'
  ) );

  add_field( 'prefix-name', 'inner blocks', array(
    'control' => 'inner_blocks'
  ) );
}

add_action( 'genesis_custom_blocks_add_blocks', 'register_prefix_name_block' );
*/


/*
-----------------------------------
Panel
-----------------------------------
*/

function register_ge_panel_block() {

  add_block( 'ge-panel', array( 
    'title'    => 'GE PANEL', 
    'category' => 'common', 
    'icon'     => 'whatshot',  
  ));

  add_field( 'ge-panel', 'text', array(
    'control' => 'textarea'
  ) );

  add_field( 'ge-panel', 'cta-link', array(
    'control' => 'text',
    'width' => '50'
  ) );

  add_field( 'ge-panel', 'image', array(
    'control' => 'image'
  ) );

}

add_action( 'genesis_custom_blocks_add_blocks', 'register_ge_panel_block' );


/*
-----------------------------------
Cover
-----------------------------------
*/

function register_ge_cover_block() {

  add_block( 'ge-cover', array( 
    'title'    => 'GE COVER', 
    'category' => 'common', 
    'icon'     => 'whatshot',  
  ));

  add_field( 'ge-cover', 'title' );

  add_field( 'ge-cover', 'description', array(
    'control' => 'textarea'
  ) );

  add_field( 'ge-cover', 'scroll-text' );

  add_field( 'ge-cover', 'image', array(
    'control' => 'image'
  ) );


}

add_action( 'genesis_custom_blocks_add_blocks', 'register_ge_cover_block' );



/*
-----------------------------------
Jumbotron
-----------------------------------
*/

function register_ge_jumbotron_block() {

  add_block( 'ge-jumbotron', array( 
    'title'    => 'GE JUMBOTRON', 
    'category' => 'common', 
    'icon'     => 'whatshot',  
  ));

  add_field( 'ge-jumbotron', 'title' );

  add_field( 'ge-jumbotron', 'description', array(
    'control' => 'textarea'
  ) );

  add_field( 'ge-jumbotron', 'image-1', array(
    'control' => 'image'
  ) );

  add_field( 'ge-jumbotron', 'image-2', array(
    'control' => 'image'
  ) );


}

add_action( 'genesis_custom_blocks_add_blocks', 'register_ge_jumbotron_block' );


/*
-----------------------------------
Grid
-----------------------------------
*/

function register_ge_grid_block() {

  add_block( 'ge-grid', array( 
    'title'    => 'GE GRID', 
    'category' => 'common', 
    'icon'     => 'whatshot',  
  ));

  add_field( 'ge-grid', 'image-1', array(
    'control' => 'image'
  ) );
  
  add_field( 'ge-grid', 'image-2', array(
    'control' => 'image'
  ) );

  add_field( 'ge-grid', 'image-3', array(
    'control' => 'image'
  ) );

  add_field( 'ge-grid', 'image-4', array(
    'control' => 'image'
  ) );

  add_field( 'ge-grid', 'image-5', array(
    'control' => 'image'
  ) );

}

add_action( 'genesis_custom_blocks_add_blocks', 'register_ge_grid_block' );

/*
-----------------------------------
Pictures
-----------------------------------
*/

function register_ge_pictures_block() {

  add_block( 'ge-pictures', array( 
    'title'    => 'GE PICTURES', 
    'category' => 'common', 
    'icon'     => 'whatshot',  
  ));

  add_field( 'ge-pictures', 'inner-blocks', array(
    'control' => 'inner_blocks'
  ) );
}

add_action( 'genesis_custom_blocks_add_blocks', 'register_ge_pictures_block' );


/*
-----------------------------------
Picture
-----------------------------------
*/

function register_ge_picture_block() {

  add_block( 'ge-picture', array( 
    'title'    => 'GE PICTURE', 
    'category' => 'common', 
    'icon'     => 'whatshot',  
  ));

  add_field( 'ge-picture', 'title' );


  add_field( 'ge-picture', 'image', array(
    'control' => 'image'
  ) );

}

add_action( 'genesis_custom_blocks_add_blocks', 'register_ge_picture_block' );
