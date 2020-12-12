<?php
include_once("../db/conexion.php");
include_once("partials/head_login.php"); ?>

    <?php
    if (isset($_POST['access'])) {
        $user = $_POST['user'];
        $sent_pass = $_POST['sent_pass'];

        $query = "SELECT * FROM usuarios WHERE usuario = '$user'";
        $resultado = mysqli_query($conexion, $query) or die("database error:" . mysqli_error($conexion));
        $row = mysqli_fetch_array($resultado);
        $id = $row['id'];
        $nom = $row['nombre'];
        $clave = $row['clave'];
        

        if ($clave == 'voluntario' && $sent_pass == 'voluntario') {
            echo '<div class="container welcome mt-5 p-4 bg-info text-center"><h1> Bienvenid@ ' . utf8_encode($nom) . '</h1>';
            echo '<h3>Debes <a class="btn btn-sm btn-warning" href="change_pass.php?id=' . $id . '">
                  cambiar tu contraseña</a></h3></div>';;
        } else {
           if (password_verify($sent_pass, $clave)) {  
               echo '<br><br><br><br><br><br><br>Bienvenido,  '.$nom;
               # no funciona el header("Location...) en el servidor, so:
               # header("Location: ../db/index_db.php");
               echo "<script>location.href='../db/index_db.php';</script>";
            } else {    
                $_SESSION['message'] = 'Datos incorrectos.';
                $_SESSION['message_color'] = 'danger';                
                header("Location: access.php");  
            } 
        }
    }
    include('footer.php'); ?>