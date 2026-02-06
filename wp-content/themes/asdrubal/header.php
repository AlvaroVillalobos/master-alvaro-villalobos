<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all">

<?php get_template_part('componentes/metas-seo'); ?>
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
        <li><a href="<?php echo home_url('/sobre-mi'); ?>">Sobre Mi</a></li>
        <li><a href="<?php echo home_url('/category/seo/'); ?>">SEO</a></li> 
        <li><a href="<?php echo home_url('/category/sem/'); ?>">SEM</a></li>
        <li><a href="<?php echo home_url('/category/analitica-cro/'); ?>">CRO</a></li>
        
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn" id="new-menu-trigger">new</a>
            <ul class="dropdown-content" id="new-dropdown">
                <li><a href="<?php echo home_url('/coches/opel-corsa-seriedad-alemana/'); ?>">Opel Corsa</a></li>
                <li><a href="<?php echo home_url('/nuevo/sub-2'); ?>">Submenú 2</a></li>
                <li><a href="<?php echo home_url('/nuevo/sub-3'); ?>">Submenú 3</a></li>
            </ul>∫
        </li>

        <li class="cta-button"><a href="<?php echo home_url('/contacto'); ?>">Contacto</a></li>
    </ul>
</nav>
            </nav>
        </div>
    </header>
    
    <div class="container-principal" style="max-width: 1200px; margin: 40px auto; padding: 0 20px;">