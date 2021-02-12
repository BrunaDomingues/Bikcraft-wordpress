<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php bloginfo('name'); ?></title>
        <link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css">
        <!-- Header Wordpress -->
            <?php wp_head(); ?>
        <!-- Fecha Header Wordpress -->
    </head>
    <body>
        <header>
            <nav>
                <?php
                    $args = array(
                        'menu' => 'principal',
                        'container' => false
                    );
                    wp_nav_menu( $args );
                ?>
            </nav>
            <h1><img src="<?php echo get_stylesheet_directory_uri();?>/img/rest.png" alt="Rest"></h1>
            <p>Rua Marechal 29 – Copacabana – Rj</p>
            <p class="telefone">2422-9201</p>
        </header>