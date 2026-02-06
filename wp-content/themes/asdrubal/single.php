<?php get_header(); ?>

<h1><?php the_title(); ?></h1>

<?php
// Obtenemos el ID de la imagen destacada
$post_image_id = get_post_thumbnail_id( get_the_ID() );

if ( $post_image_id ) {
    // Obtenemos la URL y el texto ALT (vital para SEO)
    $img_src = wp_get_attachment_image_url( $post_image_id, 'large' );
    $img_alt = get_post_meta( $post_image_id, '_wp_attachment_image_alt', true );

    echo '<div class="contenedor-custom-fit">';
    echo '<img src="' . esc_url( $img_src ) . '" alt="' . esc_attr( $img_alt ) . '" class="img-object-fit" loading="lazy">';
    echo '</div>';
}
?>

<div class="generico">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php
            if ( in_category('coches')){
                ?>
        <table>
            <tr>
            <th></th>
            <th>Ficha técnica</th>
            </tr>

            <tr>
            <th>Marca</th>
            <td><?php the_field( 'marca' ); ?></td>
            </tr>

            <tr>
            <th>CV</th>
            <td><?php the_field( 'cv' ); ?></td>
            </tr>

            <tr>
            <th>Precio</th>
            <td><?php the_field( 'precio' ); ?></td>
            </tr>

            <tr>
            <th>Combustible</th>
            <td><?php the_field( 'tipo_de_combustible' ); ?></td>
            </tr>
        </table>
            
            <?php }
                else {}

                echo the_content();
                ?>



        <?php if( get_field('descripcion_corta') ): ?>
            <div class="descripcion_corta">
                <?php the_field('descripcion_corta'); ?>
            </div>
            <br>
        <?php endif; ?>

        <section id="contenido">
            <?php the_content(); ?>
            
        </section>

    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>