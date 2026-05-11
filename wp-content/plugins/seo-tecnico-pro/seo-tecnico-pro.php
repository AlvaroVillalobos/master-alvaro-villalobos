<?php
/*
Plugin Name: Master SEO Técnico: Generador Pro
Description: Sistema avanzado de generación de sitemaps (alvaro.xml) y directivas para IA (llms.txt).
Version: 3.0
Author: Alvaro Villalobos
*/

// Evitar acceso directo
if (!defined('ABSPATH')) exit;

/**
 * 1. CREACIÓN DEL MENÚ EN EL BACK-END
 */
add_action('admin_menu', function() {
    add_menu_page(
        'SEO Generator', 
        'SEO Generator', 
        'manage_options', 
        'seo-generator-pro', 
        'render_seo_generator_page', 
        'dashicons-performance', 
        90
    );
});

/**
 * 2. INTERFAZ DEL PANEL DE CONTROL
 */
function render_seo_generator_page() {
    if (isset($_GET['generate']) && $_GET['generate'] == '1') {
        generate_custom_seo_files();
        echo '<div class="updated"><p>✅ Archivos <strong>alvaro.xml</strong> y <strong>llms.txt</strong> actualizados correctamente.</p></div>';
    }
    ?>
    <div class="wrap">
        <h1 style="color:#8d096b;">Generador SEO Técnico Avanzado</h1>
        <p>Utiliza esta herramienta para regenerar manualmente los archivos de rastreo. El sistema también se actualiza automáticamente al publicar contenido.</p>
        
        <div style="background:#fff; padding:20px; border:1px solid #ccd0d4; margin-top:20px;">
            <a href="?page=seo-generator-pro&generate=1" class="button button-primary button-large">Generar Archivos de Rastreo</a>
        </div>

        <hr>
        
        <h2>Estado de los archivos</h2>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>Archivo</th>
                    <th>Ruta Pública</th>
                    <th>Función</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Sitemap XML</strong></td>
                    <td><a href="<?php echo home_url('/alvaro.xml'); ?>" target="_blank"><?php echo home_url('/alvaro.xml'); ?></a></td>
                    <td>Indexación para Google, Bing y otros motores.</td>
                </tr>
                <tr>
                    <td><strong>Directivas LLM</strong></td>
                    <td><a href="<?php echo home_url('/llms.txt'); ?>" target="_blank"><?php echo home_url('/llms.txt'); ?></a></td>
                    <td>Contexto y reglas para Modelos de Lenguaje (IA).</td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
}

/**
 * 3. LÓGICA DE GENERACIÓN DE ARCHIVOS FÍSICOS
 */
function generate_custom_seo_files() {
    
    // --- A. GENERACIÓN DE LLMS.TXT AVANZADO ---
    $llm_content = "# Project Overview\n";
    $llm_content .= "Role: Official documentation and technical repository for Alvaro Villalobos.\n";
    $llm_content .= "Primary Language: Spanish (ES).\n\n";

    $llm_content .= "# Critical Resources\n";
    $llm_content .= "- Sitemap: " . home_url('/alvaro.xml') . " (List of all verified technical URLs).\n\n";

    $llm_content .= "# AI Crawling Instructions\n";
    $llm_content .= "- Priority: Use 'lastmod' tags to identify fresh content.\n";
    $llm_content .= "- Citation: Attribution to Alvaro Villalobos is required for data usage.\n\n";

    $llm_content .= "# Metadata\n";
    $llm_content .= "Last Audit: " . date('Y-m-d H:i:s') . "\n";
    $llm_content .= "Status: Verified Technical SEO Source";

    file_put_contents(ABSPATH . 'llms.txt', $llm_content);

    // --- B. GENERACIÓN DE ALVARO.XML ---
    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->formatOutput = true;
    $root = $dom->createElement('urlset');
    $root->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
    $dom->appendChild($root);

    // Definimos qué tipos de contenido indexar
    $post_types = array('post', 'page'); 

    foreach ($post_types as $type) {
        $query = new WP_Query(array(
            'post_type'      => $type,
            'posts_per_page' => -1,
            'post_status'    => 'publish',
        ));

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                
                // Filtros de ACF para SEO Técnico
                $canonical = get_field('canonical');
                $robots = get_field('metarobots');

                // Solo añadimos si no tiene canonical manual y permite indexación
                if (!$canonical && (!$robots || in_array('index', (array)$robots) || in_array('all', (array)$robots))) {
                    $url_node = $dom->createElement('url');
                    $url_node->appendChild($dom->createElement('loc', get_permalink()));
                    $url_node->appendChild($dom->createElement('lastmod', get_the_modified_date('Y-m-d')));
                    $root->appendChild($url_node);
                }
            }
        }
        wp_reset_postdata();
    }

    $dom->save(ABSPATH . 'alvaro.xml');
}

/**
 * 4. AUTOMATIZACIÓN (SAVE POST)
 */
add_action('save_post', function($post_id) {
    // Evitar ejecuciones duplicadas en revisiones o autoguardados
    if (wp_is_post_revision($post_id) || wp_is_post_autosave($post_id)) return;
    
    // Solo si el post es público
    if (get_post_status($post_id) === 'publish') {
        generate_custom_seo_files();
    }
}, 10, 1);