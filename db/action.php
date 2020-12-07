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

?>

