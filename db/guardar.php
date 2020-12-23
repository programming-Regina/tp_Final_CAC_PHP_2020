<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php
session_start();
include("conexion.php");
include_once("action.php");

if (isset($_POST['agregar'])) {
    $foto = "0.jpg"; // si no se selecciona una foto para subir

    $error = "";
    $folder = "../img/adopcion/";
    $maxlimit = 5000000; // tamaño máximo (en bits)
    $allowed_ext = "png,jpg";
    $overwrite = "yes";
    $match = "";
    $filesize = $_FILES['userfile']['size']; // toma el tamaño del archivo
    $filename = strtolower($_FILES['userfile']['name']); // toma el nombre del archivo y lo pasa a minúsculas
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

    $nom = asegurar($_POST['nombre']);
    $raza = asegurar($_POST['raza']);
    $sexo = $_POST['sexo'];
    $agno = $_POST['agno'];
    $ingreso = $_POST['ingreso'];
    $mentor = asegurar($_POST['mentor']);
    $hist = asegurar($_POST['historia']);
    if ($_POST['vacunado'] == 1) {
        $vac = 1;
    } else {
        $vac = 0;
    }
    if ($_POST['desparasitado'] == 1) {
        $desp = 1;
    } else {
        $desp = 0;
    }
    if ($_POST['castrado'] == 1) {
        $castr = 1;
    } else {
        $castr = 0;
    }
    if ($_POST['adoptable'] == 1) {
        $adoptable = 1;
    } else {
        $adoptable = 0;
    }
    if ($_POST['adoptado'] == 1) {
        $adoptado = 1;
    } else {
        $adoptado = 0;
    }

    $query = "INSERT INTO gatos(nom_gato, 
                                sexo, 
                                raza_color,
                                agno_nacim,
                                fecha_ingreso,
                                historia,
                                vacunado,
                                desparasitado,
                                castrado,
                                foto,
                                mentor,
                                apto_adopc,
                                adoptado) VALUES (  '$nom', 
                                                    '$sexo', 
                                                    '$raza',
                                                    '$agno',
                                                    '$ingreso',
                                                    '$historia',
                                                    '$vac',
                                                    '$desp',
                                                    '$castr',
                                                    '$foto', 
                                                    '$mentor', 
                                                    '$adoptable',
                                                    '$adoptado')";
    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die("Falló");
    }

    $_SESSION['message'] = 'El registro se guardó correctamente.';
    $_SESSION['message_color'] = 'success';
    echo "<script>location.href='index_db.php'</script>";
    # header("Location: ingreso_gato.php");
}
include_once('footer_admin.php');
