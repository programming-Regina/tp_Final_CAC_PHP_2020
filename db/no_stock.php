<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php
session_start();
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
  
    $query = "UPDATE tienda SET en_stock = 0  WHERE id_art = $id;";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) {
        die("Falló");
    }

    # ENVÍO UN MENSAJE PARA MOSTRAR UN ALERTA DE ESTADO A LA PÁGINA INICIAL
    $_SESSION['message'] = 'Se quitó de la venta';
    $_SESSION['message_color'] = 'danger';
}
header("Location: admin_tienda.php");

?>