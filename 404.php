<?php
$titulo = "Ejercicios PHP - Máster SEO";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<?php
/**
 * Máster SEO Técnico - Página de Error 404 personalizada
 * Proyecto: okdiario.com (Entorno PHP Puro)
 */

// 1. Enviar el código de estado HTTP 404 real (Fundamental para evitar Soft 404)
http_response_code(404);

// 2. Configuración de Metadatos para el Header
$page_title = "Error 404 - Página no encontrada | Proyecto Álvaro";
$meta_robots = "noindex, follow"; // Evitamos indexación pero permitimos flujo de rastreo

// 3. Carga del Header usando la raíz del documento para evitar errores de ruta
// Asegúrate de que header.php existe en la raíz de tu proyecto en MAMP
$path_header = $_SERVER['DOCUMENT_ROOT'] . '/header.php';

if (file_exists($path_header)) {
    include_once($path_header);
} else {
    // Fallback por si el header no existe, para que la página no rompa
    echo "<!DOCTYPE html><html><head><title>$page_title</title></head><body>";
}
?>

<main style="max-width: 800px; margin: 0 auto; padding: 100px 20px; text-align: center; font-family: sans-serif;">
    <h1 style="font-size: 3rem; color: #333;">404</h1>
    <h2 style="font-size: 1.5rem; color: #666;">Ups... la página que buscas no está aquí.</h2>
    
    <p style="margin: 20px 0; line-height: 1.6;">
        Parece que el enlace que has seguido está roto o la página ha sido movida. 
        Como <strong>Technical SEO</strong>, te recomiendo que utilices el buscador o vuelvas a la home.
    </p>

<div style="margin: 30px 0;">
    <form id="googleSearchForm" onsubmit="executeGoogleSearch(event)">
        <input type="text" id="searchQuery" placeholder="¿Qué buscabas en mi sitio?" required 
               style="padding: 12px; width: 300px; border: 2px solid #000; border-radius: 4px; font-size: 1rem;">
        <button type="submit" style="padding: 12px 24px; background: #222; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">
            Buscar con Google
        </button>
    </form>
</div>

<script>
function executeGoogleSearch(event) {
    event.preventDefault(); // Evita que el formulario recargue la página
    
    const query = document.getElementById('searchQuery').value;
    const domain = window.location.hostname; // Detecta automáticamente tu dominio (ej: localhost o okdiario.com)
    
    // Construimos la URL de Google con el operador site:
    // Ejemplo: https://www.google.com/search?q=site:okdiario.com+termino+buscado
    const googleUrl = `https://www.google.com/search?q=site:${domain}+${encodeURIComponent(query)}`;
    
    // Abrimos en una nueva pestaña
    window.open(googleUrl, '_blank');
}
</script>

    <nav>
        <a href="/" style="color: #007bff; text-decoration: none; margin: 0 10px;">Ir a la Portada</a> | 
        <a href="/sobre-mi" style="color: #007bff; text-decoration: none; margin: 0 10px;">¿Quién soy?</a>
    </nav>
</main>

<?php 
// 4. Carga del Footer
$path_footer = $_SERVER['DOCUMENT_ROOT'] . '/footer.php';

if (file_exists($path_footer)) {
    include_once($path_footer);
} else {
    echo "</body></html>";
}
?>