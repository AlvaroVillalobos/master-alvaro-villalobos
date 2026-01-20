<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <header>
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <p><?php bloginfo('description'); ?></p>
        
        <nav>
            <ul>
                <li><a href="<?php echo home_url(); ?>">Inicio</a></li>
                <li><a href="<?php echo home_url('/sobre-nosotros'); ?>">Sobre Nosotros</a></li>
            </ul>
        </nav>
    </header>
    <hr>