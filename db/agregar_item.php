<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->


<?php
session_start();
include_once 'conexion.php';
include_once 'action.php';
include_once 'upload_foto.php';

if (isset($_POST['alta_item'])) {
    $foto = subir_foto("default.jpg", "../img/tienda/", $_FILES['userfile']['size'], $_FILES['userfile']['name']);

    $art = asegurar($_POST['articulo']);
    $desc = asegurar($_POST['descripcion']);
    $precio = asegurar($_POST['precio']);
    $cont = asegurar($_POST['contacto']);
    $stock = $_POST['stock'];



    $query = "INSERT INTO tienda(articulo, 
                            descripcion, 
                            foto_art,
                            precio,
                            contacto,
                            en_stock) VALUES (  '$art','$desc','$foto','$precio','$cont','$stock' )";
    $resultado = mysqli_query($conexion, $query);
    $_SESSION['message'] = 'El registro de guardó correctamente.';
    $_SESSION['message_color'] = 'success';
    header("Location: admin_tienda.php");

    if (!$resultado) {
        die("Falló");
    }
} else {
    echo 'formulario no recibido';
}

?>