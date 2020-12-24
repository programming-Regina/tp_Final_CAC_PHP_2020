<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php
session_start();
include_once "conexion.php";
include_once "action.php";
include_once "upload_foto.php";

if (isset($_POST['agregar'])) {

    $foto = subir_foto("0.jpg","../img/adopcion/", $_FILES['userfile']['size'],$_FILES['userfile']['name']);
  
    $nom = asegurar($_POST['nombre']);
    $raza = asegurar($_POST['raza']);
    $sexo = $_POST['sexo'];
    $agno = $_POST['agno'];
    $ingreso = $_POST['ingreso'];
    $mentor = asegurar($_POST['mentor']);
    $hist = asegurar($_POST['historia']);
    if ($_POST['vacunado'] == 1) {
        $vac = 1;
    } else {
        $vac = 0;
    }
    if ($_POST['desparasitado'] == 1) {
        $desp = 1;
    } else {
        $desp = 0;
    }
    if ($_POST['castrado'] == 1) {
        $castr = 1;
    } else {
        $castr = 0;
    }
    if ($_POST['adoptable'] == 1) {
        $adoptable = 1;
    } else {
        $adoptable = 0;
    }
    if ($_POST['adoptado'] == 1) {
        $adoptado = 1;
    } else {
        $adoptado = 0;
    }

    $query = "INSERT INTO gatos(nom_gato, 
                                sexo, 
                                raza_color,
                                agno_nacim,
                                fecha_ingreso,
                                historia,
                                vacunado,
                                desparasitado,
                                castrado,
                                foto,
                                mentor,
                                apto_adopc,
                                adoptado) VALUES (  '$nom', 
                                                    '$sexo', 
                                                    '$raza',
                                                    '$agno',
                                                    '$ingreso',
                                                    '$historia',
                                                    '$vac',
                                                    '$desp',
                                                    '$castr',
                                                    '$foto', 
                                                    '$mentor', 
                                                    '$adoptable',
                                                    '$adoptado')";
    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die("Falló");
    }

    $_SESSION['message'] = 'El registro se guardó correctamente.';
    $_SESSION['message_color'] = 'success';
    echo "<script>location.href='index_db.php'</script>";
    # header("Location: ingreso_gato.php");
}
include_once('footer_admin.php');
