<?php
  include "./root.php";// RUTA, URL_ACTUAL, DOMINIO, PROTOCOLO

  /**
   * Agregar las urls de las invitaciones y sus respectivos templates.
  */
  //url => php template:
  $invitaciones = 
  [
    "?Casamiento-civil-de-Ingrid-&-Marce" => "ingrid-&-marce.php",
  ];

  

  //var_dump(RUTA,"[RUTA]<br>");



  /**
   * Incluir el template correspondiente a la url actual.
  */
  foreach ($invitaciones as $url_invitacion => $template_php) {
    if (RUTA == "/invitation/" . $url_invitacion) {
      include "./" . $template_php;
    } else {
      include "./home-invitations.php";
    }
  }