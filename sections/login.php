<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

session_start();
include_once("../db/conexion.php");
include_once("../db/action.php");
include_once("head_login.php"); 

if (isset($_POST['access'])) {
    $user = asegurar($_POST['user']);
    $sent_pass = asegurar($_POST['sent_pass']);

    $query = "SELECT * FROM usuarios WHERE usuario = '$user'";
    $resultado = mysqli_query($conexion, $query) or die("database error:" . mysqli_error($conexion));
    $row = mysqli_fetch_array($resultado);
    $id = $row['id'];
    $nom = $row['nombre'];
    $clave = $row['clave'];

    if ($clave == 'voluntario' && $sent_pass == 'voluntario') {
        echo '<div class="container welcome w-50 mt-5 p-4 bg-info text-center"><h1> Bienvenid@ ' . html_entity_decode($nom) . '</h1>';
        echo '<h3>Debes <a class="btn btn-sm btn-warning" href="change_pass.php?id=' . $id . '">
                  cambiar tu contraseña</a></h3></div>';;
    } else {
        if (password_verify($sent_pass, $clave)) {
            $_SESSION['username'] = $nom;
            echo "<script>location.href='../db/index_db.php';</script>";
        } else {
            $_SESSION['message'] = 'Datos incorrectos.';
            $_SESSION['message_color'] = 'danger';
            echo "<script>location.href='access.php'</script>";
            #header("Location: access.php");  
        }
    }
}

include('footer.php'); ?>