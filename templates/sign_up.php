<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body class="center body-plus-1">
    <form class="form-container-1" method="post" action="../views/sign_up.view.php">
        <div class="form-header">
            <h1>Ingrese</h1>
        </div>
        <div class="input-container">
            <input type="text" name="userName" placeholder="Nombre de usuario">
        </div>
        <div class="input-container">
            <input type="text" name="fName" placeholder="Primer nombre">
        </div>
        <div class="input-container">
            <input type="text" name="sName" placeholder="Segundo nombre">
        </div>
        <div class="input-container">
            <input type="text" name="flName" placeholder="Primer apellido">
        </div>
        <div class="input-container">
            <input type="text" name="slName" placeholder="Segundo apellido">
        </div>
        <div class="input-container">
            <input type="email" name="email" placeholder="Correo">
        </div>
        <div class="input-container">
            <input type="password" name="pass" placeholder="Clave de acceso">
        </div>
        <div class="button-container">
            <input type="submit" value="Enviar" class="custom-button">
        </div>
    </form>
</body>
</html>