<?php 
session_start();
include("conexion.php");

if (isset($_POST['agregar'])) {
    echo $foto = $_POST['foto'];
    $nom = $_POST['nombre'];
    $raza = $_POST['raza'];
    $sexo = $_POST['sexo'];
    $agno = $_POST['agno'];
    $ingreso = $_POST['ingreso'];
    if ($_POST['foto'] == NULL) {
        $foto = "0.jpg";
    } else {
        $foto = $_POST['foto'];
    }    
    $mentor = $_POST['mentor'];
    $hist = $_POST['historia'];    
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
    echo "<script>location.href='ingreso_gato.php'</script>"; 
   # header("Location: ingreso_gato.php");
} include_once('footer_admin.php'); ?>