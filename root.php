<?php

/** ROOT data:
 * 
 * URL_ACTUAL:  Obtiene la ruta del archivo actual
 * RUTA:        contiene "invitation/..."
 * DOMINIO:     "invitation.com.ar"
 * PROTOCOLO:   http/s
 *  
*/

define("PROTOCOLO", (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://"); // "http://" o "https://"
define("DOMINIO", $_SERVER['HTTP_HOST']);// "localhost" o "invitation.com.ar"
define("RUTA", $_SERVER['REQUEST_URI']);// "/invitation/ingrid&marce.php"
define("URL_ACTUAL", PROTOCOLO . DOMINIO . RUTA);// "http://localhost/invitation/ingrid&marce.php"


?>