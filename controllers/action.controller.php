<?php
    include('content.controller.php');
    include('styles.controller.php');
    function obtenerRutaArchivo($nombre_archivo, $directorio) {
        static $cache = array(); // Array de caché para almacenar las rutas de los archivos por directorio
    
        // Verificar si ya hemos escaneado este directorio y almacenado las rutas en caché
        if (!isset($cache[$directorio])) {
            // Escanear el directorio y crear el array asociativo de rutas de archivos
            $archivos = scandir($directorio);
            $archivos = array_diff($archivos, array('.', '..'));
            $archivos_asociativos = array();
            foreach ($archivos as $archivo) {
                $ruta_archivo = $directorio . '/' . $archivo;
                $archivos_asociativos[$archivo] = $ruta_archivo;
            }
    
            // Almacenar el array asociativo en caché para este directorio
            $cache[$directorio] = $archivos_asociativos;
        }
    
        // Verificar si el archivo existe en el cache para este directorio
        if (isset($cache[$directorio][$nombre_archivo])) {
            return $cache[$directorio][$nombre_archivo];
        } else {
            return ""; // Retornar una cadena vacía si el archivo no se encontró
        }
    }
    function textController($text) {
        $n=strlen($text);
        $error=match(true) {
            $n<20 && $n>3 => '$-p0$n',
            $n < 3  => 'Ingrese mas caracteres',
            $n > 20 => 'Ingrese menos caracteres',
            default => 'sape',
        };
        return $error;
    }
    function errorController($error) {
        echo '<script>window.location.href = "/templates/error.php?error='.$error.'"</script>';
    }
