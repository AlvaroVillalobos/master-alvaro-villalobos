<?php
 include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div>
<table border ="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse; width: 100%; text-align: left;">
<thead style="background-color: #f2f2f2;">
<tr>
<th>Selector</th>
<th>Ejemplo</th>
<th>Descripción</th>
</tr>
</thead>
<tbody>
<tr>
<td>*</td>
<td>*</td>
<td>Selecciona todos los elementos</td>
</tr>
<tr>
<td>element</td>
<td>p</td>
<td>Selecciona todos los elementos &lt;p&gt;</td>
</tr>
<tr>
<td>.class</td>
<td>.intro</td>
<td>Selecciona todos los elementos de la clase "intro"</td>
</tr>
<tr>
<td>#id</td>
<td>#ejemplo</td>
<td>Selecciona el elemento con la id="ejemplo"</td>
</tr>
<tr>
<td>Inline</td>
<td></td>
<td></td>
</tr>
<tr>
<td>element.class</td>
<td>p.intro</td>
<td>Selecciona todos los elementos &lt;p&gt; con la clase "intro"</td>
</tr>
<tr>
<td>.class1.class2</td>
<td>.ejemplo1.ejemplo2</td>
<td>Selecciona todos los elementos que tengan ambas clases "ejemplo1" y "ejemplo2" en su atributo "class"</td>
</tr>
<tr>
<td>.class1 .class2</td>
<td>.ejemplo1 .ejemplo2</td>
<td>Selecciona todos los elementos con la clase "ejemplo2" que sean descendientes de un elemento con la clase "ejemplo1"</td>
</tr>
<tr>
<td>element,element</td>
<td>div, p</td>
<td>Selecciona todos los elementos &lt;div&gt; y &lt;p&gt;</td>
</tr>
<tr>
<td>element element</td>
<td>div p</td>
<td>Selecciona todos los elementos &lt;p&gt; dentro de un elemento &lt;div&gt;</td>
</tr>
<tr>
<td>element&gt;element</td>
<td>div &gt; p</td>
<td>Selecciona todos los elementos &lt;p&gt; que sean hijos directos de un elemento &lt;div&gt;</td>
</tr>
<tr>
<td colspan="3" style="font-weight: bold; text-align: center; background-color: #e6e6e6;">Selectores Avanzados (Parte 1)</td>
</tr>
<tr>
<td>[attribute]</td>
<td>[title]</td>
<td>Selecciona todos los elementos con el atributo **title**</td>
</tr>
<tr>
<td>[attribute=value]</td>
<td>[target="_blank"]</td>
<td>Selecciona todos los elementos con el atributo **target** y valor **"_blank"**</td>
</tr>
<tr>
<td>[attribute*=value]</td>
<td>[title*="seo"]</td>
<td>Selecciona todos los elementos que en su valor **contengan** la palabra **seo** en el atributo **title**</td>
</tr>
<tr>
<td>[attribute~=value]</td>
<td>[lang~=es]</td>
<td>Selecciona todos los elementos que en su atributo **lang** contengan **"es"** como una palabra separada</td>
</tr>
<tr>
<td>[attribute^=value]</td>
<td>a[href^="http"]</td>
<td>Selecciona todo elemento &lt;a&gt; que su atributo **href** **comience por "http"**</td>
</tr>
<tr>
<td>[attribute$=value]</td>
<td>a[href$=".pdf"]</td>
<td>Selecciona todo elemento &lt;a&gt; cuyo **href termine en ".pdf"**</td>
</tr>
<tr>
<td>[attribute|=value]</td>
<td>[lang|=es]</td>
<td>Selecciona todos los elementos que en su atributo **lang** contengan **"es"** o **empiecen por "es-"** (Útil para idiomas)</td>
</tr>
<tr>
<td>:active</td>
<td>a:active</td>
<td>Selecciona el enlace **activo** (el momento en que se pulsa)</td>
</tr>
<tr>
<td>::after</td>
<td>.ejemplo::after</td>
<td>Inserta algo **inmediatamente después** de la clase .ejemplo (contenido generado)</td>
</tr>
<tr>
<td>::before</td>
<td>p::before</td>
<td>Inserta algo **antes** del elemento p (contenido generado)</td>
</tr>
<tr>
<td>:first-child</td>
<td>p:first-child</td>
<td>Selecciona el primer elemento **&lt;p&gt;** de su elemento **padre**</td>
</tr>
<tr>
<td>::first-letter</td>
<td>p::first-letter</td>
<td>Selecciona la **primera letra** de cada elemento &lt;p&gt;</td>
</tr>
<tr>
<td>::first-line</td>
<td>p::first-line</td>
<td>Selecciona la **primera línea** de cada elemento &lt;p&gt;</td>
</tr>
<tr>
<td>:first-of-type</td>
<td>p:first-of-type</td>
<td>Selecciona cada elemento **&lt;p&gt;** que sea el **primer &lt;p&gt;** de su elemento **padre**</td>
</tr>
<tr>
<td>:hover</td>
<td>a:hover</td>
<td>Selecciona cuando pasan el ratón **encima** de un elemento &lt;a&gt;</td>
</tr>
<tr>
<td>:last-child</td>
<td>p:last-child</td>
<td>Selecciona todo elemento **&lt;p&gt;** que sea el **último** de su elemento **padre**</td>
</tr>
<tr>
<td colspan="3" style="font-weight: bold; text-align: center; background-color: #e6e6e6;">Selectores Avanzados (Parte 2)</td>
</tr>
<tr>
<td>:link</td>
<td>a:link</td>
<td>Selecciona todos los enlaces **no visitados**</td>
</tr>
<tr>
<td>::marker</td>
<td>::marker</td>
<td>Selecciona los marcadores de los elementos de la lista (puntos o números)</td>
</tr>
<tr>
<td>:not(selector)</td>
<td>:not(p)</td>
<td>Selecciona **todos** los elementos que **no** son un elemento **&lt;p&gt;**</td>
</tr>
<tr>
<td>:nth-child(n)</td>
<td>p:nth-child(2)</td>
<td>Selecciona cada elemento &lt;p&gt; que es el segundo **hijo de su padre**, independientemente de si es o no el segundo elemento de su tipo.</td>
</tr>
<tr>
<td>:nth-last-child(n)</td>
<td>p:nth-last-child(2)</td>
<td>Selecciona cada elemento &lt;p&gt; que es el **segundo hijo de su padre, contando desde el último**</td>
</tr>
<tr>
<td>:nth-last-of-type(n)</td>
<td>p:nth-last-of-type(2)</td>
<td>Selecciona cada elemento &lt;p&gt; que es el **segundo elemento &lt;p&gt; de su padre, contando desde el último**</td>
</tr>
<tr>
<td>:nth-of-type(n)</td>
<td>p:nth-of-type(2)</td>
<td>Selecciona cada elemento &lt;p&gt; que es el **segundo elemento &lt;p&gt; de su padre**</td>
</tr>
<tr>
<td>:only-of-type</td>
<td>p:only-of-type</td>
<td>Selecciona cada elemento &lt;p&gt; que es el **único elemento &lt;p&gt; de su padre**</td>
</tr>
<tr>
<td>:only-child</td>
<td>p:only-child</td>
<td>Selecciona cada elemento &lt;p&gt; que es el **único hijo de su padre** (solo tiene un hijo, y es ese &lt;p&gt;)</td>
</tr>
<tr>
<td>:root</td>
<td>:root</td>
<td>Selecciona el elemento **raíz** del documento (que es &lt;html&gt;)</td>
</tr>
<tr>
<td>::selection</td>
<td>::selection</td>
<td>Selecciona la parte de un elemento que es **seleccionada por un usuario** (permite cambiar color de fondo y texto al seleccionar)</td>
</tr>
<tr>
<td>:target</td>
<td>\#news:target</td>
<td>Selecciona el elemento activo actual de **\#news** (se usa para elementos que coinciden con el fragmento de la URL, p. ej., `pagina.html#news`)</td>
</tr>
<tr>
<td>:visited</td>
<td>a:visited</td>
<td>Selecciona todos los enlaces **visitados**</td>
</tr>
<tr>
<td>:is(selector)</td>
<td>:is(header, main, footer) a.ejemplo</td>
<td>Agrupa elementos. En el ejemplo, afectaría a todos los **a.ejemplo** dentro de las etiquetas **header**, **main** o **footer**</td>
</tr>
</tbody>
</table>
</div>
<div class="enlaces-ejercicio">
    <p><a href="https://wordpress.com/es/">WordPress</a></p>
    <p><a href="https://www.w3schools.com/">W3Schools</a></p>
    <p><a href="https://developer.mozilla.org/">MDN Docs</a></p>

    <!-- Enlace a tu web (debe verse normal) -->
    <p><a href="/index.php">Mi web interna</a></p>
</div>

<footer>
            <address>
            (C) <a href="mailto:villalobosarevalo@yahoo.es">Álvaro Villalobos -> especialista SEO</a>
            Madrid, Spain.
            </address>
        </footer>
        </div>
  </body>  
</HTML>
