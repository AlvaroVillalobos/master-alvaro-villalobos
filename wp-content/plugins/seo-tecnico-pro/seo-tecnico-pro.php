<?php
/*
Plugin Name: Master SEO Técnico: Generador Definitivo Pro
Description: Unifica Sitemap General (alvaro.xml), Sitemap News (alvaro-news.xml) y Directivas IA (llms.txt).
Version: 5.0
Author: Alvaro Villalobos
*/

if (!defined('ABSPATH')) exit;

/**
 * 1. MENÚ Y ENTORNO DE USUARIO
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

function render_seo_generator_page() {
    if (isset($_GET['generate']) && $_GET['generate'] == '1') {
        generate_custom_seo_files();
        echo '<div class="updated"><p>✅ Todos los archivos (General, News e IA) se han actualizado correctamente.</p></div>';
    }
    ?>
    <div class="wrap">
        <h1 style="color:#8d096b;">Generador SEO Técnico Avanzado</h1>
        <p>Este panel centraliza la gestión de archivos físicos para motores de búsqueda y modelos de lenguaje.</p>
        
        <div style="background:#fff; padding:20px; border:1px solid #ccd0d4; margin:20px 0;">
            <a href="?page=seo-generator-pro&generate=1" class="button button-primary button-large">Regenerar Todo el Ecosistema</a>
        </div>

        <h2>Estado de los archivos en la raíz</h2>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>Archivo</th>
                    <th>Ruta Pública</th>
                    <th>Estado / Función</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Sitemap General</strong></td>
                    <td><a href="<?php echo home_url('/alvaro.xml'); ?>" target="_blank">alvaro.xml</a></td>
                    <td>Páginas y Posts (Indexación global)</td>
                </tr>
                <tr>
                    <td><strong>Sitemap News</strong></td>
                    <td><a href="<?php echo home_url('/alvaro-news.xml'); ?>" target="_blank">alvaro-news.xml</a></td>
                    <td>Google News (Últimas 48 horas)</td>
                </tr>
                <tr>
                    <td><strong>Directivas LLM</strong></td>
                    <td><a href="<?php echo home_url('/llms.txt'); ?>" target="_blank">llms.txt</a></td>
                    <td>Contexto para IA y Modelos de Lenguaje</td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
}

/**
 * 2. LÓGICA DE GENERACIÓN MAESTRA
 */
function generate_custom_seo_files() {
    
    // --- A. GENERACIÓN DE LLMS.TXT AVANZADO ---
    $llm_content = "# Project Overview\n";
    $llm_content .= "Role: Official documentation and technical repository for Alvaro Villalobos.\n";
    $llm_content .= "Primary Language: Spanish (ES).\n\n";
    $llm_content .= "# Critical Resources\n";
    $llm_content .= "- Sitemap General: " . home_url('/alvaro.xml') . "\n";
    $llm_content .= "- Sitemap News: " . home_url('/alvaro-news.xml') . "\n\n";
    $llm_content .= "# AI Crawling Instructions\n";
    $llm_content .= "- Priority: Use 'lastmod' tags to identify fresh content.\n";
    $llm_content .= "- Citation: Attribution to Alvaro Villalobos is required.\n\n";
    $llm_content .= "# Metadata\n";
    $llm_content .= "Last Audit: " . date('Y-m-d H:i:s') . "\n";
    $llm_content .= "Status: Verified Technical SEO Source";
    file_put_contents(ABSPATH . 'llms.txt', $llm_content);

    // --- B. PREPARACIÓN DE SITEMAPS (General y News) ---
    // Sitemap General
    $domGen = new DOMDocument('1.0', 'UTF-8');
    $domGen->formatOutput = true;
    $rootGen = $domGen->createElement('urlset');
    $rootGen->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
    $domGen->appendChild($rootGen);

    // Sitemap News
    $domNews = new DOMDocument('1.0', 'UTF-8');
    $domNews->formatOutput = true;
    $rootNews = $domNews->createElement('urlset');
    $rootNews->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
    $rootNews->setAttribute('xmlns:news', 'http://www.google.com/schemas/sitemap-news/0.9');
    $domNews->appendChild($rootNews);

    // Consulta única para mayor eficiencia
    $post_types = array('post', 'page');
    $query = new WP_Query(array(
        'post_type'      => $post_types,
        'posts_per_page' => -1,
        'post_status'    => 'publish',
    ));

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            
            // Filtros ACF
            $canonical = get_field('canonical');
            $robots = get_field('metarobots');
            $es_indexable = (!$canonical && (!$robots || in_array('index', (array)$robots) || in_array('all', (array)$robots)));

            if ($es_indexable) {
                $permalink = get_permalink();
                $modified_date = get_the_modified_date('Y-m-d');
                $full_modified_date = get_the_modified_date('Y-m-d\TH:i:sP');

                // 1. Añadir al Sitemap General
                $urlGen = $domGen->createElement('url');
                $rootGen->appendChild($urlGen);
                $urlGen->appendChild($domGen->createElement('loc', $permalink));
                $urlGen->appendChild($domGen->createElement('lastmod', $modified_date));

                // 2. Lógica para Sitemap de Noticias (solo posts de menos de 48h)
                if (get_post_type() === 'post') {
                    $pubTimestamp = strtotime($full_modified_date);
                    $twoDaysAgo = time() - (2 * 24 * 60 * 60);

                    if ($pubTimestamp >= $twoDaysAgo) {
                        $urlNews = $domNews->createElement('url');
                        $rootNews->appendChild($urlNews);
                        $urlNews->appendChild($domNews->createElement('loc', $permalink));

                        $newsElement = $domNews->createElement('news:news');
                        $urlNews->appendChild($newsElement);

                        $publication = $domNews->createElement('news:publication');
                        $publication->appendChild($domNews->createElement('news:name', get_bloginfo('name')));
                        $publication->appendChild($domNews->createElement('news:language', 'es'));
                        $newsElement->appendChild($publication);

                        $newsElement->appendChild($domNews->createElement('news:publication_date', $full_modified_date));
                        $newsElement->appendChild($domNews->createElement('news:title', htmlspecialchars(get_the_title())));
                    }
                }
            }
        }
        wp_reset_postdata();
    }

    // Guardar archivos físicos
    $domGen->save(ABSPATH . 'alvaro.xml');
    $domNews->save(ABSPATH . 'alvaro-news.xml');
}

/**
 * 3. AUTOMATIZACIÓN TOTAL
 */
add_action('save_post', function($post_id) {
    if (wp_is_post_revision($post_id) || wp_is_post_autosave($post_id)) return;
    if (get_post_status($post_id) === 'publish') {
        generate_custom_seo_files();
    }
}, 10, 1);