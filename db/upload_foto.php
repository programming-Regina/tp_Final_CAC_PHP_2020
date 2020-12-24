<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php
function subir_foto($default, $folder, $size, $name)
{
    $foto = $default; // si no se selecciona una foto para subir

    $error = "";
    $folder = $folder;
    $maxlimit = 5000000; // tamaño máximo (en bits)
    $allowed_ext = "png,jpg";
    $overwrite = "yes";
    $match = "";
    $filesize = $size; // toma el tamaño del archivo
    $filename = strtolower($name); // toma el nombre del archivo y lo pasa a minúsculas
    if (!$filename || $filename == "") { // comprueba si no se ha seleccionado ningún archivo
        $error = "- Ningún archivo selecccionado para subir.<br>";
    } elseif (file_exists($folder . $filename) && $overwrite == "no") { // comprueba si el archivo existe 
        $error = "- El archivo <b>$filename</b> ya existe<br>";
    }
    // comprobar tamaño de archivo
    if ($filesize < 1) { // el archivo está vacío
        $error .= "- Archivo vacío.<br>";
    } elseif ($filesize > $maxlimit) { // el archivo supera el máximo permitido
        $error .= "- Este archivo supera el máximo tamaño permitido.<br>";
    }
    $file_ext = preg_split("/\./", $filename);
    $allowed_ext = preg_split("/\,/", $allowed_ext);
    foreach ($allowed_ext as $ext) {
        if ($ext == $file_ext[1]) $match = "1"; // Archivo OK
    }
    // Extensión no permitida
    if (!$match) {
        $error .= "- Este tipo de archivo no está permitido: $filename<br>";
    }
    if ($error) {
        #echo "Se han producido los siguientes errores al intentar subir la foto:<br> $error"; // Muestra los errores
    } else {
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $folder . $filename)) { // Sube el archivo
            $foto = $filename;
            #echo "<b>$filename</b> se ha subido correctamente!"; // Mensaje de aviso, upload correcto
        } else {
            #echo "Error! El tamaño supera el máximo permitido por el servidor. Inténtelo de nuevo."; // error
        }
    }
    return $foto;
}
