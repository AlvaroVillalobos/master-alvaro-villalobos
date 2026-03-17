<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset='UTF-8'>
     
     <link rel="stylesheet" href="//<?php echo $_SERVER['HTTP_HOST']; ?>/css/estilo.css">

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="/css/fonts.css" rel="stylesheet">

     <?php

     include_once $_SERVER['DOCUMENT_ROOT']. '/includes/functions.php';

     ?>

     <meta name="viewport" content="width=device-width, initial-scale=1.0" />

     <?php
// llamadas a include o código PHP

// archivo de funciones en ruta absoluta del servidor:
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
     
     <title>
         <?php
         
      if (empty($titulo)){  
         echo "Proyecto Máster";
      }   
      else{
         echo $titulo;
      } 

         ?>
         
      </title>
     
     <link rel="preload" as="image" href="/imagenes/html5-cheatsheet.jpeg">

     <link rel="icon" type="image/x-icon" href="/imagenes/favicon-av.png">
     <link rel="icon" type="image/png" href="/imagenes/favicon-av.png">

   <!-- SEO básico -->
<title>Máster SEO Técnico | HTML, CSS, PHP y JS</title>
<meta name="description" content="Ejercicios y prácticas del Máster SEO Técnico: HTML, CSS, PHP y JavaScript. Desarrollo web orientado a SEO técnico y rendimiento." />
<link rel="canonical" href="http://localhost:8888/index" />

<!-- Open Graph (Facebook, LinkedIn, WhatsApp, etc.) -->
<meta property="og:locale" content="es_ES" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Máster SEO Técnico" />
<meta property="og:title" content="Máster SEO Técnico | HTML, CSS, PHP y JS" />
<meta property="og:description" content="Ejercicios y prácticas del Máster SEO Técnico: HTML, CSS, PHP y JavaScript. Desarrollo web orientado a SEO técnico y rendimiento." />
<meta property="og:url" content="http://localhost:8888/index" />
<meta property="og:image" content="/imagenes/master-seo-gato.png" />
<meta property="og:image:secure_url" content="/imagenes/master-seo-gato.png" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="1536" />
<meta property="og:image:height" content="1024" />
<meta property="og:image:alt" content="Máster SEO Técnico - HTML, CSS, PHP y JavaScript" />

<!-- Twitter / X Cards -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Máster SEO Técnico | HTML, CSS, PHP y JS" />
<meta name="twitter:description" content="Ejercicios y prácticas del Máster SEO Técnico: HTML, CSS, PHP y JavaScript. Desarrollo web orientado a SEO técnico y rendimiento." />
<meta name="twitter:image" content="/imagenes/master-seo-gato.png" />
<meta name="twitter:image:alt" content="Máster SEO Técnico - HTML, CSS, PHP y JavaScript" />

<!-- Opcional: si tienes usuario de X -->
<!-- <meta name="twitter:site" content="@tu_usuario" /> -->
<!-- <meta name="twitter:creator" content="@tu_usuario" /> -->
  
  </head>
 <body>
     <header>
     <nav>
     <ul>
        <li><a href="/index">Inicio</a></li>
        <li><a href="/sobre-mi">Álvaro</a></li>
        <li><a href="/contacto">Contacto</a></li>
        <li><a href="/carpeta/archivo-carpeta">VAR folder</a></li>
        <li><a href="/pagina-seo">SEO page</a></li>
        <li><a href="/selectores">Selectores</a></li>
        <li><a href="/carpeta-2/subfolder-2">subfolder</a></li>
        <li><a href="/pagina-minificada">minify</a></li>
        <li class="dropdown">
    <a href="#" class="dropbtn" onclick="return false;">+ Ejercicios ▾</a>
    <ul class="dropdown-content">
        <li><a href="/ejercicios/ejercicios-html">HTML</a></li>
        <li><a href="/ejercicios/ejercicios-css">CSS</a></li>
        <li><a href="/ejercicios/ejercicios-php">PHP</a></li>
        <li><a href="/ejercicios/ejercicios-javascript">JavaScript</a></li>
        <li><a href="/ejercicios/unica">Meta Etiquetas</a></li>
        <li><a href="/ejercicios/ejercicios-url">URLs</a></li>
        <li><a href="/ejercicios/ejercicios-scroll-infinito">Scroll</a></li>
        <li><a href="/ejercicios/repaso-general">Repaso</a></li>
    </ul>
</li>
     </ul>
     <div class="cerrar elemento">X</div>
     </nav>
     </header>