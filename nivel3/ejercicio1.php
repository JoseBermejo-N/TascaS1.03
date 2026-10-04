<?php

//1- Devolver el cubo de cada valor de un array de números enteros. usando array_map().

//definimos un array
$numeros = array(1, 2, 3, 4, 5);


//creamos funcion que devuelve el cubo de un número

function cubo(int $numero): int {
    return $numero * $numero * $numero;
}

//usamos array_map() para aplicar la función cubo a cada elemento del array $numeros

$cubos = array_map('cubo', $numeros);


//imprimimos el resultado.
foreach ($numeros as $indice => $numero) {
    $cubo = $cubos[$indice];
    echo "El cubo de " . $numero . " es: " . $cubo . "\n";
    
}