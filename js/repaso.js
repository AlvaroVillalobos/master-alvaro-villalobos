// Esperamos a que la página cargue
document.addEventListener("DOMContentLoaded", function() {
    
    // 1. Localizamos los elementos por su ID
    let boton = document.getElementById("mi-boton");
    let caja = document.getElementById("mi-caja");

    // 2. Añadimos la "oreja" para escuchar el click
    if (boton) {
        boton.addEventListener("click", function() {
            
            // 3. toggle: Si tiene la clase la quita, si no la tiene la pone
            caja.classList.toggle("modo-activo");
            
            // Mensaje en consola para verificar
            console.log("Has hecho click en el botón");
        });
    }
});