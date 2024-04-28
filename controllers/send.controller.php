<?php
function setUser($userName ,$fName, $sName, $fLastName, $sLastName, $email, $pass){
    // Llamada al procedimiento almacenado
    $sql = "CALL InsertarUsuario(:nombre_usuario, :primer_nombre, :segundo_nombre, :primer_apellido, :segundo_apellido, :email, :contrasena, :rol)";
    $stmt = connection()->prepare($sql);

    // Parámetros del procedimiento almacenado
    $params = array(
        'nombre_usuario' => $userName,
        ':primer_nombre' => $fName,
        ':segundo_nombre' => $sName,
        ':primer_apellido' => $fLastName,
        ':segundo_apellido' => $sLastName,
        ':email' => $email,
        ':contrasena' => $pass,
        ':rol' => 'usuario'
    );

    // Ejecutar el procedimiento almacenado
    $stmt->execute($params);
}