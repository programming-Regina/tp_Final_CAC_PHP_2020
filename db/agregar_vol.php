<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->


<?php
session_start();
include 'conexion.php';
include 'action.php';

if (isset($_POST['agregar-vol'])) {
  $nom = asegurar($_POST['nombre']);
  $ape = asegurar($_POST['apellido']);
  $email = asegurar($_POST['email']);
  $cel = asegurar($_POST['celular']);
  $user = asegurar($_POST['usuario']);



  $query = "INSERT INTO usuarios(apellido, 
                            nombre, 
                            usuario,
                            celular,
                            email) VALUES (  '$ape','$nom','$user','$cel','$email' )";
  $resultado = mysqli_query($conexion, $query);

  if (!$resultado) {
    die("Falló");
  }
} else {
  echo 'formulario no recibido';
}
$_SESSION['message'] = 'El registro de guardó correctamente.';
$_SESSION['message_color'] = 'success';
header("Location: voluntarios.php");
