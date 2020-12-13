<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: ../sections/access.php");
}

include_once("conexion.php");
include_once("header_admin.php");
include_once("action.php");

$query = "SELECT *, usuarios.id, usuarios.apellido, usuarios.nombre FROM gatos JOIN usuarios ON gatos.mentor = usuarios.id ORDER BY nombre;";
$row = mysqli_query($conexion, $query) or die("database error:" . mysqli_error($conexion));

?>

<div class="container mt-4" id="tabla-gatos">
    <h3>Listado maestro de gatos pensionados en el refugio</h3>

    <div class="col-md-6 float-right">
        <?php if (isset($_SESSION['message'])) {
        ?>
            <div class="alert alert-<?= $_SESSION['message_color']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']; ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <?php unset($_SESSION['message']);
            unset($_SESSION['message_color']);
        } ?>
    </div>
    <div class="container ">
        <table id="tabla-gatos-m" class="table table-sm table-striped small mt-1 table-responsive  ">
            <thead class="thead-dark text-center">
                <tr>
                    <th class="align-middle">Nombre</th>
                    <th class="align-middle">Sexo</th>
                    <th class="align-middle">Raza/Color/Señas particulares</th>
                    <th class="align-middle">Edad</th>
                    <th class="align-middle">Fecha ingreso</th>
                    <th class="align-middle">Vacunado</th>
                    <th class="align-middle">Desparasitado</th>
                    <th class="align-middle">Castrado</th>
                    <th class="align-middle">Cuidador</th>
                    <th class="align-middle">Apto Adopción</th>
                    <th class="align-middle">Adoptado</th>
                    <th class="align-middle">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($gato = mysqli_fetch_assoc($row)) { ?>
                    <tr id="<?php echo $gato['id_gato']; ?>">
                        <td class="align-middle"><?php echo html_entity_decode($gato['nom_gato']); ?></td> <!--  html_entity_decode() y utf8_encode() resuelve acentos -->
                        <td class="text-center align-middle"><?php echo $gato['sexo']; ?></td>
                        <td class="align-middle"><?php echo html_entity_decode($gato['raza_color']); ?></td>
                        <td class="text-center align-middle"><?php echo (date("Y") - $gato['agno_nacim']) . ' años'; ?></td>
                        <td class="text-center align-middle"><?php echo date("d/m/Y", strtotime($gato['fecha_ingreso'])); ?></td>
                        <td class="text-center align-middle"><?php echo es($gato['vacunado']); ?></td>
                        <td class="text-center align-middle"><?php echo es($gato['desparasitado']); ?></td>
                        <td class="text-center align-middle"><?php echo es($gato['castrado']); ?></td>
                        <td class="text-center align-middle"><?php echo html_entity_decode($gato['nombre'] . ' ' . $gato['apellido']); ?></td>
                        <td class="text-center align-middle"><?php echo es($gato['apto_adopc']); ?></td>
                        <td class="text-center align-middle"><?php echo es($gato['adoptado']); ?></td>
                        <td class="text-center align-middle">
                            <h6>
                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gatoModal" data-whatever="<?php echo $gato['id_gato']; ?>">ojito</button> -->
                                <a href="../db/view_gato.php?id=<?php echo $gato['id_gato']; ?>" class="badge badge-info">Ver</a>
                                <a href="../db/edit_gato.php?id=<?php echo $gato['id_gato']; ?>" class="badge badge-warning">Editar</a>
                                <a href="../db/delete_gato.php?id=<?php echo $gato['id_gato']; ?>" class="badge badge-danger">Borrar</a>
                            </h6>
                        </td>
                    </tr>
                <?php }  ?>
            </tbody>
        </table>
        <a class="btn btn-block btn-warning mt-2" href="ingreso_gato.php">Ingresar nuevo gatito</a>
    </div>
</div>

<!-- MODAL FICHA GATO -->
<div class="modal fade" id="gatoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <form method="GET">
                        <input type="text" id="gatoid">
                    </form>
                    Historial
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php
                $id = $_GET['gatoid'];
                echo "Hola " . $id;
                ?>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- FIN MODAL FICHA GATO -->

<?php include_once("footer_admin.php"); ?>