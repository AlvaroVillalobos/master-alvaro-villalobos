<?php
$titulo = "Ejercicios PHP - Máster SEO";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="contenedor-ejercicios ejercicio-scroll-infinito">
    <h1>Ejercicio extra de Scroll infinito y cambio de URLs</h1>
    <p class="subtitulo-ejercicio">17 – 09 CAMBIAR LOS ENLACES CON SCROLL [OPTATIVA]</p>
    <hr>

    <div class="caja-explicacion">
        <p>
            En este ejercicio simulamos un scroll infinito que, al llegar al final de la página,
            carga más contenido y cambia la URL del navegador sin recargar la página.
        </p>
    </div>

    <div id="contenedor-contenido" class="contenedor-tarjetas">
        <article class="tarjeta-scroll">
            <span class="etiqueta-pagina">Página 1</span>
            <h2>Contenido inicial</h2>
            <p>
                Este es el contenido de la primera página. Haz scroll hacia abajo para que se carguen
                más bloques automáticamente y cambie la URL en el navegador.
            </p>
        </article>

        <article class="tarjeta-scroll">
            <span class="etiqueta-pagina">Página 1</span>
            <h2>Bloque de ejemplo 1</h2>
            <p>
                Puedes utilizar esta estructura para explicar cómo funciona el cambio de URL con
                <code>history.pushState()</code>.
            </p>
        </article>

        <article class="tarjeta-scroll">
            <span class="etiqueta-pagina">Página 1</span>
            <h2>Bloque de ejemplo 2</h2>
            <p>
                Cuando el usuario llega al final del documento, se añade nuevo contenido al DOM y se
                modifica la ruta visible en la barra del navegador.
            </p>
        </article>
    </div>

    <div id="estado-carga" class="estado-carga">Haz scroll para cargar más contenido...</div>
</section>

<style>
.ejercicio-scroll-infinito {
    max-width: 900px;
    margin: 0 auto;
    padding: 40px 20px 60px;
}

.subtitulo-ejercicio {
    font-size: 1.05rem;
    color: #666;
    margin-bottom: 20px;
}

.caja-explicacion {
    background: #f5f7fb;
    border-left: 4px solid #1e73be;
    padding: 18px 20px;
    border-radius: 10px;
    margin: 25px 0 30px;
}

.caja-explicacion p {
    margin: 0;
    line-height: 1.7;
}

.contenedor-tarjetas {
    display: grid;
    gap: 20px;
}

.tarjeta-scroll {
    background: #ffffff;
    border: 1px solid #e6e6e6;
    border-radius: 14px;
    padding: 24px;
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.05);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.tarjeta-scroll:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
}

.tarjeta-scroll h2 {
    margin-top: 10px;
    margin-bottom: 12px;
    font-size: 1.3rem;
}

.tarjeta-scroll p {
    margin: 0;
    line-height: 1.7;
    color: #333;
}

.tarjeta-scroll code {
    background: #f1f1f1;
    padding: 2px 6px;
    border-radius: 6px;
    font-size: 0.95em;
}

.etiqueta-pagina {
    display: inline-block;
    background: #1e73be;
    color: #fff;
    font-size: 0.85rem;
    font-weight: 700;
    padding: 6px 10px;
    border-radius: 999px;
}

.estado-carga {
    text-align: center;
    margin-top: 30px;
    padding: 16px;
    font-weight: 600;
    color: #1e73be;
    background: #eef6ff;
    border-radius: 10px;
}
</style>

<script>
// páginas simuladas
const paginas = [
    {
        url: "/pagina-2",
        titulo: "Página 2",
        contenido: [
            {
                titulo: "Contenido cargado dinámicamente",
                texto: "Este bloque se ha añadido cuando el usuario ha llegado al final de la página. Después se ha cambiado la URL a /pagina-2 sin recargar."
            },
            {
                titulo: "Uso de history.pushState()",
                texto: "La función pushState permite modificar la URL mostrada en el navegador sin abandonar la página actual."
            },
            {
                titulo: "Ventaja SEO y UX",
                texto: "Este tipo de comportamiento puede mejorar la experiencia de usuario, aunque en SEO conviene planificar bien la paginación, enlazado y renderizado."
            }
        ]
    },
    {
        url: "/pagina-3",
        titulo: "Página 3",
        contenido: [
            {
                titulo: "Nuevo bloque de contenido",
                texto: "Seguimos simulando una carga de contenido infinita con cambio de URL al detectar el final del scroll."
            },
            {
                titulo: "Evento onscroll",
                texto: "Cada vez que el usuario se desplaza, comprobamos si ha llegado abajo del todo para disparar la siguiente carga."
            },
            {
                titulo: "Control de estado",
                texto: "Se añade una variable para evitar múltiples cargas simultáneas y otra para saber en qué página simulada vamos."
            }
        ]
    },
    {
        url: "/pagina-4",
        titulo: "Página 4",
        contenido: [
            {
                titulo: "Última carga simulada",
                texto: "Esta es la última tanda de contenido del ejercicio. A partir de aquí, el script dejará de añadir más bloques."
            },
            {
                titulo: "Ejercicio completo",
                texto: "Ya tienes una demo sencilla y visual para explicar scroll infinito, carga dinámica y cambio de URLs."
            },
            {
                titulo: "Fin del ejemplo",
                texto: "Puedes adaptar las rutas, el contenido y la llamada a una API real cuando lo necesites."
            }
        ]
    }
];

let paginaActual = 0;
let cargando = false;

// función que cambia la URL del navegador
function cambiarUrl(url) {
    history.pushState(null, null, url);
}

// función que pinta nuevas tarjetas
function cargarMasContenido() {
    if (paginaActual >= paginas.length) {
        document.getElementById("estado-carga").textContent = "Ya no hay más contenido para cargar.";
        return;
    }

    cargando = true;
    const estado = document.getElementById("estado-carga");
    const contenedor = document.getElementById("contenedor-contenido");
    const pagina = paginas[paginaActual];

    estado.textContent = "Cargando más contenido...";

    setTimeout(() => {
        pagina.contenido.forEach((bloque) => {
            const article = document.createElement("article");
            article.className = "tarjeta-scroll";
            article.innerHTML = `
                <span class="etiqueta-pagina">${pagina.titulo}</span>
                <h2>${bloque.titulo}</h2>
                <p>${bloque.texto}</p>
            `;
            contenedor.appendChild(article);
        });

        cambiarUrl(pagina.url);
        paginaActual++;
        cargando = false;

        if (paginaActual < paginas.length) {
            estado.textContent = "Haz scroll para cargar más contenido...";
        } else {
            estado.textContent = "Ya no hay más contenido para cargar.";
        }
    }, 800);
}

// función que detecta cuando el usuario llega al final de la página
function detectarFinPagina() {
    if (cargando || paginaActual >= paginas.length) {
        return;
    }

    if ((window.innerHeight + window.pageYOffset) >= (document.body.offsetHeight - 10)) {
        cargarMasContenido();
    }
}

// evento que se dispara cuando el usuario hace scroll
window.onscroll = function() {
    detectarFinPagina();
};
</script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>
</div>