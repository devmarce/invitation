<?php

include_once "./root.php";

/**
 * @param $const_ruta: constante que define la ruta del directorio de las imagenes.
 * @param $img_name: nombre de la imagen con la extension.
 * @return Print de la ruta completa.
*/
function define_ruta_img ($cont_ruta, $img_name) 
{
    if (!empty($cont_ruta))
    {
        echo $cont_ruta . $img_name;
    }
}