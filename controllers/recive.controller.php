<?php
function getPass($userName){
    // Preparar la llamada al procedimiento almacenado
    $stmt = connection()->prepare("CALL ObtenerContrasenaYEstado(:nombre_usuario)");
    $stmt->bindParam(':nombre_usuario', $userName, PDO::PARAM_STR);

    // Ejecutar el procedimiento almacenado
    $stmt->execute();

    // Obtener los resultados del procedimiento almacenado
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Mostrar los resultados obtenidos
    if ($result) {
        if ($result["activo"] == 1) return $result["contrasena"];
        else if ($result["activo"] == 0)return "Este usuario fue baneado";
    } else {
        return "No se encontro ese nombre usuario";
    }
}
function getId($userName){
    $stmt = connection()->prepare("CALL ObtenerIdUsuarioPorNombre(:username, @user_id)");
    $stmt->bindParam(':username', $userName, PDO::PARAM_STR);

    // Ejecutar el procedimiento almacenado
    $stmt->execute();

    // Obtener el resultado del procedimiento almacenado (ID del usuario)
    $stmt = connection()->query("SELECT @user_id AS user_id");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    session_start();
    $_SESSION['Id'] = $result['user_id'];
}