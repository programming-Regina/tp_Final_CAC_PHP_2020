<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php

# Función que recibe un booleano y devuelve Sí/No
function es($arg)
{
    if ($arg == 1) {
        $retorno = 'Si';
    } else {
        $retorno = 'No';
    }
    return $retorno;
}

function asegurar($str_recibido)
{
    # ESCAPA (= agrega '\' antes de) LOS CARACTERES ', ", \ y de NULL
    $str_recibido = addslashes($str_recibido);
    # BORRA BACKASLASHES
    $str_recibido = stripslashes($str_recibido);
    # BORRA CARACTERES SOSPECHOSOS
    $str_recibido = str_replace("/", "", $str_recibido);
    $str_recibido = str_replace("'", "", $str_recibido);
    $str_recibido = str_replace(";", "", $str_recibido);
    $str_recibido = str_replace("<", "", $str_recibido);
    $str_recibido = str_replace(">", "", $str_recibido);
    $str_recibido = str_replace(':', "", $str_recibido);
    $str_recibido = str_replace('"', "", $str_recibido);
    return $str_recibido;
}


function monetiza($monto)
{
    $fmt = new NumberFormatter('es_AR', NumberFormatter::CURRENCY);
    echo $fmt->format($monto);
}

?>