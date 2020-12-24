<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php
include_once 'header_admin.php';
include_once "conexion.php";
include_once "action.php";
include_once "upload_foto.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * from tienda WHERE id_art = $id;";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) {
        die("Falló");
    }
    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $art = $row['articulo'];
        $desc = $row['descripcion'];
        $foto = $row['foto_art'];
        $precio = $row['precio'];
        $contacto = $row['contacto'];
        $stock = $row['en_stock'];
    }

    if (isset($_POST['update'])) {

        $foto = subir_foto("default.jpg", "../img/tienda/", $_FILES['userfile']['size'], $_FILES['userfile']['name']);

        $id = $_GET['id'];
        $art = asegurar($_POST['articulo']);
        $desc =  asegurar($_POST['descripcion']);
        $precio = $_POST['precio'];
        $contacto = asegurar($_POST['contacto']);
        if ($_POST['stock'] == 1) {
            $en_stock = $_POST['stock'];
        } else {
            $en_stock = 0;
        }
        $query = "UPDATE tienda set 
            articulo = '$art', 
            descripcion = '$desc', 
            foto_art = '$foto',
            precio = '$precio',
            contacto = '$contacto',
            en_stock = '$en_stock'           
            WHERE id_art = $id;";
        $resultado = mysqli_query($conexion, $query);
        if (!$resultado) {
            die("Falló");
        } else {

            $_SESSION['message'] = 'El artículo se modificó con éxito';
            $_SESSION['message_color'] = 'info';
            header("Location: admin_tienda.php");
        }
    }
}

?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class=" media mt-4" id="actualizacion">
                <img src="../img/tienda/<?php echo $foto; ?> " width='100px' class="align-self-start mr-3" alt="<?php echo html_entity_decode($art); ?>">
                <h3>Actualizar datos del artículo</h3>

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <form action="edit_tienda.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="a">Artículo</label>
                    <input type="text" class="form-control" id="a" name="articulo" value="<?php echo html_entity_decode($art); ?>">
                </div>
                <div class="form-group">
                    <label for="ds">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" id="ds" value="<?php echo html_entity_decode($desc); ?>">
                </div>
                <div class="form-row mb-2">
                    <div class="col"><label for="pr">Foto</label>
                        <div class="custom-file mt-2 align-bottom">
                            <input type="file" class="custom-file-input " id="customFile" name="userfile" value="<?php echo $foto; ?>">
                            <label class="custom-file-label" for="customFile"><?php echo $foto; ?></label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="custom-file mt-2 align-bottom">
                            <label for="pr">Precio</label>
                            <input type="number" class="form-control" name="precio" id="pr" value="<?php echo html_entity_decode($precio); ?>">
                        </div>
                    </div>
                    <div class="col text-right align-self-end">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="1" id="2" <?php if ($stock == 1) {
                                                                                                    echo 'checked="checked"';
                                                                                                } ?> name="stock">
                            <label class="form-check-label" for="2">Stock disponible / Publicar</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="ct">Contacto</label>
                    <input type="text" class="form-control" name="contacto" id="ct" value="<?php echo html_entity_decode($contacto); ?>">
                </div>
                <button class="btn btn-info btn-block mt-1" name="update">Actualizar </button>
            </form>
        </div>
    </div>
</div>

<?php include_once("footer_admin.php"); ?>