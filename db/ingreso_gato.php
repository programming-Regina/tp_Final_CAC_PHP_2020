 <!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

 <?php
    session_start();
    include_once("conexion.php");
    include_once("header_admin.php");
    
    ?>
 <!-- FICHA DE INGRESO NUEVO GATO -->
 <div class="container mt-4" id="ingreso">
     <h3>Ingreso de nuevo gato</h3>
     <div class="col-md-6 float-right">
         <?php if (isset($_SESSION['message'])) {
            ?>

             <div class="alert alert-<?= $_SESSION['message_color']; ?> alert-dismissible fade show" role="alert">
                 <?= $_SESSION['message']; ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>

         <?php session_unset();
            } ?>
     </div>
     <form action="guardar.php" method="POST" enctype="multipart/form-data">
         <div class="form-group">
             <label for="formGroupExampleInput">Nombre</label>
             <input type="text" class="form-control" id="formGroupExampleInput" name="nombre" placeholder="Ingrese el nombre del gato">
         </div>
         <div class="form-group">
             <label for="formGroupExampleInput2">Raza/Color/Señas particulares</label>
             <input type="text" class="form-control" id="formGroupExampleInput2" name="raza" placeholder="Ingrese información que ayude a identificar al gatito">
         </div>
         <div class="form-row">
             <div class="col">
                 <label for="formGroupExampleInput2">Sexo</label>
                 <select class="custom-select mr-sm-2" name="sexo" id="inlineFormCustomSelect">
                     <option selected disabled>Seleccionar</option>
                     <option value="Hembra">Hembra</option>
                     <option value="Macho">Macho</option>
                 </select>
             </div>
             <div class="col">
                 <label for="formGroupExampleInput2">Año de nacimiento</label>
                 <input type="text" class="form-control" id="formGroupExampleInput2" name="agno" placeholder="Año de nacimiento">
             </div>
             <div class="col">
                 <label for="formGroupExampleInput2">Fecha de Ingreso</label>
                 <input type="date" class="form-control" id="formGroupExampleInput2" name="ingreso" placeholder="">
             </div>
             <div class="col">Foto<br>
                 <div class="custom-file mt-2">
                     <input type="file" class="custom-file-input align-bottom" name="foto" id="customFile" value="0.jpg">
                     <label class="custom-file-label" for="customFile">Subir archivo</label>
                 </div>
             </div>
             <div class="col">
                 <label for="formGroupExampleInput2">Cuidador</label>
                 <select class="custom-select mr-sm-2" name="mentor" id="inlineFormCustomSelect">
                     <option selected disabled>Voluntario a cargo</option>

                     <?php
                        $query1 = "SELECT id, apellido, nombre  FROM usuarios";
                        $valores = mysqli_query($conexion, $query1);
                        while ($voluntario = mysqli_fetch_array($valores)) {
                        ?>
                         <option value="<?php echo $voluntario['id']; ?>">

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
             <textarea class="form-control" id="exampleFormControlTextarea1" name="historia" rows="3" placeholder="Ingresá un texto breve indicando las condiciones y circunstancias en que fue rescatado"></textarea>
         </div>
         <div class="form-check form-check-inline">
             <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="vacunado" value="1">
             <label class="form-check-label" for="inlineCheckbox1">Vacunado</label>
         </div>
         <div class="form-check form-check-inline">
             <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="desparasitado" value="1">
             <label class="form-check-label" for="inlineCheckbox2">Desparasitado</label>
         </div>
         <div class="form-check form-check-inline">
             <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="castrado" value="1">
             <label class="form-check-label" for="inlineCheckbox3">Castrado</label>
         </div>
         <div class="form-check form-check-inline">
             <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="adoptable" value="1">
             <label class="form-check-label" for="inlineCheckbox2">Apto para adopción</label>
         </div>
         <div class="form-check form-check-inline">
             <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="adoptado" value="1">
             <label class="form-check-label" for="inlineCheckbox3">Adoptado</label>
         </div>
         <div class="form-group mt-2"><button type="submit" name="agregar" class="btn btn-success btn-block">Guardar</button></div>
     </form>
 </div>
 <!-- FIN FICHA DE INGRESO NUEVO GATO -->
 <?php include_once("footer_admin.php"); ?>