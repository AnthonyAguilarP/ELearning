<?php
    include('../controllers/action.controller.php');
    // Define el título de la página
    $pageTitle = "Elearning";
    $pageName = "courses";
    
    // Define el contenido de la página
    ob_start(); // Inicia el almacenamiento en el buffer de salida
?>
<style>
        /* File Input */
input[type=file] { 
	display: none; 
}

label.file {
	display: grid;
	grid-auto-flow: column;
	grid-gap: .5em;
	justify-items: center;
	align-content: center;
	color: #E91E63;
	border: .2em solid #E91E63;
	background: hsl(0 0 0/0);
	padding: .85em 1.5em;
	border-radius: 2em;
	transition: 1s;
	cursor: pointer; /* Make the cursor change to pointer on hover */
    width: 40px;
    height: 10px;
    margin-left: 10px;
    margin-right: 10px;
}

label.file:hover,
label.file:focus,
label.file:active {
	background: #E91E63;
	color: #fff;
}
        input[type=submit] {
            background-color: #E91E63;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-left: 10px;
            margin-right: 10px;
        }
        input[type=submit]:hover {
            background-color: #D81B60;
        }
        /* Text Input */
input[type=text] {
	appearance: none;
	border: none;
	outline: none;
	border-bottom: .2em solid #E91E63;
	background: rgba(#E91E63, .2);
	border-radius: .2em .2em 0 0;
	padding: .4em;
	color: #E91E63;
	width: 200px; /* Ajusta el ancho según sea necesario */
}

input[type=text]:focus {
	background: rgba(#E91E63, .4); /* Cambia el color de fondo cuando está enfocado */
}
    </style>
    <main class="overflow-1 height-4 row column">
        <div class="row height-6 col">
            <form action="upload_curse_profile.php" method="post" enctype="multipart/form-data" class="row height center col-9 border-3">
                <label for="file" class="file">
                    Upload 
                    <ion-icon name="cloud-upload-outline"></ion-icon>
                    <input id="file" type="file">
                </label>
                <input type="submit" value="Guardar imagen del curso">
            </form>
            <form action="upload_curse_profile.php" method="post" enctype="multipart/form-data" class="row height center col-9 border-3">
                <input type="text" id="text-input" placeholder="Clave...">
                <input type="submit" value="Submit">
                <h4>Clave: </h4>
            </form>
        </div>
        <div class="row height-6 col">
            <form action="upload_curse_profile.php" method="post" enctype="multipart/form-data" class="row height center col-9 border-3">
                <input type="text" id="text-input" placeholder="Encabezado...">
                <label for="file" class="file">
                    Upload 
                    <ion-icon name="cloud-upload-outline"></ion-icon>
                    <input id="file" type="file">
                </label>
                <input type="submit" value="Subir documento">
            </form>
            <form action="upload_curse_profile.php" method="post" enctype="multipart/form-data" class="row height center col-9 border-3">
                <input type="text" id="text-input" placeholder="Nombre del curso...">
                <input type="submit" value="Crear curso">
                <h4>Nombre: </h4>
            </form>
        </div>
        <div class="row height-6 col">
            <form action="upload_curse_profile.php" method="post" enctype="multipart/form-data" class="row height center col-9 border-3">
                <input type="text" id="text-input" placeholder="Nombre de la tarea...">
                <input type="submit" value="Crear tarea">
            </form>
            <form action="upload_curse_profile.php" method="post" enctype="multipart/form-data" class="row height center col-9 border-3">
                <input type="submit" value="Borrar">
                <h4>Borrar este curso</h4>
            </form>
        </div>
    </main>
<?php
    $pageContent = ob_get_clean(); // Almacena el contenido del buffer de salida en la variable $pageContent y limpia el buffer
?>

<?php
    // Incluye el archivo de plantilla
    include 'layout.php';
?>