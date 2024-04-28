<?php
    include('../controllers/connection.controller.php');
    include('../controllers/action.controller.php');

    
    // Verifica si se han enviado datos por el método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Accede a los datos del formulario a través de la superglobal $_POST
        $userName = $_POST['userName'];
        $fName = $_POST['fName'];
        $sName = $_POST['sName'];
        $flName = $_POST['flName'];
        $slName = $_POST['slName'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $errorMessage=match(true) {
            textController($userName) != '$-p0$n' => errorController(textController($userName)),
            textController($fName) != '$-p0$n' => errorController(textController($fName)),
            textController($sName) != '$-p0$n' => errorController(textController($sName)),
            textController($flName) != '$-p0$n' => errorController(textController($flName)),
            textController($slName) != '$-p0$n' => errorController(textController($slName)),
            textController($email) != '$-p0$n' => errorController(textController($email)),
            textController($pass) != '$-p0$n' => errorController(textController($pass)),
            default => setUser($userName, $fName, $sName, $flName, $slName, $email, password_hash($pass, PASSWORD_DEFAULT))
        };
        
        echo '<script>window.location.href = "/templates/login.php"</script>';
    }
    echo '<script>window.location.href = "/templates/sign_up.php"</script>';