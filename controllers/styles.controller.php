<?php

define("styles", '<link rel="stylesheet" href="../styles/styles.css">');
function getIcon($nombre_archivo){
    // Directorio que quieres explorar
    
    $directorio = '../icons';
    echo 'src="'.obtenerRutaArchivo($nombre_archivo, $directorio).'"';
}