<?php


// 1. Declaramos el array asociativo con los alumnos y sus notas
$notasAlumnos = array(
    "Luis" => array(8, 5, 4, 7, 3),
    "Pepa" => array(9, 8, 7, 6, 5),
    "Pedro" => array(7, 6, 5, 4, 3),
    "Ana" => array(10, 9, 8, 7, 6),
    "Alex" => array(6, 5, 4, 3, 2)
);

//Creamos funcion para validar que las notas estén entre 0 y 10
function validarNotasClase(array $alumnosYNotas): bool {
    // Recorremos el array de alumnos y sus notas, donde $alumno es la clave y $notas es el array de notas
    foreach ($alumnosYNotas as $alumno => $notas) {
        // Recorremos el array de notas del alumno actual
        foreach ($notas as $nota) {
            // Si detecta una sola nota fuera de rango, avisa del error y frena el programa
            if ($nota < 0 || $nota > 10) {
                echo "Error: Las notas deben estar entre 0 y 10.\n";
                return false; 
            }
        }
    }
    return true;
}


// 2. Definimos la función que calcula y muestra las medias
function calcularMediasClase(array $alumnosYNotas) {
    
    $sumaMediasClase = 0;
    $totalAlumnos = 0;

    // Recorremos el array de alumnos y sus notas
    foreach ($alumnosYNotas as $alumno => $notas) {
        //para cada alumno, inicializamos la suma de sus notas y un contador de notas
        $sumaNotasAlumno = 0;
        $contadorNotas = 0;
        
        // Sumamos las notas del alumno actual y acumulamoa $contadorNotas para calcular la media
        foreach ($notas as $nota) {
            $sumaNotasAlumno += $nota;
            $contadorNotas++;
        }
        
        // Calculamos la media del alumno 
        $mediaAlumno = $sumaNotasAlumno / $contadorNotas;
        
        // Mostramos el resultado individual 

        echo "Alumn@: " . $alumno . " - Media: " . $mediaAlumno . "\n";
        
        // Acumulamos la media de este alumno para calcular luego la de la clase
        $sumaMediasClase += $mediaAlumno;
        $totalAlumnos++;
    }

    // Calculamos la nota media de toda la clase
    $mediaTotalClase = $sumaMediasClase / $totalAlumnos;

    echo "La media general de la clase es: " . $mediaTotalClase . "\n";
}

// Pasamos el control de que las notas esten entre 0 y 10 
//y ejecutamos la función de calcular medias si todo es correcto
if (validarNotasClase($notasAlumnos)) {
    calcularMediasClase($notasAlumnos);
}
