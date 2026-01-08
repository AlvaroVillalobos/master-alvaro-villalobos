<?php
$titulo = "Ejercicios HTML - Máster SEO";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="contenedor-ejercicios" style="padding: 20px; max-width: 900px;">
    
    <h1>Zona de Pruebas: HTML Completo</h1>
    <p>Ejercicios prácticos del módulo 03: Servidores y HTML.</p>
    <hr>

    <div class="indice-local" style="background: #f4f4f4; padding: 10px; margin-bottom: 20px; border-radius: 5px;">
        <h3>Índice de la práctica:</h3>
        <ul>
            <li><a href="#multimedia">Multimedia</a></li>
            <li><a href="#tabla">Tabla de datos</a></li>
            <li><a href="#listas">Listas</a></li>
        </ul>
    </div>

    <article>
        <h2>Navegación Interna</h2>
        <p>Enlaces a otras secciones del sitio:</p>
        <ul>
            <li><a href="/index" style="color: black;">Ir a la Home</a></li>
            <li><a href="/contacto" style="color: black;">Ir a Contacto</a></li>
            <li><a href="/sobre-mi" style="color: black;">Ir a Sobre mí</a></li>
        </ul>
    </article>

    <hr>

    <article>
        <h2>Enlaces Externos y Atributos</h2>
        <p>
            Visita la documentación oficial en 
            <a href="https://developer.mozilla.org/es/" target="_blank" rel="nofollow noopener noreferrer" title="Ir a MDN Web Docs">
                MDN Web Docs
            </a>.
        </p>
        <small>Nota: Este enlace tiene atributos <code>target</code>, <code>rel</code> y <code>title</code>.</small>
    </article>

    <hr>

    <article id="listas">
        <h2>Listas HTML</h2>
        <ol>
            <li>Primer elemento ordenado</li>
            <li>Segundo elemento ordenado
                <ul>
                    <li>Sub-elemento desordenado A</li>
                    <li>Sub-elemento desordenado B</li>
                </ul>
            </li>
            <li>Tercer elemento ordenado</li>
        </ol>
    </article>

    <hr>

    <article id="tabla">
        <h2>Tabla de Datos</h2>
        <table border="1" cellpadding="10" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr style="background-color: #333; color: white;">
                    <th>Etiqueta</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>&lt;tr&gt;</td>
                    <td>Table Row (Fila)</td>
                    <td>Estructura</td>
                </tr>
                <tr>
                    <td>&lt;td&gt;</td>
                    <td>Table Data (Celda)</td>
                    <td>Contenido</td>
                </tr>
                <tr>
                    <td>&lt;th&gt;</td>
                    <td>Table Header (Encabezado)</td>
                    <td>Semántica</td>
                </tr>
            </tbody>
        </table>
    </article>

    <hr>

    <article id="multimedia">
        <h2>Zona Multimedia</h2>

        <h3>Imagen Simple</h3>
        <img src="/imagenes/html5-cheatsheet.jpeg" alt="Chuleta HTML5" width="300">

        <h3>Etiqueta Picture (SEO Friendly)</h3>
        <picture>
            <source media="(min-width: 650px)" srcset="/imagenes/foto-prueba.jpg">
            <source media="(min-width: 465px)" srcset="/imagenes/foto-prueba.jpg">
            <img src="/imagenes/foto-prueba.jpg" alt="Descripción de la imagen para SEO" style="width:auto;">
        </picture>

        <h3>Vídeo Nativo</h3>
        <video width="320" height="240" controls>
            <source src="/video/video-prueba.mp4" type="video/mp4">
            Tu navegador no soporta la etiqueta de vídeo.
        </video>

        <h3>Audio Nativo</h3>
        <audio controls>
            <source src="/audio/audio-prueba.mp3" type="audio/mpeg">
            Tu navegador no soporta el elemento de audio.
        </audio>

        <h3>Iframe (Contenido Externo)</h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </article>

</section>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>