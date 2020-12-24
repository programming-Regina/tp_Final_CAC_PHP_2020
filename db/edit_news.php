<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php
include_once 'header_admin.php';
include_once 'conexion.php';
include_once 'action.php';
include_once 'upload_foto.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * from difusion WHERE id_nota = $id;";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) {
        die("Falló");
    }
    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);

        $tit = $row['titulo'];
        $desc = $row['descripcion'];
        $foto = $row['foto'];
        $link = $row['link'];
        $news = $row['novedad'];
        $press = $row['prensa'];
        $hidden = $row['obsoleto'];
    }

    if (isset($_POST['modif_titulo'])) {

        $foto = subir_foto("default.jpg", "../img/prensa/", $_FILES['userfile']['size'], $_FILES['userfile']['name']);

        $id = $_GET['id'];
        $tit = asegurar($_POST['titulo']);
        $desc =  asegurar($_POST['descripcion']);
        $link = asegurar($_POST['link']);
        if ($_POST['seccion'] == 'news') {
            $news = 1;
            $press = 0;
        } else {
            $news = 0;
            $press = 1;
        }
        echo $_POST['is_oculto'];
        if ($_POST['is_oculto'] == 1) {
            $hidden = 1;
        } else {
            $hidden = 0;
        }        

        $query = "UPDATE difusion set 
            titulo = '$tit', 
            descripcion = '$desc', 
            foto = '$foto',
            link = '$link',
            novedad = '$news',
            prensa = '$press',
            obsoleto = '$hidden'           
            WHERE id_nota = $id;";
        $resultado = mysqli_query($conexion, $query);
        if (!$resultado) {
            die("Falló");
        } else {

            $_SESSION['message'] = 'El artículo se modificó con éxito';
            $_SESSION['message_color'] = 'info';
            header("Location: admin_news.php");
        }
    }
}

?>

<div class="container" id="modif_articulo">
    <div class="row ">
        <div class="col ">
            <div class=" media mt-2 bg-secondary" id="alta">
                <img src="../img/prensa/default.jpg" width='100px' class="align-self-start mr-3" alt="Gatito con tablet">
                <h3 class="align-self-center text-light">Modificar artículo</h3>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <form action="edit_news.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="a">Titular</label>
                    <input type="text" class="form-control" id="a" name="titulo" value="<?= html_entity_decode($row['titulo']); ?>">
                </div>
                <div class="form-group">
                    <label for="ds">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" id="ds" value="<?= html_entity_decode($desc); ?>">
                </div>
                <div class="form-group">
                    <label for="ds">Link</label>
                    <input type="text" class="form-control" name="link" id="ds" value="<?= html_entity_decode($link); ?>">
                </div>
                <div class="form-row mb-2">
                    <div class="col"><label for="pr">Foto <small>(Prensa: 600px x 180px - Noticias: imágenes cuadradas)</small></label>
                        <div class="custom-file mt-2 align-bottom">
                            <input type="file" class="custom-file-input " id="customFile" name="userfile" value="<?= $foto; ?>">
                            <label class="custom-file-label" for="customFile"><?= $foto; ?></label>
                        </div>
                    </div>

                    <div class="col text-right align-self-end">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="seccion" id="novedad" value="news" <?php if ($news == 1) {
                                                                                                                        echo 'checked="checked"';
                                                                                                                    } ?>>
                            <label class="form-check-label" for="novedad">
                                Publicar en Novedades
                            </label>
                        </div>
                    </div>
                    <div class="col text-right align-self-end">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="seccion" id="prensa" value="press" <?php if ($press == 1) {
                                                                                                                        echo 'checked="checked"';
                                                                                                                    } ?>>
                            <label class="form-check-label" for="prensa">
                                Publicar en Prensa
                            </label>
                        </div>
                    </div>
                    <div class="col text-right align-self-end">
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="checkbox" value="1" id="2" <?php if ($hidden == 1) {
                                                                                                    echo 'checked="checked"';
                                                                                                } ?> name="is_oculto">
                            <label class="form-check-label" for="2">Ocultar</label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success btn-block mt-3" name="modif_titulo">Aceptar modificaciones</button>
            </form>
        </div>
    </div>
</div>

<?php include_once("footer_admin.php"); ?>