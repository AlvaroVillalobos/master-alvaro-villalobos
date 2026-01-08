<?php
$titulo = "Javascript Ejercicios Javascript - Máster SEO técnico"; // Variable para el title dinámico si tu header lo soporta
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="contenedor-ejercicios" style="padding: 20px; max-width: 900px;">
    <h1>Javascript - Zona de Pruebas: Ejercicios Javascript</h1>
    <p>Espacio dedicado al desarrollo de mecanismos SEO con Javascript.</p>
    
    <hr>
    
    <div id="area-trabajo">

<div style="padding: 20px;">
    <h1>Ejercicio 07-05: Variables JS</h1>
    <p>En este ejercicio defino variables con var, let y const y las muestro al hacer clic.</p>
    
    <hr>

    <h3>1. Prueba con VAR (Antiguo)</h3>
    <p>Al pulsar, mostraré una variable definida con 'var'.</p>
    
    <button onclick="enseñarVar()" style="padding: 10px; background-color: #ccc;">
        Ver variable VAR
    </button>
    
    <div id="caja1" style="border: 2px solid black; padding: 10px; margin-top: 10px; width: 300px;">
        El resultado saldrá aquí...
    </div>

    <br><hr><br>

    <h3>2. Prueba con LET (Moderno)</h3>
    <p>Al pulsar, mostraré una variable definida con 'let'.</p>

    <button onclick="enseñarLet()" style="padding: 10px; background-color: #ccc;">
        Ver variable LET
    </button>

    <div id="caja2" style="border: 2px solid black; padding: 10px; margin-top: 10px; width: 300px;">
        El resultado saldrá aquí...
    </div>

    <br><hr><br>

    <h3>3. Prueba con CONST</h3>
    <p>He definido una constante llamada <b>MI_NOMBRE</b> en el código.</p>
    <p>Como no cambia, la he mandado a la consola del navegador (F12).</p>

</div>

<script>
    // --- DEFINICIÓN DE VARIABLES ---

    // 1. var: forma antigua
    var cms = "WordPress";

    // 2. let: forma moderna (se puede cambiar el valor)
    let plugin = "Yoast SEO";

    // 3. const: no cambia nunca
    const MI_NOMBRE = "Álvaro Villalobos";
    console.log("El valor de la constante es: " + MI_NOMBRE);


    // --- FUNCIONES ---

    function enseñarVar() {
        // Escribo en la caja 1
        document.getElementById("caja1").innerHTML = "El CMS es: " + cms;
        // Le cambio el color de fondo a naranja para que se vea el cambio
        document.getElementById("caja1").style.backgroundColor = "orange";
    }

    function enseñarLet() {
        // Escribo en la caja 2
        document.getElementById("caja2").innerHTML = "El plugin es: " + plugin;
        // Le cambio el color a verde
        document.getElementById("caja2").style.backgroundColor = "lightgreen";
    }

</script>
    </div>
</section>

<section>
<div>
// FUNCIÓN con onclick (forma directa)
<button onclick="saludar()">Saludar (onclick)</button>

<script>
function saludar() {
    alert("Hola desde onclick");
}
</script>
</div>

<div>
// FUNCIÓN con addEventListener (forma correcta moderna)
<button id="botonEvento">Saludar (addEventListener)</button>
<br><br>

<script>
function saludarEvento() {
    alert("Hola desde addEventListener");
}

let boton = document.getElementById("botonEvento");
boton.addEventListener("click", saludarEvento);
</script>
</section>

<br><hr><br>

<section>
    <h2>Ejercicio 07-07: Mis Condicionales</h2>
    <p>Resultados generados lógicamente al cargar la página:</p>

    <div style="background: #fdfdfe; border: 1px solid #ddd; padding: 15px; margin-bottom: 10px;">
        <strong>1. Análisis de Enlaces (If-Else):</strong>
        <p id="analisis-enlaces" style="color: blue; font-weight: bold;"></p>
    </div>

    <div style="background: #fdfdfe; border: 1px solid #ddd; padding: 15px;">
        <strong>2. Estrategia de Indexación (Switch):</strong>
        <p id="estrategia-seo" style="color: green; font-weight: bold;"></p>
    </div>
</section>

<script>
    // --- 1. CONDICIONAL IF-ELSE (Semáforo de enlaces) ---
    // Imaginamos que hemos contado los enlaces de un post
    let cantidadEnlaces = 16; 
    let veredicto;

    if (cantidadEnlaces < 5) {
        veredicto = "Pobre (Thin Content)";
    } 
    else if (cantidadEnlaces < 15) {
        veredicto = "Correcto (Estructura equilibrada)";
    } 
    else {
        veredicto = "Excesivo (Posible Spam)";
    }
    
    // Imprimimos el resultado en el HTML
    document.getElementById("analisis-enlaces").innerHTML = 
        "Con " + cantidadEnlaces + " enlaces, el estado es: " + veredicto;


    // --- 2. CONDICIONAL SWITCH (Tipo de Página) ---
    // Imaginamos que detectamos el tipo de página actual
    let tipoPagina = "Home"; 
    let accionBot;

    switch (tipoPagina) {
        case "Home":
            accionBot = "Index, Follow (Prioridad Alta)";
            break;
        case "Categoria":
            accionBot = "Index, Follow (Optimizar)";
            break;
        case "AvisoLegal":
            accionBot = "NoIndex, Follow";
            break;
        case "Gracias":
            accionBot = "NoIndex, NoFollow";
            break;
        default:
            accionBot = "Revisión Manual requerida";
    }

    // Imprimimos el resultado en el HTML
    document.getElementById("estrategia-seo").innerHTML = 
        "Para el tipo '" + tipoPagina + "', la orden es: " + accionBot;
</script>

<br><hr><br>

<section>
    <h2>Ejercicio 07-08: Redirecciones JS</h2>
    <p>⚠️ Cuidado: Al pulsar el botón saldrás de esta página.</p>

    <button onclick="ejecutarRedireccion()" style="padding: 15px; background: #d9534f; color: white; font-weight: bold; border: none; cursor: pointer;">
        🔄 Ejecutar Redirección JS
    </button>
</section>

<script>
    function ejecutarRedireccion() {
        // Opción A (La que usaremos): .replace() 
        // Es "mejor" porque sustituye la entrada en el historial (el usuario no puede volver atrás con el botón "Back").
        // window.location.replace("https://carlos.sanchezdonate.com/redireccion-301-desde-sitebuilders/");

        // Opción B: .href 
        // window.location.href = "..."; 
        // Esta opción guarda el historial. Si el usuario da a "Atrás", vuelve a la página que le redirige, creando un bucle molesto.
        window.location.href="https://carlos.sanchezdonate.com/redireccion-301-desde-sitebuilders/";
    }
</script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>