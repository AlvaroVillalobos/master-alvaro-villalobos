<?php
// 1. Desactivamos la funcionalidad (Esto es lo que ya tienes)
add_filter( 'wp_sitemaps_enabled', '__return_false' );

// 2. Acción para capturar la petición en una fase temprana (init)
add_action( 'init', function() {
    // Obtenemos la ruta limpia
    $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // Comprobamos si es exactamente el sitemap nativo
    if ( $request_uri === '/wp-sitemap.xml' ) {
        wp_redirect( home_url(), 301 );
        exit;
    }
});
?>