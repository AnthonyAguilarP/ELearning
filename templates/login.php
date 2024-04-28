<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body class="center">
    <form class="form-container" method="post" action="../views/login.view.php">
        <div class="form-header">
            <h1>Ingrese</h1>
        </div>
        <div class="input-container">
            <input type="text" name="userName" placeholder="Nombre de usuario">
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