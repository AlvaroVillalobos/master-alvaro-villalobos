<section id="displaytresposts" class="flexcenter">
    <?php
        $args = array(
            'posts_per_page' => '4',
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