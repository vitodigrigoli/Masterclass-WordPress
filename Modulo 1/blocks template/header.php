<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>

        <style>
            body, .navbar__menu, .overlay, .footer {background: url('<?php echo get_theme_file_uri( '/assets/images/grain.png') ?>') var(--color-1);}
        </style>
    </head>
    <body <?php body_class(); ?>>

    <!-- Floating -->
    <a class="floating" href="https://wa.me/+393939328468"><i class="fa-brands fa-whatsapp"></i></a>

    <!-- Navbar -->
	<nav class="navbar">

        <div class="navbar__toggle" onclick="toggleMenu()"></div>

        <div class="navbar__logo"><span>DAROS</span></div>

        <div class="navbar__menu" id="menu">

            <div class="navbar__menu__wrapper">
                <div class="navbar__menu__picture">
                    <figure class="picture">
                        <img src="<?php echo get_theme_file_uri( '/assets/images/Pesci.jpg') ?>" alt="">
                    </figure>
                </div>

                <?php
                wp_nav_menu( array(
                    'theme_location' => 'header',
                    'container' => false,
                    'items_wrap' => '<ul class="navbar__menu__list watch">%3$s</ul>'
                ) );
                ?>

                <div class="navbar__menu__picture">
                    <figure class="picture">
                        <img src="<?php echo get_theme_file_uri( '/assets/images/Da-Vinci.jpg') ?>" alt="">
                    </figure>
                </div>
            </div>

            <div class="navbar__menu__wrapper">
                <div class="navbar__menu__credits">
                    Design by <a href="">GeForGe 🔥</a> 
                </div>
            </div>

        </div>

    </nav>