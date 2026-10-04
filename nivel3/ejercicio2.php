<?php

//1-Devolver array de string que solo tengan un numero par de caracteres. usando array_filter().

//definimos un array de strings
$strings = array("hola", "perro", "coche", "manzana", "amarrilo", "feliz", "casa" );

//creamos función que verifica si un string tiene un número par de caracteres
function esPar(string $string): bool {
    //strlen devuelve la longitud de un string
    $numeroDeCaracteres = strlen($string);

    if ($numeroDeCaracteres % 2 === 0) {
        return true;
    } else {
        return false;
    }
}
  

//usamos array_filter() nos devuelve un array con los elementos que cumplen la condición de la función esPar
$palabrasPares = array_filter($strings, 'esPar');

//imprimimos el resultado
echo "Palabras pares:\n";
foreach ($palabrasPares as $palabra) {
    echo $palabra . "\n";
}

