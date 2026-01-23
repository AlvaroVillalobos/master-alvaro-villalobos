<?php
// include_once 'header.php'; // Comentario corregido
get_header(); 
?>

<div class="generico">
    <h1>
        <?php single_cat_title(); ?>
    </h1>

    <section id="contenido">
        <?php 
        // the_content() ya imprime el contenido automáticamente, no lleva "echo" delante
        echo category_description(); 
        ?>
    </section>

    <section id="articulos">
        <?php
        $args = array(
            'cat' => get_query_var('cat'),
            'posts_per_page' => '-1',
            'post_type'      => 'post',
            'orderby'        => 'date',
            'order'          => 'DESC',
        );

        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                
                // Usamos la función nativa de WP para evitar errores de rutas
                // Busca en: plantillas/display-posts/card-post.php
                get_template_part( 'plantillas/display-posts/card-post' );
            }
        } else {
            echo "No hay posts";
        }
        
        wp_reset_postdata();
    ?>
    </section>
</div>

<?php
// include_once 'footer.php'; // Comentario corregido
get_footer();
?>