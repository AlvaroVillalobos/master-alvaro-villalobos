<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            
            <article>
                <h2><?php the_title(); ?></h2>
                <div class="contenido">
                    <?php the_content(); ?>
                </div>
            </article>

        <?php endwhile; ?>
    <?php else : ?>
        <p>No hay contenido disponible.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>