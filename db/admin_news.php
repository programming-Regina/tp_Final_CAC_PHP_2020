<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php
include_once "header_admin.php";
include_once "conexion.php";
include_once "action.php";

if (!isset($_SESSION['username'])) {
    header("location: ../sections/access.php");
}
$query = "SELECT * FROM difusion;";
$result = mysqli_query($conexion, $query) or die("database error:" . mysqli_error($conexion));
?>

<div class="container p-5">


    <div class="col-md-6 float-right">
        <?php if (isset($_SESSION['message'])) {
        ?>
            <div class="alert alert-<?= $_SESSION['message_color']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']; ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <?php
            unset($_SESSION['message']);
            unset($_SESSION['message_color']);
        } ?>
    </div>
    <div id="ver_lista_tienda">
        <h3>Administración de Sección Novedades<br>y Notas de Prensa y Difusión</h3>
        <table class="table table-sm small">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Título</th>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Link</th>
                    <th class="text-center">Fecha</th>
                    <th class="text-center">Novedad</th>
                    <th class="text-center">Prensa</th>
                    <th class="text-center">Oculto</th>
                    <th class="text-center">Acción</th>
                </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>


                <tr>
                    <td><?php echo html_entity_decode($row['titulo']); ?></td>
                    <td><?php echo html_entity_decode($row['descripcion']); ?></td>
                    <td><?php echo html_entity_decode($row['link']); ?></td>
                    <td class="text-center"><?php echo $row['fecha']; ?></td>
                    <td class="text-center"><?php echo es($row['novedad']); ?></td>
                    <td class="text-center"><?php echo es($row['prensa']); ?></td>
                    <td class="text-center"><?php echo es($row['obsoleto']); ?></td>
                    <td>
                        <a href="edit_news.php?id=<?php echo $row['id_nota']; ?>" class="badge badge-warning">Ver/Modificar</a>
                        <a href="ocultar.php?id=<?php echo $row['id_nota']; ?>" class="badge badge-danger"> Ocultar</a>
                    </td>
                </tr>

            <?php } ?>

        </table>
        <button class="btn btn-block btn-success" onclick="activar('agregar_articulo','ver_lista_tienda')">Publicar nuevo artículo</button>
    </div>

    <div class="container" id="agregar_articulo">
        <div class="row ">
            <div class="col ">
                <div class=" media mt-2 bg-secondary" id="alta">
                    <img src="../img/tienda/default.jpg" width='100px' class="align-self-start mr-3" alt="Gatito con pelota">
                    <h3 class="align-self-center text-light">Publicar nuevo artículo</h3>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <form action="agregar_news.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="a">Titular</label>
                        <input type="text" class="form-control" id="a" name="titulo" value="" placeholder="Ingresar titular de la publicación">
                    </div>
                    <div class="form-group">
                        <label for="ds">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" id="ds" value="" placeholder="Ingresar una descripción breve">
                    </div>
                    <div class="form-group">
                        <label for="ds">Link</label>
                        <input type="text" class="form-control" name="link" id="ds" value="" placeholder="Ingresar link a la fuente (si corresponde)">
                    </div>
                    <div class="form-row mb-2">
                        <div class="col"><label for="pr">Foto <small>(Prensa: 600px x 180px - Noticias: imágenes cuadradas)</small></label>
                            <div class="custom-file mt-2 align-bottom">
                                <input type="file" class="custom-file-input " id="customFile" name="userfile" value="default.jpg">
                                <label class="custom-file-label" for="customFile">default.jpg</label>
                            </div>
                        </div>

                        <div class="col text-right align-self-end">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="seccion" id="novedad" value="news" checked>
                                <label class="form-check-label" for="novedad">
                                    Publicar en Novedades
                                </label>
                            </div>
                        </div>
                        <div class="col text-right align-self-end">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="seccion" id="prensa" value="press">
                                <label class="form-check-label" for="prensa">
                                    Publicar en Prensa
                                </label>
                            </div>
                        </div>
                        <div class="col text-right align-self-end">
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="checkbox" value="1" id="2" name="oculto">
                                <label class="form-check-label" for="2">Ocultar</label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success btn-block mt-3" name="alta_titulo">Dar de alta</button>
                </form>
            </div>
        </div>
    </div>

</div>
<script>
    function activar(show, hide) {     
        document.getElementById(show).style.display = "block";
        document.getElementById(hide).style.display = "none";
    }
</script>

<?php include_once("footer_admin.php"); ?>