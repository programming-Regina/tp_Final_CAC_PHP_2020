<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php
session_start();
include_once 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
  
    $query = "UPDATE difusion SET obsoleto = 1  WHERE id_nota = $id;";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) {
        die("Falló");
    }

    $_SESSION['message'] = 'La publicación permanecerá oculta';
    $_SESSION['message_color'] = 'danger';
}
header("Location: admin_news.php");

?>