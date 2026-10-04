<?php

//creamos array vacio 
$arrayNumeros = [ ];

//añadimeos elementos al array
$arrayNumeros[] = 2;
$arrayNumeros[] = 33;
$arrayNumeros[] = 45;
$arrayNumeros[] = 17;
$arrayNumeros[] = 9;

//recorremos el array y mostramos los elementos uno a uno.
foreach ($arrayNumeros as $numero) {
    echo $numero . "\n";
}
