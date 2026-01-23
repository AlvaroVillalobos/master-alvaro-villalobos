<?php
get_header();
/* Template Name: sobre mi
 */
?>

<div clas="generico">

   <div clas=""> Precios súper rebajados</div>
   <h1>
        <?php the_title();?>
   </h1>
 
   <section id="contenido">
      <?php
      echo the_content();
      ?>
   </section>
   <?php 
// Busca en: /tu-tema/plantillas/display-posts/card-posts.php
// Llamamos al archivo que tiene el Loop y la Query
get_template_part( 'plantillas/trespost' );
?>

</div>

 <?php
 get_footer();