<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php
include_once('header_admin.php');
include_once("conexion.php");
include_once("action.php");

if (!isset($_SESSION['username'])) {
    header("location: ../sections/access.php");
}
$query = "SELECT * FROM tienda;";
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
<h3>Administración de la tienda</h3>
    <table  class="table table-sm small">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">Artículo</th>
                <th class="text-center">Descripción</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Stock</th>
                <th class="text-center">Contacto</th>
                <th class="text-center">Acción</th>
            </tr>
        </thead>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>


            <tr>
                <td><?php echo $row['articulo']; ?></td>
                <td><?php echo $row['descripcion']; ?></td>
                <td class="float-right"><?php echo monetiza($row['precio']); ?></td>
                <td class="text-center"><?php echo es($row['en_stock']); ?></td>
                <td><?php echo $row['contacto']; ?></td>
                <td>
                    <a href="edit_tienda.php?id=<?php echo $row['id_art']; ?>" class="badge badge-warning">Ver/Modificar</a>
                    <a href="no_stock.php?id=<?php echo $row['id_art']; ?>" class="badge badge-danger"> Sin Stock</a>
                </td>
            </tr>

        <?php } ?>

    </table>
    <button class="btn btn-block btn-success" onclick="activar('agregar_articulo','ver_lista_tienda')">Poner nuevo item a la venta</button></div>

    <div class="container" id="agregar_articulo">
        <div class="row ">
            <div class="col ">
                <div class=" media mt-2 bg-secondary" id="alta">
                    <img src="../img/tienda/default.jpg" width='100px' class="align-self-start mr-3" alt="Gatito con pelota">
                    <h3 class="align-self-center text-light">Poner artículo en venta</h3>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <form action="agregar_item.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="a">Artículo</label>
                        <input type="text" class="form-control" id="a" name="articulo" value="" placeholder="Ingresar dos o tres palabras">
                    </div>
                    <div class="form-group">
                        <label for="ds">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" id="ds" value="" placeholder="Ingresar una descripción breve">
                    </div>
                    <div class="form-row mb-2">
                        <div class="col"><label for="pr">Foto</label>
                            <div class="custom-file mt-2 align-bottom">
                                <input type="file" class="custom-file-input " id="customFile" name="userfile" value="default.jpg">
                                <label class="custom-file-label" for="customFile">default.jpg</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-file mt-2 align-bottom">
                                <label for="pr">Precio</label>
                                <input type="number" class="form-control" name="precio" id="pr" value="">
                            </div>
                        </div>
                        <div class="col text-right align-self-end">
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="checkbox" value="1" id="2" checked="checked" name="stock">
                                <label class="form-check-label" for="2">Stock disponible / Publicar</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ct">Contacto</label>
                        <input type="text" class="form-control" name="contacto" id="ct" value="" placeholder="Ingresar al menos nombre y teléfono o mail del voluntario">
                    </div>
                    <button class="btn btn-success btn-block mt-1" name="alta_item">Dar de alta</button>
                </form>
            </div>
        </div>
    </div>

</div>
<script>
    function activar(show, hide) {
        console.log('hola');
        document.getElementById(show).style.display = "block";
        document.getElementById(hide).style.display = "none";
    }
</script>

<?php include_once("footer_admin.php"); ?>