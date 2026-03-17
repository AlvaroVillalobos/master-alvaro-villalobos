<?php
$titulo = "Ejercicios PHP - Máster SEO";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<main id="main-content" class="site-main">
    <section class="ejercicio-seccion ejercicios-url">
        </section>


<section class="contenedor-ejercicios">
    <h1>Zona de Pruebas: URLs</h1>
    <p>Enlazado interno - Espacio reservado para los ejercicios de URLs y tipos de enlazado.</p>
    <hr>
</section>

<section class="ejercicio-practico">
    <h2>17 – 03 Ejercicio: URLs Absolutas y Relativas</h2>

    <ul>
        <li>
            <strong>Absoluta:</strong>
            <a href="https://www.linkedin.com/in/alvarovillalobos-seo/" target="_blank" rel="noopener noreferrer">
                Ir a Linkedin (Externo)
            </a>
        </li>

        <li>
            <strong>Relativa (Misma carpeta):</strong>
            <a href="ejercicios-php.php" target="_blank">Ir a Ejercicio PHP</a>
        </li>

        <li>
            <strong>Relativa (Hacia subcarpeta):</strong>
            <a href="test/archivo.php" target="_blank">Carpeta inexistente -> 404 (Ejemplo de estructura)</a>
        </li>

        <li>
            <strong>Relativa (Desde ROOT):</strong>
            <a href="/index.php" target="_blank">Ir al Home del Proyecto</a>
        </li>

        <li>
            <strong>Relativa (Carpeta Nivel superior):</strong>
            <a href="../carpeta/archivo-carpeta" target="_blank">Ver carpeta (Nivel arriba)</a>
        </li>

        <li>
            <strong>Relativa (Archivo Nivel superior):</strong>
            <a href="../css/repaso.css" target="_blank">Ver carpeta (Nivel arriba)</a>
        </li>
    </ul>
</section>

<section class="ejercicio-practico ejercicio-practico--destacado">
    <h2>Zona de Pruebas: URLs</h2>

    <p><strong>Explicación del Infinite Crawl:</strong></p>

    <div class="alerta-crawl">
        <p>Este enlace es una ruta relativa que añade una carpeta inexistente sobre la URL actual:</p>
        <a href="ejercicios-url" class="alerta-crawl__link">
            Hacer clic aquí generaría: /ejercicios/ejercicios-url
        </a>
    </div>
</section>

</main>

<p>
    Vamos a ofuscar un enlace  
    <span class="enl" 
          onclick="location.href='https://carlos.sanchezdonate.com/articulo/como-ofuscar-enlaces/'" 
          title="Aviso Legal" 
          style="cursor:pointer; color:#0056b3; text-decoration:underline;">
        siguiendo las indicaciones de
    </span> 
    Carlos Sánchez Donate y ofuscadas con onclick.
</p>

<hr>

<p>
    Accede al 
    <span id="ofc" class="enl" style="cursor:pointer; color:#0056b3; text-decoration:underline;">
        panel de control
    </span> 
    ofuscado con listener y UTM.
</p>

<script>
document.getElementById('ofc').addEventListener('click', function() {
    // Añadimos UTM para trackeo en Analytics sin que Googlebot lo rastree como enlace
    window.location.href = 'https://carlos.sanchezdonate.com/?utm_source=footer&utm_medium=ofuscado';
});
</script>

<div>
  <br>  
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>
</div>