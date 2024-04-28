<?php
include('../controllers/connection.controller.php');
include('../controllers/action.controller.php');


// Verifica si se han enviado datos por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Accede a los datos del formulario a través de la superglobal $_POST
    $userName = $_POST['userName'];
    $pass = $_POST['pass'];

    $errorMessage=match(true) {
        textController($userName) != '$-p0$n' => errorController(textController($userName)),
        textController($pass) != '$-p0$n' => errorController(textController($pass)),
        !password_verify($pass, getPass($userName)) => errorController("Clave de acceso incorrecto"),
        default => getId($userName)
    };
    
    echo '<script>window.location.href = "/templates/index.php"</script>';
}
echo '<script>window.location.href = "/templates/login.php"</script>';