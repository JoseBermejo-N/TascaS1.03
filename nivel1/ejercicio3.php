<?php

//crear funcion que pasados un array de strings y una letra compruebe con true o false si existe esa letra en el array de strings.
function encontrarLetra(array $palabras,  string $letra): bool {
   
//recorremos el array de strings y comprobamos si existe la letra en cada elemento del array con la funcion str_contains()
// que devuelve true si la letra existe en el string y false si no existe. En este caso negamos la funcion con ! para que
// si no existe la letra en el string devuelva false y si existe seguira comprobando hasta salir del bucle y devolver true al final de la funcion.


    foreach ($palabras as $palabra) {
        if (!str_contains($palabra, $letra)) {

            return false;
        }  
    }
    return true;

}

//comprobamos la funcion con un array de strings y una letra
$palabras = ["arbol", "balon", "calle", "platano"];
$letra = "p";

if (encontrarLetra($palabras, $letra)) {
    echo "La letra " . $letra . " existe en todos los elementos del array de palabras.\n";
} else {
    echo "La letra " . $letra . " no existe en todos los elementos del array de palabras.\n";
}

//imprimimos el array de palabras para comprobarlo visualmente
print_r($palabras);

