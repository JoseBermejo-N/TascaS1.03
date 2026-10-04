<?php


//crear array asocitavo con informacion de uno mismo.

$infoPersonal = array (
    "nombre" => "Jose",
    "edad" => 46,
    "email" => "meloinvento@gmail.com",
    "comida favorita" => "Txuletón"
);

//mostramos array por pantalla
print_r($infoPersonal);

//Para mostar la informacion de una forma más "limpia" podemos recorrer el array 
//con un bucle foreach y mostrar la clave y el valor de cada elemento.

foreach ($infoPersonal as $clave => $valor) {
    echo $clave . ": " . $valor . "\n";
}