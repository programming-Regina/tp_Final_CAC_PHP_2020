<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->


<?php
session_start();
include("conexion.php");
include_once("action.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT *, usuarios.id, usuarios.apellido, usuarios.nombre FROM gatos JOIN usuarios ON gatos.mentor = usuarios.id WHERE gatos.id_gato = $id;";
    $resultado = mysqli_query($conexion, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $id_gato = $row['id_gato'];
        $nombre = $row['nom_gato'];
        $sexo = $row['sexo'];
        $color = $row['raza_color'];
        $agno = $row['agno_nacim'];
        $ingreso = $row['fecha_ingreso'];
        $hist = $row['historia'];
        $vac = $row['vacunado'];
        $desp = $row['desparasitado'];
        $cast = $row['castrado'];
        $fotop = $row['foto'];
        $mentor = $row['mentor'];
        $adoptable = $row['apto_adopc'];
        $adoptado = $row['adoptado'];
    }
}

if (isset($_POST['update'])) {
    $error = "";
    $folder = "../img/adopcion/";
    $maxlimit = 5000000; // tamaño máximo (en bits)
    $allowed_ext = "png,jpg";
    $overwrite = "yes";
    $match = "";
    $filesize = $_FILES['userfile']['size']; // toma el tamaño del archivo
    $filename = strtolower($_FILES['userfile']['name']); // toma el nombre del archivo y lo pasa a minúsculas
    if (!$filename || $filename == "") { // comprueba si no se ha seleccionado ningún archivo
        $error = "- Ningún archivo selecccionado para subir.<br>";
    } elseif (file_exists($folder . $filename) && $overwrite == "no") { // comprueba si el archivo existe 
        $error = "- El archivo <b>$filename</b> ya existe<br>";
    }
    // comprobar tamaño de archivo
    if ($filesize < 1) { // el archivo está vacío
        $error .= "- Archivo vacío.<br>";
    } elseif ($filesize > $maxlimit) { // el archivo supera el máximo permitido
        $error .= "- Este archivo supera el máximo tamaño permitido.<br>";
    }
    $file_ext = preg_split("/\./", $filename);
    $allowed_ext = preg_split("/\,/", $allowed_ext);
    foreach ($allowed_ext as $ext) {
        if ($ext == $file_ext[1]) $match = "1"; // Archivo OK
    }
    // Extensión no permitida
    if (!$match) {
        $error .= "- Este tipo de archivo no está permitido: $filename<br>";
    }
    if ($error) {
        #echo "Se han producido los siguientes errores al intentar subir la foto:<br> $error"; // Muestra los errores
    } else {
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $folder . $filename)) { // Sube el archivo
            $foto = $filename;
            #echo "<b>$filename</b> se ha subido correctamente!"; // Mensaje de aviso, upload correcto            
        } else {
            #echo "Error! El tamaño supera el máximo permitido por el servidor. Inténtelo de nuevo."; // error
        }
    }
    $id_gato = $_GET['id'];
    $nombre = asegurar($_POST['nombre']);
    $sexo = $_POST['sexo'];
    $color = asegurar($_POST['color']);
    $agno = $_POST['nacimiento'];
    $ingreso = $_POST['ingreso'];
    $hist = asegurar($_POST['hist']);
    if ($_POST['is_vacunado'] == 1) {
        $vac = $_POST['is_vacunado'];
    } else {
        $vac = 0;
    }
    if ($_POST['is_desparasitado'] == 1) {
        $desp = $_POST['is_desparasitado'];
    } else {
        $desp = 0;
    }
    if ($_POST['is_castrado'] == 1) {
        $cast = $_POST['is_castrado'];
    } else {
        $cast = 0;
    }
    if ($_POST['is_adoptable'] == 1) {
        $adoptable = $_POST['is_adoptable'];
    } else {
        $adoptable = 0;
    }
    if ($_POST['is_adoptado'] == 1) {
        $adoptado = $_POST['is_adoptado'];
    } else {
        $adoptado = 0;
    }
    /*     if ($_POST['userfile'] == NULL) {
        $foto = $fotop;
    } else {
        $foto = $_POST['userfile'];
    } */
    $mentor = $_POST['mentor'];

    $query = "UPDATE gatos set 
        nom_gato = '$nombre', 
        sexo = '$sexo', 
        raza_color = '$color',
        agno_nacim = '$agno',
        fecha_ingreso = '$ingreso',
        historia = '$hist',
        vacunado = '$vac',
        desparasitado = '$desp',
        castrado = '$cast',
        foto = '$foto',
        mentor = '$mentor',
        apto_adopc = '$adoptable',
        adoptado = '$adoptado' 
        WHERE id_gato = $id";
    mysqli_query($conexion, $query);

    # ENVÍO UN MENSAJE PARA MOSTRAR UN ALERTA DE ESTADO A LA PÁGINA INICIAL
    $_SESSION['message'] = 'Los datos de ' . $nombre . ' fueron actualizados';
    $_SESSION['message_color'] = 'success';
    header("Location: index_db.php");
}
?>

<?php include_once("header_admin.php"); ?>

<!-- ACTUALIZAR DATOS GATO -->
<div class="container mt-4" id="actualizacion">
    <h3>Actualizar datos del gato</h3>

    <form action="edit_gato.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo html_entity_decode($nombre); ?>">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Raza/Color/Señas particulares</label>
            <input type="text" class="form-control" name="color" value="<?php echo html_entity_decode($color); ?>">
        </div>
        <div class="form-row mb-2">
            <div class="col">
                <label for="formGroupExampleInput2">Sexo</label>

                <select class="custom-select mr-sm-2" name="sexo">

                    <option value="Hembra" <?php if ($sexo == 'Hembra') {
                                                echo 'selected';
                                            } ?>>Hembra</option>
                    <option value="Macho" <?php if ($sexo == 'Macho') {
                                                echo 'selected';
                                            } ?>>Macho</option>
                </select>

            </div>
            <div class="col">
                <label for="formGroupExampleInput2">Año de nacimiento</label>
                <input type="text" class="form-control" name="nacimiento" value="<?php echo $agno; ?>">
            </div>
            <div class="col">
                <label for="formGroupExampleInput2">Fecha de Ingreso</label>
                <input type="date" class="form-control" name="ingreso" value="<?php echo $ingreso; ?>">
            </div>
            <div class="col">Foto<br>
                <div class="custom-file mt-2 align-bottom">
                    <input type="file" class="custom-file-input " id="customFile" name="userfile" value="<?php echo $fotop; ?>">
                    <label class="custom-file-label" for="customFile"><?php echo $fotop; ?></label>
                </div>
            </div>
            <div class="col">
                <label for="formGroupExampleInput2">Cuidador</label>
                <select class="custom-select mr-sm-2" name="mentor">

                    <?php
                    $query1 = "SELECT id, apellido, nombre  FROM usuarios";
                    $valores = mysqli_query($conexion, $query1);

                    while ($voluntario = mysqli_fetch_array($valores)) {
                    ?>
                        <option value="<?php echo $voluntario['id']; ?>" <?php if ($voluntario['id'] == $mentor) {
                                                                                echo 'selected';
                                                                            } ?>>

                            <?php
                            echo html_entity_decode($voluntario['nombre'] . ' ' . $voluntario['apellido']);
                            ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Historia</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?php echo html_entity_decode($hist); ?>" name="hist"><?php echo html_entity_decode($hist); ?></textarea>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="1" id="1" <?php if ($vac == 1) {
                                                                                    echo 'checked="checked"';
                                                                                } ?> name="is_vacunado">
            <label class="form-check-label" for="1">Vacunado</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="1" id="2" <?php if ($desp == 1) {
                                                                                    echo 'checked="checked"';
                                                                                } ?> name="is_desparasitado">
            <label class="form-check-label" for="2">Desparasitado</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="1" id="3" <?php if ($cast == 1) {
                                                                                    echo 'checked="checked"';
                                                                                } ?> name="is_castrado">
            <label class="form-check-label" for="3">Castrado</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="1" id="4" <?php if ($adoptable == 1) {
                                                                                    echo 'checked="checked"';
                                                                                } ?> name="is_adoptable">
            <label class="form-check-label" for="4">Apto para adopción</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="1" id="5" <?php if ($adoptado == 1) {
                                                                                    echo 'checked="checked"';
                                                                                } ?> name="is_adoptado">
            <label class="form-check-label" for="5">Adoptado</label>
        </div><button class="btn btn-info btn-block mt-1" name="update">Actualizar </button>
    </form>
</div>
<!-- FIN ACTUALIZAR DATOS GATO -->

<?php include_once('footer_admin.php'); ?>