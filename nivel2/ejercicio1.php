<?php

//creamos 2 arrays de listas de invitados
$invitados1 = array("Juan", "Pedro", "Maria", "Luis", "Ana", "Carlos", "Lucia" );
$invitados2 = array("Ana", "Carlos", "Pedro", "Diego", "Jose", "Lucia", "Marta");

//1-lista de invitados en común

$invitadosComunes = [];

//comparamos los arrays de invitados con bucles foreach anidados
//y si coincide lo añadimimos al array de invitados comunes

foreach ($invitados1 as $invitado1) {
    foreach ($invitados2 as $invitado2) {
        if ($invitado1 == $invitado2) {
            $invitadosComunes[] = $invitado1;
        }
    }
}

//mostramos los invitados en común
echo "Los invitados en común son: " ;
foreach ($invitadosComunes as $invitado) {
    echo $invitado . " ";
}

/*otra forma de hacerlo es usando la función array_intersect() 
que devuelve un array con los valores comunes de dos o más arrays
visualmente es más limpio que los bucles foreach anidados*/

$invitadosComunes2 = array_intersect($invitados1, $invitados2);

echo "\nLos invitados en común son: " ;
foreach ($invitadosComunes2 as  $invitado) {    
    echo $invitado . " ";
}

//2-creamos array para mostrar los invitados de las 2 listas sin repetir

//inicializamos el array con los invitados de la primera lista
$todosLosInvitados = $invitados1;

//recorremos la segunda lista de invitados y comprobamos si ya existe en el array de todos los invitados
foreach ($invitados2 as $invitado2) {

    $existe = false; //con esta variable controlamos si el invitado ya existe en el array de todos los invitados

    foreach ($todosLosInvitados as $invitado) {
        if ($invitado2 == $invitado) {
            $existe = true;
            break; //si existe, salimos del bucle
        }
    }
    /*si no existe, lo añadimos al array de todos los invitados
    como inicializamos la variable en false, al negarla (!$existe) la condición se cumple (true)
    y añadimos el invitado al array*/
    if (!$existe) {
        $todosLosInvitados[] = $invitado2;
    }
}

echo "\nTodos los invitados sin repetir son: " ;
foreach ($todosLosInvitados as $invitado) {
    echo $invitado . " ";
}  


/*otra forma de hacerlo con codigo mas corto y limpio es usando la función array_merge()
para unir los arrays y luego array_unique() para eliminar los duplicados*/

$todosLosInvitados2 = array_unique(array_merge($invitados1, $invitados2));

echo "\nTodos los invitados sin repetir son: " ;
foreach ($todosLosInvitados2 as $invitado) {
    echo $invitado . " ";
}

//3-lista de invitados exclusivos de la primera lista

//tambien se puede hacer como la parte 2 del ejercicio 
//con bucles foreach anidados 
//inicializamos el array con los invitados de la primera lista
$invitadosExclusivos1 = [];

//recorremos la primera lista
foreach ($invitados1 as $invitado1) {

    $existe = false; //asumimos que el invitado no existe en la segunda lista
    
    //byscamos al invitado de la primera lista en la segunda lista
    foreach ($invitados2 as $invitado2) {
        if ($invitado1 == $invitado2) {
            $existe = true;
            break; //si existe, salimos del bucle, no es exclusivo.
        }
    }
    /*si la $existe sigue siendo false, significa que el invitado no está en la segunda lista
    y añadimos el invitado al array*/
    if (!$existe) {
        $invitadosExclusivos1[] = $invitado1;
    }
}

echo "\nInvitados exclusivos de la primera lista son: " ;
foreach ($invitadosExclusivos1 as $invitado) {
    echo $invitado . " ";
}  

/*otra forma mas eficiente de hacerlo es usando la función array_diff() que devuelve un array con los valores de un array(pasado en el primer parametro)
que no están en otro array (pasado en el segundo parametro)
en este caso, los invitados de la primera lista que no están en la segunda.*/

$invitadosExclusivos1 = array_diff($invitados1, $invitados2);
echo "\nInvitados exclusivos de la primera lista son: " ;
foreach ($invitadosExclusivos1 as $invitado) {
    echo $invitado . " ";
}

//4-lista de invitados exclusivos de la segunda lista
//lo mismo que antes, pero ahora con los invitados de la segunda lista que no están en la primera.

$invitadosExclusivos2 = array_diff($invitados2, $invitados1);
echo "\nInvitados exclusivos de la segunda lista son: " ;
foreach ($invitadosExclusivos2 as $invitado) {
    echo $invitado . " ";
}

