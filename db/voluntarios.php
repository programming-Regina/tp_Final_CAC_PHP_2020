<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php
include_once("header_admin.php");
include_once("conexion.php");


$query = "SELECT * FROM usuarios";
$result = mysqli_query($conexion, $query) or die("database error:" . mysqli_error($conexion));
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-8 mr-1 pt-4 pb-4 bg-secondary" id="tabla-vol">
            <h3 class="text-light">Lista de Voluntarios</h3>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr class="bg-info text-light text-center">
                        <th>Nombre</th>
                        <th>Nombre de Usuario</th>
                        <th>Teléfono</th>
                        <th>eMail</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($user = mysqli_fetch_assoc($result)) { ?>
                        <tr class="align-center bg-light" id="<?php echo $user['id']; ?>">
                            <?php $name = html_entity_decode($user['nombre'] . " " . $user['apellido'], ENT_QUOTES, "UTF-8"); ?>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $user['usuario']; ?></td>
                            <td><?php echo $user['celular']; ?></td>
                            <td><a href="mailto:<?php echo $user['email']; ?>"><?php echo $user['email']; ?></a></td>
                            <td class=" text-center">
                                <span> <a href="form_voluntario.php?id=<?php echo $user['id']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-user-edit"></i></a></span>
                                <span> <a href="delete_vol.php?id=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-user-slash"></i></a></span>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="btn btn-warning btn-block btn-sm" onclick="show('new')"><i class="fas fa-user-plus"></i> Agregar voluntario</div>
        </div>

        <div class="col">
            <div class="row">
                <div class="col">
                    <!-- RESULTADO DE LA OPERACION -->
                    <?php if (isset($_SESSION['message'])) {
                    ?>
                        <div class="alert alert-<?= $_SESSION['message_color']; ?> alert-dismissible fade show" role="alert">
                            <?= $_SESSION['message']; ?> <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <?php unset($_SESSION['message']);
                        unset($_SESSION['message_color']);
                    } ?>
                    <!-- fin RESULTADO DE LA OPERACION -->
                </div>
            </div>

            <!-- AGREGAR VOLUNTARIO -->
            <div class="row p-4" id="agregar-vol">
                <div class="col">
                    <form action="agregar_vol.php" method="POST">
                        <h3>Agregar nuevo voluntario</h3>

                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" aria-describedby="nombre" placeholder="Nombres">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" id="apellido" name="apellido" aria-describedby="apellido" placeholder="Apellido">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" id="celular" name="celular" aria-describedby="celular" placeholder="Nro. de celular" value="(011) " pattern="\(011) [0-9]{4}[ -][0-9]{4}">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-sm" id="email" name="email" aria-describedby="email" placeholder="Dirección de eMail">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" id="usuario" name="usuario" aria-describedby="usuario" placeholder="Nombre de usuario">
                            <small id="usuarioHelp" class="form-text  text-dark">Deberá cambiar la clave la primera vez que ingrese al sistema</small>
                        </div>

                        <div class="form-group mt-2"><button type="submit" name="agregar-vol" class="btn btn-danger btn-block">Guardar</button></div>
                    </form>
                </div>
            </div>
            <!-- FIN AGREGAR VOLUNTARIO -->

            <div class="row p-4" id="info-vol">
                <div class="col">
                    <h3> Mencionar a los nuevos voluntarios que:</h3>
                    <ul><li>la clave por defecto es "voluntario" (en minúsculas)</li>
                        <li>advertir que deben cambiar la clave la primera vez que accedan al sistema</li>
                        <li>el encuentro quincenal se realiza el primer y tercer domingo de cada mes</li>
                        <li>son bienvenidos los voluntarios eventuales para tareas de mantenimiento semanal</li>
                        <li>los requisitos para adoptantes citados en nuestra web con excluyentes y sn excepción</li>
                    </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<?php include_once("footer_admin.php"); ?>