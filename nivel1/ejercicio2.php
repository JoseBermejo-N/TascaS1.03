<?php

//creamos array de 6 elementos
$coches = [ "BMW", "Mercedes", "Audi", "Toyota", "Ford", "Seat"];

//mostramos medida del array
echo "El array tiene " . count($coches) . " elementos.\n";
print_r ($coches);

//eliminamos un elemento y comprobamos que se ha eliminado ese indice dentro del array
unset($coches[3]);
echo "Después de eliminar el elemento en el índice 3:\n";
print_r ($coches);

//normalizamos indices del array y mostramos por pantalla el tamaño del array y sus elementos.
$coches = array_values($coches);
echo "Después de normalizar los índices:\n";
echo "El array tiene " . count($coches) . " elementos.\n";
print_r ($coches);
