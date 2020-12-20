/* 
TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
DICIEMBRE 2020
por REGINA NOEMÍ MOLARES 
eMail: programming.regina@gmail.com 
*/

var data_banco = "Banco XXXX<br>Asociación Civil Patitas Solidarias<br>Cuenta Corriente en pesos Nº xxxxx/x<br>Sucursal Nº: xxxxx – CABA<br>CBU: xxxxxxxxxxxxxxxxxx<br>CUIT: xx-xxxxxxxx-3x";
var data_contacto = "<h5 class='text-uppercase'>PATITAS SOLIDARIAS ASOCIACIÓN CIVIL</h5><p>Asociación civil sin fines de lucro, dedicada al rescate y protección de gatos comunitarios.</p><small>Nombre de la calle 1235, CABA, Buenos Aires<br>Teléfono: (011) 4555-xxxx</small>"

function toasta(what) {
    $(what).toast('show')
}