<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->


<?php include('header.php') ?>

<div class="container-fluid contenido w-100" id="contacto">
    <div class="container">
        <div class="img mt-1">
            <img src="../img/patita.jpg" class="img-fluid rounded mx-auto d-block" alt="Adopta" width="100%">
        </div>
        <div class="texto text-justify">
            <h4 class="bg-dark text-light p-1 text-center">Contacto</h4>
            <form class="mt-3 needs-validation" name="frmContacto" method="post" action="sendbymail.php" novalidate>
                <h4> Por favor completa el formulario</h4>
                <div class="container formu d-flex mt-2 w-100">
                    <div class="col50l">
                        <div class="form-group">
                            <label>Nombre completo (obligatorio)</label>
                            <input type="text" class="form-control" name="nomcomplet" id="exampleInputName2" aria-describedby="nameHelp" required />
                            <div class="invalid-feedback">
                                Necesitamos saber tu nombre.
                            </div>
                        </div>
                    </div>
                    <div class="col50r">
                        <div class="form-group">
                            <label>Dirección de eMail (obligatorio)</label>
                            <input type="email" name="emailcomplet" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" required>
                            <div class="invalid-feedback">
                                Necesitamos tu dirección de eMail para responderte.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container formu d-flex">
                    <div class="col50l">
                        <div class="form-group">
                            <label>Teléfono celular (obligatorio)</label>
                            <input type="text" name="celcomplet" class="form-control" id="celular2" name="celular2" aria-describedby="celular2" placeholder="(011)" required>
                            <div class="invalid-feedback">
                                Necesitamos tener tu teléfono para contactarte.
                            </div>
                        </div>
                    </div>
                    <div class="col50r">
                        <div class="form-group">
                            <label>Motivo del contacto (obligatorio)</label>
                            <select id="motivo" name="motivo" class="form-control" required>
                                <option value="" disabled selected>Seleccioná una opción</option>
                                <option>Adoptar</option>
                                <option>Transitar</option>
                                <option>Donar</option>
                                <option>Colaborar con traslados</option>
                                <option>Ser voluntario</option>
                                <option>Otras consultas</option>
                                <option>Reportar un fallo en la Web</option>
                            </select>
                            <div class="invalid-feedback">
                                Necesitamos saber el motivo para derivar tu inquietud a la persona indicada más rápidamente .
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="candidate" class="form-check-input" id="exampleCheck1" value="0">
                    <label class="form-check-label" for="exampleCheck1">Deseo adoptar y cumplo con los <a href="requisitos.php">requisitos</a></label>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="comments" id="mensaje" rows="3" placeholder="Dejanos tu mensaje"></textarea>
                </div>
                <div class="form-group mt-2">
                    <input type="submit" name="submit-contact" class="btn btn-danger btn-block" value="Enviar"></input></div>
            </form>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>