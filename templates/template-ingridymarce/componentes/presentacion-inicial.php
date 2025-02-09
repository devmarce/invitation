<?php $atributo_cierre_modal = "data-bs-dismiss='modal'"; ?>

<!-- Presentacion-inicial.php styles -->
<style type="text/css">
  .fondo-negro {
    background-color: #8ba78e;
  }

  #nos_casamos {
    font-size: 3.6rem; 
    color: #a88b1e; 
    background: transparent; 
    border:none;
  }

  @media only screen and (max-width: 512px) {
    #nos_casamos {
      font-size: 2.6rem; 
    }
  }

  @media only screen and (max-width: 320px) {
    #nos_casamos {
      font-size: 1.6rem; 
    }
  }
  </style>


<!-- Modal Presentación inicial -->
<div class="row">
  <div class="modal fade fondo-negro" id="modal-inv" tabindex="-1" aria-labelledby="modal-invLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content" style="border: none;">
        <div class="modal-body p-0">
          <div class="card" style="border: none;">
            <?php if ($video_activo) : ?>
              <video class="video" src="<?php echo RUTA_IMG . "video-presentacion-1.mp4"; ?>" autoplay="true" muted="true" loop="true"></video>
            <?php endif; ?>
            <div class="card-img-overlay text-center">
              <div style="display: flex; align-items: center; justify-content: center; height: 100%; padding: 10%;">
                <button id="nos_casamos" onclick="activarAudioYabrirInvitacion()" class="card-title fleur-de-leah-regular" <?php echo $atributo_cierre_modal; ?>>
                  ¡Nos Casamos!
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php # ACTIVA EL AUDIO MEDINATE EL BTN Y CIERRA EL MODAL INICIAL ?>
<script>
    function activarAudioYabrirInvitacion() {
        const audio = document.getElementById("controller-audio");

        if (!audio.paused) {
            console.log('audio.paused', audio.paused);
            audio.play();
        } else {
            audio.play();
            // audio.pause();
        }
    }
</script>