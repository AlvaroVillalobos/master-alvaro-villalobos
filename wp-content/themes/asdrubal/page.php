<?php
include_once 'header.php';?>

        <!-- incluir campo personalizado'; -->
        <div class="descripcion_corta"><?php the_field('descripcion_corta'); ?></div> <br>

<div clas="generico">

   <h1>
        <?php the_title();?>
   </h1>
 
   <section id="contenido">
      <?php
      echo the_content();
      ?>
   </section>

</div>

 <?php
 include_once 'footer.php';?>