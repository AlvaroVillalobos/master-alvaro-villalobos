<?php
/**
 * Functions.php - Máster SEO Técnico
 */

// 1. Definición de rutas
$plantillas = __DIR__ . '/plantillas/'; 

// 2. Activamos el soporte para imágenes destacadas
add_theme_support( 'post-thumbnails' );

// 3. Borrar Sitemap nativo de WP para evitar conflictos con nuestro Sitemap de News
add_filter( 'wp_sitemaps_enabled', '__return_false' );

if ( has_action( 'init', 'wp_sitemaps_get_server' ) ) {
    remove_action( 'init', 'wp_sitemaps_get_server' );
}