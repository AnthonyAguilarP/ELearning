<?php
include('send.controller.php');
include('recive.controller.php');
function connection(){
    // Datos de conexión a la base de datos
    $host = 'localhost';
    $dbname = 'elearning';
    $username = 'root';
    $password = '';

    try {
        // Conexión a la base de datos utilizando PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
        

    } catch (PDOException $e) {
        // Manejo de errores
        echo "Error: " . $e->getMessage();
    }
}



// Cerrar la conexión
//$pdo = null;
