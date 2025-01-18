<?php

include "../root.php";

/** ADMIN data:
 * 
 * URL_ACTUAL: Obtiene la ruta del archivo actual
 * INTRO:  des 360.net code manager tree down clasic!
 * 
*/


function verificarDominioYRuta() {

    // Verifica si el dominio y la ruta coinciden con los valores deseados
    $dominioEsperado = "invitation.com.ar";
    $rutaEsperada = "/ingridymarce.php";

    if (URL_ACTUAL === $dominioEsperado && URL_ACTUAL === $rutaEsperada) {
        return true;
    }
    return false;
}

// Llama a la función y muestra el resultado
if (verificarDominioYRuta()) {
    echo "True"; // Coincide
} else {
    echo "False"; // No coincide
}