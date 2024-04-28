<?php
require_once('action.controller.php');
function getCourses($nombre_archivo){
    // Directorio que quieres explorar
    $directorio = '../img/courses';
    echo 'src="'.obtenerRutaArchivo($nombre_archivo, $directorio).'"';
}