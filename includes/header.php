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
     
     <link rel="stylesheet" href="/css/estilo.css">

     <link rel="icon" type="image/x-icon" href="/imagenes/favicon-av.png">
     <link rel="icon" type="image/png" href="/imagenes/favicon-av.png">
     
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
        <li><a href="/ejercicios/repaso-general.php">Repaso</a></li>
    </ul>
</li>
     </ul>
     <div class="cerrar elemento">X</div>
     </nav>
     </header>