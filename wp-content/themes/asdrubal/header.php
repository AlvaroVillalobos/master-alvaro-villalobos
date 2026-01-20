<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <header class="site-header">
        <div class="container-header">
            <div class="logo">
                <a href="<?php echo home_url('/'); ?>">
                    ASDRUBAL <span class="highlight">MARKETING</span>
                </a>
            </div>

            <nav class="main-nav">
                <ul>
                    <li><a href="<?php echo home_url('/'); ?>">Inicio</a></li>
                    <li><a href="<?php echo home_url('/sobre-nosotros'); ?>">Sobre Nosotros</a></li> 
                    <li class="cta-button"><a href="<?php echo home_url('/contacto'); ?>">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <div class="container-principal" style="max-width: 1200px; margin: 40px auto; padding: 0 20px;">