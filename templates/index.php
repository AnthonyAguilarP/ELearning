<?php
    include('../controllers/action.controller.php');
    // Define el título de la página
    $pageTitle = "Elearning";
    $pageName = "index";
    
    // Define el contenido de la página
    ob_start(); // Inicia el almacenamiento en el buffer de salida
?>
    <main class="row">
        <div class="col-5 height center">
            
            <div class="container-2 border-2 center column">
                <!-- item -->
                <div class="col height-2 center column hover-effect">
                    <div class="container-text center border-radius-3 row">
                        Boleta
                    </div>
                    <img <?php getIcon('boleta.svg'); ?> alt="boleta" class="col-4 height-3">
                </div>
                <!-- item -->
                <div class="col height-2 center column hover-effect">
                    <div class="container-text center border-radius-3 row">
                        Mis cursos
                    </div>
                    <img <?php getIcon('cursos-1.svg'); ?> alt="boleta" class="col-4 height-3">
                </div>
                <!-- item -->
                <div class="col height-2 hover-effect">
                    <a href="courses.php" class="text-decoration-1 c-1 height col center column">
                        <div class="container-text center border-radius-3 row">
                            Encontrar cursos
                        </div>
                        <img <?php getIcon('cursos-2.svg'); ?> alt="boleta" class="col-4 height-3">
                    </a>
                </div>
            </div>
            
        </div>
        <div class="col-6 height center"><div class="container-2 border-2">

        </div></div>
        <div class="col-5 height center">
            
            <div class="container-2 border-2 center column">
                <!-- item -->
                <div class="col height-2 center column hover-effect">
                    <img <?php getIcon('estudent-1.svg'); ?> alt="boleta" class="col-4 height-3">
                    <div class="container-text center border-radius-3 row">
                        Finalizado
                    </div>
                    
                </div>
                <!-- item -->
                <div class="col height-2 center column hover-effect">
                    <img <?php getIcon('graphics-1.svg'); ?> alt="boleta" class="col-4 height-3">
                    <div class="container-text center border-radius-3 row">
                        Analisis
                    </div>
                    
                </div>
                <!-- item -->
                
                <div class="col height-2 hover-effect">
                    <a href="wiki.php" class="text-decoration-1 c-1 height col center column">
                        <img <?php getIcon('book-1.svg'); ?> alt="boleta" class="col-4 height-3">
                        <div class="container-text center border-radius-3 row">
                            Wiki
                        </div>
                    </a>
                </div>
                
            </div>
            
        </div>
    </main>
    <footer class="row">
        <div class="col-3">
            <div class="height-1 col center">
                <img <?php getIcon('create-1.svg'); ?> alt="menu" class="icon-1 hover-effect">
            </div>
            <div class="height-1 col center">
                <img <?php getIcon('menu-3.svg'); ?> alt="menu" class="icon-2 hover-effect" id="menu">
            </div>
        </div>
        <div class="col-4 center border-l-r-1">
            <div class="container-1 border-1 border-radius-1 margin-l-r-1 hover-effect"></div>
            <div class="container-1 border-1 border-radius-1 margin-l-r-1 hover-effect"></div>
            <div class="container-1 border-1 border-radius-1 margin-l-r-1 hover-effect"></div>
            <div class="container-1 border-1 border-radius-1 margin-l-r-1 hover-effect"></div>
            <div class="container-1 border-1 border-radius-1 margin-l-r-1 hover-effect"></div>
        </div>
        <div class="col-3"></div>
    </footer>

    <script>
        // Obtén el elemento del footer
        var footer = document.querySelector("footer");
        var main = document.querySelector("main");
        
        // Obtén el elemento del menú
        var menu = document.getElementById("menu");
    
        // Agrega un event listener para el clic en el menú
        menu.addEventListener("click", function() {
            // Oculta el footer al hacer clic en el menú
            footer.style.display = "none";
            main.style.height = "85vh";
        });
    </script>
<?php
    $pageContent = ob_get_clean(); // Almacena el contenido del buffer de salida en la variable $pageContent y limpia el buffer
?>

<?php
    // Incluye el archivo de plantilla
    include 'layout.php';
?>