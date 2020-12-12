<?php
include_once("../db/conexion.php");
include_once("partials/head_login.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT id, nombre, usuario FROM usuarios WHERE id = $id;";
    $resultado = mysqli_query($conexion, $query);
    $user = mysqli_fetch_array($resultado);

    $id = $user['id'];
    $nom = $user['nombre'];
    $user = $user['usuario'];
    # $pass = $user['clave'];  
?>

    <div class="container p-4 w-25 mt-5 m-auto bg-warning">
        <form class="new_pass needs-validation" action="change_pass.php?id=<?= $id ?>" method="POST" novalidate>
            <div class="form-group">
                <label for="new_pass">Nueva contraseña</label>
                <input type="password" id="new_pass" name="new_pass" pattern=".{6,}" placeholder="Mínimo 6 caracteres" required><br>
                <div class="invalid-feedback">
                    Ingresa un mínimo de 6 caracteres
                </div>
            </div>
            <button class="btn btn-block btn-danger" type="submit" id="send_passw" name="send_passw">Cambiar contraseña</button>
    </div>
    </form>
<?php
}
if (isset($_POST['send_passw'])) {
    $new_pass_cifrado = password_hash($_POST['new_pass'] , PASSWORD_DEFAULT, array("cost"=>10));  
   $query2 = "UPDATE usuarios set 
        clave = '$new_pass_cifrado'
        WHERE id = $id";
    $resultado2 =  mysqli_query($conexion, $query2);
    echo $resultado2;
    if (!$resultado2) {
        die("Falló");
    } 

    $_SESSION['message'] = 'La clave se actualizó correctamente.';
    $_SESSION['message_color'] = 'success';
   header("Location: access.php");
}
?>