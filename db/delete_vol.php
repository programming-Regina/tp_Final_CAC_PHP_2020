<?php
  session_start();
include("conexion.php"); 

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM usuarios WHERE id = $id";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) {
        die("Falló");
    } 
    
    # ENVÍO UN MENSAJE PARA MOSTRAR UN ALERTA DE ESTADO A LA PÁGINA INICIAL
    $_SESSION['message'] = 'Entrada eliminada';
    $_SESSION['message_color'] = 'danger';
    header("Location: voluntarios.php");   
}
?>