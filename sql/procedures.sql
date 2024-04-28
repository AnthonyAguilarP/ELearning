-- Procedimiento para insertar usuarios
DELIMITER //

CREATE PROCEDURE InsertarUsuario(
    IN p_nombre_usuario VARCHAR(50),
    IN p_primer_nombre VARCHAR(50),
    IN p_segundo_nombre VARCHAR(50),
    IN p_primer_apellido VARCHAR(50),
    IN p_segundo_apellido VARCHAR(50),
    IN p_email VARCHAR(100),
    IN p_contrasena VARCHAR(255),
    IN p_rol VARCHAR(20)
)
BEGIN
    -- Insertar el nuevo usuario en la tabla
    INSERT INTO usuario (
        nombre_usuario,
        primer_nombre,
        segundo_nombre,
        primer_apellido,
        segundo_apellido,
        email,
        contrasena,
        rol
    ) VALUES (
        p_nombre_usuario,
        p_primer_nombre,
        p_segundo_nombre,
        p_primer_apellido,
        p_segundo_apellido,
        p_email,
        p_contrasena,
        p_rol
    );
END //

DELIMITER ;
-- Procedure para obtener el activo y la contraseña de un usuario
DELIMITER //

CREATE PROCEDURE ObtenerContrasenaYEstado(
    IN p_nombre_usuario VARCHAR(50)
)
BEGIN
    DECLARE v_contrasena VARCHAR(255);
    DECLARE v_activo BIT;
    
    -- Buscar la contraseña y estado del usuario
    SELECT contrasena, activo INTO v_contrasena, v_activo
    FROM usuario
    WHERE nombre_usuario = p_nombre_usuario;
    
    -- Devolver la contraseña y estado
    SELECT v_contrasena AS contrasena, v_activo AS activo;
END //

DELIMITER ;
-- Procedure para obtener el ID del usuario
DELIMITER //

CREATE PROCEDURE ObtenerIdUsuarioPorNombre(
    IN p_username VARCHAR(50),
    OUT p_user_id INT
)
BEGIN
    -- Buscar el ID del usuario por su nombre de usuario
    SELECT id INTO p_user_id
    FROM usuario
    WHERE nombre_usuario = p_username;
END //

DELIMITER ;
