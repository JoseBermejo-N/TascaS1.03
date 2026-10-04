<?php


//1-Dado un array de enteros, devolver array de numeros primos. usando array_reduce().

//definimos array de enteros

$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

print_r($numeros); //imprimimos el array original   

//función para verificar si un número es primo

function esPrimo(int $numero): bool {
    // Los números menores o iguales a 1 no son primos
    if ($numero <= 1) {
        return false;
    }
    
    $divisor = 2;

    // Recorremos desde el 2 hasta el número anterior al evaluado
    while ($divisor < $numero) {
        // Si el residuo es 0, significa que tiene otro divisor
        if ($numero % $divisor === 0) {
            return false; // Terminamos la función inmediatamente, no es primo
        }
        $divisor++;
    }

    // Si el bucle termina sin encontrar divisores, el número es primo
    return true;
}

//creamos funcion para sumar numeros solo si son primos, para usarla como callback en array_reduce()

function sumarPrimos(int $acumulador, int $numeroActual): int {
    if (esPrimo($numeroActual)) {
        $acumulador = $acumulador + $numeroActual; // Agregamos el número primo al resultado
    }
    return $acumulador; // Devolvemos el resultado acumulado
}

//usamos array_reduce() para calcular la suma de los números primos del array $numeros.
$sumaPrimos = array_reduce($numeros, 'sumarPrimos', 0); 

//imprimimos el resultado
echo "La suma de los números primos es: " . $sumaPrimos . "\n";

var_dump (array_reduce($numeros, 'sumarPrimos', 0)); //imprimimos el resultado de array_reduce() para ver el valor final

