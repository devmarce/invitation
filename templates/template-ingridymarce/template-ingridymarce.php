<?php
const RUTA_IMG = "./templates/template-ingridymarce/img/";
$video_activo = 1;
//
$controles_audio = 1;
$autoplay_audio = true;
$mute_audio = 0;
?>
<!DOCTYPE html>
<html lang='es'>
  <?php include_once "./templates/template-ingridymarce/componentes/head.php"; ?>
<body>

  <main>
    <div class="container-fluid">
      <?php include_once RUTA_RELATIVA . "componentes/audio.php"; ?>
      <?php include_once RUTA_RELATIVA . "componentes/presentacion-inicial.php"; ?>
      

      <?php
    //include_once "./componentes/btn_audio.php";
    // include_once "";
    // include_once "";
    // include_once "";
    // include_once "";
    // include_once "";
    // include_once "";
    // include_once "";
    ?>
    </div>
  </main>

  <?php include "./templates/template-ingridymarce/componentes/footer.php"; ?>
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>