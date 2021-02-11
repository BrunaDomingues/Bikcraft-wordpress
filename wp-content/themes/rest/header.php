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
                <ul>
                    <li class="current_page_item"><a href="index.html">Menu</a></li>
                    <li><a href="/xampp/bikcraft/sobre">Sobre</a></li>
                    <li><a href="/xampp/bikcraft/contato">Contato</a></li>
                </ul>
            </nav>

            <h1><img src="<?php echo get_stylesheet_directory_uri();?>/img/rest.png" alt="Rest"></h1>

            <p>Rua Marechal 29 – Copacabana – Rj</p>
            <p class="telefone">2422-9201</p>
        </header>