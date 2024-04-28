<?php
    include('../controllers/action.controller.php');
    // Define el título de la página
    $pageTitle = "Elearning";
    $pageName = "wiki_article";
    
    // Define el contenido de la página
?>
<?php
$title=$_GET['title'];
// Incluir la clase Parsedown
require '../library/parsedown-1.7.4/Parsedown.php';
// Ruta al archivo Markdown
$markdown_file = '../md/'.$title;

// Leer el contenido del archivo Markdown
$markdown_content = file_get_contents($markdown_file);

// Crear una instancia de Parsedown
$parser = new Parsedown();

// Convertir el Markdown a HTML
$html_content = $parser->text($markdown_content);

?>
<?php
    $pageContent = $html_content; // Almacena el contenido del buffer de salida en la variable $pageContent y limpia el buffer
?>

<?php
    // Incluye el archivo de plantilla
    include 'layout.php';
?>