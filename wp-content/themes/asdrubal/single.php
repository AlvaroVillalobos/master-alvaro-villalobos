<?php get_header(); ?>

<div class="generico">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>

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