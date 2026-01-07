<?php

function ctas(){
  echo 'Hola profesores';
}

function mensaje_bienvenida() {
    return "Esta función usa RETURN, no ECHO interno.";
}

function generar_bloque_seo($titulo, $contenido) {
    echo '<div style="border: 1px dashed #337ab7; padding: 15px; background-color: #f0f8ff; margin-bottom: 20px;">';
    echo '  <h3 style="color: #337ab7;">' . $titulo . '</h3>';
    echo '  <p>' . $contenido . '</p>';
    echo '</div>';
}
?>