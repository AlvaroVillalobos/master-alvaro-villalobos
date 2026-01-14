<?php
$titulo = "Repaso General - Máster SEO";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<link rel="stylesheet" href="/css/repaso.css">

<section class="contenedor-ejercicios" style="padding: 20px; max-width: 900px; margin-top: 60px;">
    
    <h1 class="titulo-repaso">Ejercicio de Repaso 08-04</h1>
    <p>Esta página integra Header/Footer global pero usa estilos y scripts propios.</p>
    
    <hr>

    <div class="caja-interactiva" id="zona-prueba">
        <h3>Zona de Interacción JS</h3>
        <p>El fondo de esta caja cambiará con CSS propio y el botón con JS propio.</p>
        <button id="btn-repaso" class="btn-custom">¡Hazme Click!</button>
        <p id="mensaje-feedback" style="margin-top: 10px; font-style: italic;"></p>
    </div>

</section>

<script src="/js/repaso.js"></script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>