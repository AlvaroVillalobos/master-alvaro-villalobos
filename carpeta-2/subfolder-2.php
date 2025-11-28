<?php
 include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
  <section id="bannerhome">
    <h1 clas="h1small">Esto es OTRO SUBfolder</h1>
    <p>Probando como crear una estructura lógica de SUBfolders</p>
    <div title="texto hover en este elemento">Esto es un SUBfolder</div>
    <!-- etiqueta dentro de una etiqueta, así NO-->
    <p>Esto es un <a href="https://www.rae.es/diccionario-estudiante/sorprendente" target="_blank"> enlace sorprendente</p><a> compruébalo</p> </a> <!-- NO-->
    <!-- etiqueta dentro de una etiqueta, así SÍ-->

    
      <p>Esto es 
        <b style="color: rgb(15, 231, 47);">otro</b>
          <a href="index.php"> párrafo
      </p> 
          </a> <!-- SÍ-->

      <!-- Carlos: Ahí arriba si te das cuenta has abierto una p, 
       luego una a, y has cerrado el p antes de la 
       a -->
    <alvaro>esto es una etiqueta personalizada</alvaro>
        
    <div>esto es una etiqueta div <span>que tiene un span dentro</span></div>
    <div>
    <p>Y una imagen super ingeniosa</p>
      <img src="../imagenes/folder-subfolder.jpeg">        
    </div>
    <div>
      <br>Esto es una etiqueta span</br>
      Esto es un texto sin etiquetar
      <span title="esto es un title para el span muy chulo"> esto es un span</span>
      <div>esto es un div, con <div>un div dentro</div></div>
      <span>esto es un span <div>con un div dentro</div></span>
    </div>
    </section>
   <div>
    <footer>
            <address>
            (C) <a href="mailto:villalobosarevalo@yahoo.es">Álvaro Villalobos -> especialista SEO</a>
            Madrid, Spain.
            </address>
        </footer>
        </div>
  </body>  
</HTML>