<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->


<?php
include_once("conexion.php");
include_once("header_admin.php");
include_once("action.php");

?>

<div class="container mt-4">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" id="adopcion-tab" data-toggle="tab" href="#adopcion" role="tab" aria-controls="adopcion" aria-selected="true">Listos para Adopción</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="castrar-tab" data-toggle="tab" href="#castrar" role="tab" aria-controls="castrar" aria-selected="true">Castrar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="vacunar-tab" data-toggle="tab" href="#vacunar" role="tab" aria-controls="vacunar" aria-selected="true">Vacunar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="desparasitar-tab" data-toggle="tab" href="#desparasitar" role="tab" aria-controls="desparasitar" aria-selected="true">Desparasitar</a>
        </li>
    </ul>

    <div class="tab-content m-4 " id="myTabContent">
        <div class="tab-pane fade show active" id="adopcion" role="tabpanel" aria-labelledby="adopcion-tab">
            <table class="table table-bordered">
                <thead class="bg-info text-light">
                    <th scope="col">Gatos listos para adopción</th>
                    <th scope="col" class="text-center">Cuidador</th>
                </thead>

                <?php
                $query = "SELECT id_gato, nom_gato, apto_adopc, adoptado, usuarios.id, usuarios.apellido, usuarios.nombre FROM gatos JOIN usuarios ON gatos.mentor = usuarios.id;";
                $row = mysqli_query($conexion, $query)  or die("database error:" . mysqli_error($conexion));
                while ($gato = mysqli_fetch_assoc($row)) {
                    if ($gato['apto_adopc'] && !$gato['adoptado']) { ?>
                        <tr>
                            <td>
                                <?php echo html_entity_decode($gato['nom_gato']); ?>
                            </td>
                            <td>
                                <?php echo utf8_encode($gato['nombre'] . " " . $gato['apellido']); ?>
                            </td>
                        </tr>
                <?php }
                }
                ?>
            </table>
        </div>
        <div class="tab-pane fade" id="castrar" role="tabpanel" aria-labelledby="castrar-tab">
            <table class="table table-bordered">
                <thead class="bg-info text-light">
                    <th scope="col">Gatos sin castrar</th>
                    <th scope="col" class="text-center">Cuidador</th>
                    <th scope="col" class="text-center">Contacto</th>
                </thead>

                <?php
                $query = "SELECT id_gato, nom_gato, castrado, usuarios.id, usuarios.apellido, usuarios.nombre, usuarios.email FROM gatos JOIN usuarios ON gatos.mentor = usuarios.id;";
                $row = mysqli_query($conexion, $query)  or die("database error:" . mysqli_error($conexion));

                while ($gato = mysqli_fetch_assoc($row)) {
                    if (!$gato['castrado']) { ?>
                        <tr>
                            <td>
                                <?php echo html_entity_decode($gato['nom_gato']); ?>
                            </td>
                            <td>
                                <?php echo utf8_encode($gato['nombre'] . " " . $gato['apellido']); ?>
                            </td>
                            <td>
                                <?php echo '<a href="mailto:' . $gato['email'] . '"><i class="far fa-paper-plane"></i> ' . html_entity_decode($gato['email']) . '</a>'; ?>
                            </td>
                        </tr>
                <?php }
                }
                ?>

            </table>
        </div>
        <div class="tab-pane fade" id="vacunar" role="tabpanel" aria-labelledby="vacunar-tab">
            <table class="table table-bordered">
                <thead class="bg-info text-light">
                    <th scope="col">Gatos que necesitan vacunas</th>
                    <th scope="col" class="text-center">Cuidador</th>
                    <th scope="col" class="text-center">Contacto</th>
                </thead>
                <?php
                $query = "SELECT id_gato, nom_gato, vacunado, usuarios.id, usuarios.apellido, usuarios.nombre, usuarios.email FROM gatos JOIN usuarios ON gatos.mentor = usuarios.id;";
                $row = mysqli_query($conexion, $query)  or die("database error:" . mysqli_error($conexion));
                while ($gato = mysqli_fetch_assoc($row)) {
                    if (!$gato['vacunado']) { ?>
                        <tr>
                            <td>
                                <?php echo html_entity_decode($gato['nom_gato']); ?>
                            </td>
                            <td>
                                <?php echo utf8_encode($gato['nombre'] . " " . $gato['apellido']); ?>
                            </td>
                            <td>
                                <?php echo '<a href="mailto:' . $gato['email'] . '"><i class="far fa-paper-plane"></i> ' . html_entity_decode($gato['email']) . '</a>'; ?>
                            </td>
                        </tr>
                <?php }
                }
                ?>

            </table>
        </div>
        <div class="tab-pane fade" id="desparasitar" role="tabpanel" aria-labelledby="desparasitar-tab">
            <table class="table table-bordered">
                <thead class="bg-info text-light">
                    <th scope="col">Gatos que necesitar desparasitación</th>
                    <th scope="col" class="text-center">Cuidador</th>
                    <th scope="col" class="text-center">Contacto</th>
                </thead>
                <?php
                $query = "SELECT id_gato, nom_gato, desparasitado, usuarios.id, usuarios.apellido, usuarios.nombre, usuarios.email FROM gatos JOIN usuarios ON gatos.mentor = usuarios.id;";
                $row = mysqli_query($conexion, $query)  or die("database error:" . mysqli_error($conexion));
                while ($gato = mysqli_fetch_assoc($row)) {
                    if (!$gato['desparasitado']) { ?>
                        <tr>
                            <td>
                                <?php echo html_entity_decode($gato['nom_gato']); ?>
                            </td>
                            <td>
                                <?php echo utf8_encode($gato['nombre'] . " " . $gato['apellido']); ?>
                            </td>
                            <td>
                                <?php echo '<a href="mailto:' . $gato['email'] . '"><i class="far fa-paper-plane"></i> ' . html_entity_decode($gato['email']) . '</a>'; ?>
                            </td>
                        </tr>
                <?php }
                }
                ?>
            </table>
        </div>
    </div>
</div>

<?php
include_once("footer_admin.php");
?>