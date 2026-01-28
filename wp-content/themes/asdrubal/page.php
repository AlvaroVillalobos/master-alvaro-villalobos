<?php
include_once 'header.php';?>

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