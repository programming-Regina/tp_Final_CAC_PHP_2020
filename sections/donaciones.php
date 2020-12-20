<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php include('header.php') ?>
<script src="../scripts/data_publica.js"></script>

<div class="container-fluid contenido w-100" id="donaciones">
    <div class="container">

        <div class="img mt-1">
            <img src="../img/voluntario.jpg" class="img-fluid rounded mx-auto d-block" alt="Donaciones" width="100%">
        </div>

        <div class="texto text-justify">
            <h4 class="bg-dark text-light p-1 text-center">Donaciones monetarias</h4>

            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne4">
                        <h5 class="mb-0  text-center">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
                                <img src="../img/bank.jpg"> Depósito o transferencia
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne4" class="collapse" aria-labelledby="headingOne4" data-parent="#accordion">
                        <div class="card-body text-center">
                            <p>(Doná el importe que quieras directamente en nuestra cuenta.)</p>
                            
                            <p id="banco"><script>document.getElementById('banco').innerHTML = data_banco;</script></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo4">
                        <h5 class="mb-0 text-center">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                                <img src="../img/mp.jpg"> MercadoPago
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo4" data-parent="#accordion">
                        <div class="card-body text-center">
                            <button class="btn mt-1 btn-info">Donar $100</button>
                            <button class="btn mt-1 btn-info">Donar $500</button>
                            <button class="btn mt-1 btn-info">Donar $1000</button>
                            <button class="btn mt-1 btn-info">Donar $5000</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('pie.php'); ?>
<?php include('footer.php') ?>