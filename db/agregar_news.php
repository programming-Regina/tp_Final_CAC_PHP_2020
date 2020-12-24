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

if (isset($_POST['alta_titulo'])) {
    $foto = subir_foto("default.jpg", "../img/prensa/", $_FILES['userfile']['size'], $_FILES['userfile']['name']);

    $tit = asegurar($_POST['titulo']);
    $desc = asegurar($_POST['descripcion']);
    $link = asegurar($_POST['link']);
    if ($_POST['seccion'] == 'news') {
        $news = 1;
        $press = 0;
    } else {
        $news = 0;
        $press = 1;
    }
    if ($_POST['oculto'] == 1) {
        $hidden = 1;
    } else {
        $hidden = 0;
    }


    $query = "INSERT INTO difusion(titulo, 
                            descripcion, 
                            link,
                            foto,
                            novedad,
                            prensa,
                            obsoleto) VALUES (  '$tit','$desc','$link', '$foto','$news','$press','$hidden' )";
    $resultado = mysqli_query($conexion, $query);
    $_SESSION['message'] = 'El artículo se publicó correctamente.';
    $_SESSION['message_color'] = 'success';
    header("Location: admin_news.php");

    if (!$resultado) {
        die("Falló");
    }
} else {
    echo 'formulario no recibido';
}

?>