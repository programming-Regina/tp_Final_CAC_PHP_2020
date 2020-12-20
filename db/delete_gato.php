<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php
session_start();
include 'conexion.php';

if (isset($_GET['btnborrar'])) {
    $id = $_GET['mandavalor'];
    $query = "DELETE FROM gatos WHERE id_gato = $id";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) {
        die("Falló");
    }

    # ENVÍO UN MENSAJE PARA MOSTRAR UN ALERTA DE ESTADO A LA PÁGINA INICIAL
    $_SESSION['message'] = 'Entrada eliminada';
    $_SESSION['message_color'] = 'danger';
}
header("Location: index_db.php");

?>