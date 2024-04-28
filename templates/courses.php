<?php
    include('../controllers/action.controller.php');
    // Define el título de la página
    $pageTitle = "Elearning";
    $pageName = "courses";
    
    // Define el contenido de la página
    ob_start(); // Inicia el almacenamiento en el buffer de salida
?>
    <main class="overflow-1 height-4 row">
        <div class="row col height-5 column">
            <div class="col height row center">
                <div class="height-5 col-7 center border-3">
                    <div class="col-8 height-6 bg-2 column center hover-effect hover-effect-2" data-author="Uriel">
                        <img <?php getCourses('programacion.jpg'); ?> alt="" class="height-3 col-2">
                        <h3>Programacion</h3>
                    </div>
                    
                </div>
                <div class="height-5 col-7 center border-3">
                    <div class="col-8 height-6 bg-2 column center hover-effect hover-effect-2" data-author="Late">
                        <img <?php getCourses('calculo.jpg'); ?> alt="" class="height-3 col-2">
                        <h3>Calculo</h3>
                    </div>
                    
                </div>
                <div class="height-5 col-7 center border-3">
                    <div class="col-8 height-6 bg-2 column center hover-effect hover-effect-2" data-author="Puvlo">
                        <img <?php getCourses('dg.jpg'); ?> alt="" class="height-3 col-2">
                        <h3>Diseño Grafico</h3>
                    </div>
                    
                </div>
            </div>
            
            
        </div>
    </main>
<?php
    $pageContent = ob_get_clean(); // Almacena el contenido del buffer de salida en la variable $pageContent y limpia el buffer
?>

<?php
    // Incluye el archivo de plantilla
    include 'layout.php';
?>