<?php
/*
Plugin Name: Lección Sitemaps
Plugin URI: http://URI_De_La_Página_Que_Describe_el_Plugin_y_Actualizaciones
Description: Plug in para la clase de automatizar sitemaps
Version: El número de versión del plugin e.j.: 1.0
Author: Álvaro Villalobos Arévalo.
Author URI: http://URI_del_Autor_del_Plugin
License: Un nombre de licencia "pegadizo" e.j. GPL2
*/

//Borrar el sitemap nativo de Wordpress:
include 'includes/del-sitemap.php';

//Generar plantilla
include 'includes/template-generator.php';

?>