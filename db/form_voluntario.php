<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php
include("conexion.php");
include_once("action.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM usuarios WHERE id = $id;";
    $resultado = mysqli_query($conexion, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $id = $row['id'];
        $nom = $row['nombre'];
        $ape = $row['apellido'];
        $email = $row['email'];
        $user = $row['usuario'];
        $cel = $row['celular'];
    }
}

if (isset($_POST['update-vol'])) {
    $nom = asegurar($_POST['nombre']);
    $ape = asegurar($_POST['apellido']);
    $email = asegurar($_POST['email']);
    $cel = asegurar($_POST['celular']);
    $user = asegurar($_POST['usuario']);


    $query = "UPDATE usuarios set 
        apellido = '$ape', 
        nombre = '$nom', 
        usuario = '$user',
        celular = '$cel',        
        email = '$email'
        WHERE id = $id";
    mysqli_query($conexion, $query);


    if (!$resultado) {
        die("Falló");
    }

    $_SESSION['message'] = 'El registro de guardó correctamente.';
    $_SESSION['message_color'] = 'success';
    header("Location: voluntarios.php");
}
include_once("header_admin.php");
?>

<div class="container p-4 mt-4" id="tabla-vol">
    <form action="form_voluntario.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <h3>Modificar datos del voluntario</h3>

        <div class="form-group">
            <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" aria-describedby="nombre" value="<?php echo html_entity_decode($nom); ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-sm" id="apellido" name="apellido" aria-describedby="apellido" value="<?php echo html_entity_decode($ape); ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-sm" id="celular" name="celular" aria-describedby="celular" value="<?php echo html_entity_decode($cel); ?>" pattern="\(011) [0-9]{4}[ -][0-9]{4}">
        </div>
        <div class="form-group">
            <input type="email" class="form-control form-control-sm" id="email" name="email" aria-describedby="email" value="<?php echo html_entity_decode($email); ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-sm" id="usuario" name="usuario" aria-describedby="usuario" value="<?php echo html_entity_decode($user); ?>">
            <small id="usuarioHelp" class="form-text  text-dark">Deberá cambiar la clave la primera vez que ingrese al sistema</small>
        </div>

        <div class="form-group mt-2"><button type="submit" name="update-vol" class="btn btn-danger btn-block">Actualizar datos</button></div>
    </form>
</div>

<?php include_once("footer_admin.php"); ?>