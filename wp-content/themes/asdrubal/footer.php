        </footer>
            <address class="intro">
               (C) <a href="mailto:villalobosarevalo@yahoo.es">Álvaro Villalobos -> especialista SEO</a><br />
               Madrid, Spain.
            </address>
                <p>
                   <?php echo "página desarrollada con lenguaje PHP"; ?>
                </p>
                <?php wp_footer();?>
        </footer>
  </body>  

  <script>
document.addEventListener('DOMContentLoaded', function() {
    var trigger = document.getElementById('new-menu-trigger');
    var menu = document.getElementById('new-dropdown');

    if (trigger && menu) {
        trigger.addEventListener('click', function(e) {
            e.preventDefault(); // Evita cualquier acción por defecto
            e.stopPropagation(); // Evita que el clic cierre el menú inmediatamente
            menu.classList.toggle('show-dropdown');
        });

        // Si el usuario hace clic en cualquier otro lugar de la web, se cierra el menú
        document.addEventListener('click', function(e) {
            if (!trigger.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.remove('show-dropdown');
            }
        });
    }
});
</script>
</HTML> 