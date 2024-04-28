<?php
    include('../controllers/action.controller.php');
    // Define el título de la página
    $pageTitle = "Elearning";
    $pageName = "wiki";
    
    // Define el contenido de la página
    ob_start(); // Inicia el almacenamiento en el buffer de salida
?>
    <main class="center overflow-1 height-4">
        <ul>
            <?php
                // Ruta de la carpeta que contiene los archivos .md
                $folder_path = '../md/';

                // Obtener todos los archivos de la carpeta con la extensión .md
                $md_files = glob($folder_path . '*.md');

                // Verificar si se encontraron archivos .md en la carpeta
                if ($md_files) {
                    // Recorrer cada archivo .md
                    foreach ($md_files as $md_file) {
                        // Obtener el nombre base del archivo sin la ruta
                        $file_name = basename($md_file);

                        // Obtener la información del archivo
                        $file_info = pathinfo($file_name);

                        // Obtener el nombre del archivo sin la extensión
                        $file_name_without_extension = $file_info['filename'];

                        // Imprimir el nombre del archivo sin la extensión
                        echo "
                        <li>
                            <a href='wiki_article.php?title=".$file_name."' class='c-1'>$file_name_without_extension</a>
                        </li>
                        ";
                    }
                } else {
                    echo "No se encontraron archivos .md en la carpeta.";
                }
            ?>
        </ul>
    </main>
<?php
    $pageContent = ob_get_clean(); // Almacena el contenido del buffer de salida en la variable $pageContent y limpia el buffer
?>

<?php
    // Incluye el archivo de plantilla
    include 'layout.php';
?>