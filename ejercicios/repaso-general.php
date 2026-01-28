<?php
$titulo = "Ejercicio de Repaso - Máster SEO";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<link rel="stylesheet" href="/css/repaso.css">

<section class="contenedor-ejercicios" style="padding: 20px; max-width: 900px; margin-top: 60px;">
    
    <h1>Repaso: HTML, CSS y JS</h1>
    <p>Ejercicio simple para probar que todo carga correctamente.</p>
    <hr>

    <div id="mi-caja" class="caja-basica">
        <h3>Soy una caja de prueba</h3>
        <p>Si pulsas el botón, cambiaré de color.</p>
        
        <button id="mi-boton">Cambiar Estilo</button>
    </div>

</section>

<script src="/js/repaso.js"></script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>