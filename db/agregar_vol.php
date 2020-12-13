<?php
  session_start();
include("conexion.php");

if (isset($_POST['agregar-vol'])) {
    $nom = $_POST['nombre'];
    $ape = $_POST['apellido'];
    $email =$_POST['email'];
    $cel = $_POST['celular'];
    $user = $_POST['usuario'];

    

$query = "INSERT INTO usuarios(apellido, 
                            nombre, 
                            usuario,
                            celular,
                            email) VALUES (  '$ape','$nom','$user','$cel','$email' )";
$resultado = mysqli_query($conexion, $query);

if (!$resultado) {
    die("Falló");
}
} else {echo 'formulario no recibido';}
$_SESSION['message'] = 'El registro de guardó correctamente.';
$_SESSION['message_color'] = 'success';
header("Location: voluntarios.php");
