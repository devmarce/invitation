<?php
const RUTA_IMG = "./templates/template-ingridymarce/img/";
$video_activo = 1;
//
// Configuración del audio
$nombre_del_audio = "christina-perri.mp3";//"christina-perri.mp3";
$controles_audio = 1;
$autoplay_audio = 1;
$mute_audio = 0;

// Ubicación
$ubicacion_registro = "https://www.google.com/maps/place/Rep%C3%BAblica+de+Portugal+2787,+B1765JCQ+Isidro+Casanova,+Provincia+de+Buenos+Aires/@-34.7006056,-58.5870446,17z/data=!3m1!4b1!4m6!3m5!1s0x95bcc668c62ce1fd:0x9d303ebaa5019608!8m2!3d-34.7006056!4d-58.5870446!16s%2Fg%2F11tg0_v9d3?entry=ttu&g_ep=EgoyMDI1MDEyOS4xIKXMDSoASAFQAw%3D%3D";
?>
<!DOCTYPE html>
<html lang='es'>
<?php include_once "./templates/template-ingridymarce/componentes/head.php"; ?>

<body style="background-color: #000;">

  <main>
    <div class="container-fluid" style="background: trasparent;">
      <?php include_once RUTA_RELATIVA . "componentes/audio.php"; ?>
      <?php include_once RUTA_RELATIVA . "componentes/presentacion-inicial.php"; ?>
      <!-- all -->
      <div class="row">
        <div class="video-container">
          <video autoplay muted loop class="background-video">
            <source src="<?php echo RUTA_IMG ?>video-flores.mp4" type="video/mp4">
            Tu navegador no soporta videos.
          </video>
          
          <!-- <p id="mostrar-frases" class="fleur-de-leah-regular mt-5"></p> -->

          <div class="card" style="background: transparent;border: none;">
            <div class="card-body text-center" style="color: #0e0e0e; background: #01f83b08;">

              <div class="x" style="font-size: 2rem;">
                <div class="frase-dedicada">
                  <p class="card-text" style="margin: 2rem 0 4rem 0;">
                  "Es un regalo extraordinario encontrar a alguien con quién compartirlo todo, alguien que te ama tal como sos.<br>
                  El tiempo que nos queda es nuestro tesoro más valioso. No hay mayor fortuna que vivirlo juntos, sin preguntarnos hasta cuándo.
                  Nuestro amor no entiende de medidas de tiempo, solo sabe que es para siempre..."
                  </p>
                  <h1 id="nuestros-nombres" class="fleur-de-leah-regular espejo-btn">Ingrid y Marce</h1>
                </div>
                <div class="card-header box-boda">
                  <p id="nuestra-boda">
                    Tenemos el honor de invitarte a <br>Nuestra Boda Civil<br>
                  </p>
                </div>
                <p class="card-text font-merienda data-especific">
                  <span>El viernes 14 de Febrero</span><br><br>
                  <span>A las 12:30 hs</span><br><br>
                  <span>En el registro civil de Isidro Casanova</span>
                </p>
                <a href=<?php echo $ubicacion_registro; ?> class="btn mt-5" target="_blank" style="font-family: serif ;box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 50px #03e9f4, 0 0 200px #03e9f4;
    -webkit-box-reflect: below 1px linear-gradient(transparent, #0005);">ubicar lugar</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>

  <?php include "./templates/template-ingridymarce/componentes/footer.php"; ?>
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>