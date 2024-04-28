<?php
    include('../controllers/action.controller.php');
    // Define el título de la página
    $pageTitle = "Elearning";
    $pageName = "wiki_create";
    
    // Define el contenido de la página
    ob_start(); // Inicia el almacenamiento en el buffer de salida
?>
    <main class="height-4 center">
        <div class="form-container-2">
            <div class="form-header">
                <h2>Create README</h2>
            </div>
            <div class="input-container">
                <input type="text" placeholder="Article Title" id="markdown-title">
            </div>
            <div class="input-container height-2">
                <textarea placeholder="Markdown Content" class="textarea-1" id="markdown-content"></textarea>
            </div>
            <div class="button-container-2">
                <button class="custom-button" onclick="save()">Save</button>
            </div>
        </div>
    </main>
    <script>
        function save() {
            var title = document.getElementById('markdown-title').value;
            var content = document.getElementById('markdown-content').value;
    
            // Verificar si ambos campos tienen contenido antes de mostrar el alert
            if (title.trim() !== '' && content.trim() !== '') {
                // Crear un formulario dinámicamente
                var form = document.createElement('form');
                form.method = 'post';
                form.action = '/crear_wiki.php';
    
                // Agregar un input para el título
                var titleInput = document.createElement('input');
                titleInput.type = 'hidden'; // Campo oculto
                titleInput.name = 'markdown-title'; // Nombre del campo
                titleInput.value = title; // Valor del título
                form.appendChild(titleInput);
    
                // Agregar un input para el contenido
                var contentInput = document.createElement('input');
                contentInput.type = 'hidden'; // Campo oculto
                contentInput.name = 'markdown-content'; // Nombre del campo
                contentInput.value = content; // Valor del contenido
                form.appendChild(contentInput);
    
                // Agregar el formulario al body y enviarlo
                document.body.appendChild(form);
                form.submit();
            } else {
                alert("Por favor, ingresa un título y contenido antes de guardar.");
            }
        }
    </script>
<?php
    $pageContent = ob_get_clean(); // Almacena el contenido del buffer de salida en la variable $pageContent y limpia el buffer
?>

<?php
    // Incluye el archivo de plantilla
    include 'layout.php';
?>