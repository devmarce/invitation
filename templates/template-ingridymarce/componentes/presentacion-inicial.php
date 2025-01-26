<div class="row">
  <script>
    /*
    # LEVANTA EL MODAL DE FORMA AUTOMATICA 
    */
    document.addEventListener("DOMContentLoaded", function() {
      var myModal = new bootstrap.Modal(document.getElementById('modal-inv'));
      myModal.show();
    });
  </script>

  <!-- Presentacion-inicial.php styles -->
  <style type="text/css">
    .fondo-negro {
      background-color: #000;
    }
  </style>

  <script>
    // Función para iniciar la animación de aparición
    function iniciarAnimacion() {
      const titulo_presentacion = document.getElementById('nos_casamos');

      // Establecemos los estilos iniciales
      titulo_presentacion.style.transform = 'scale(0.5)';
      titulo_presentacion.style.opacity = '0';

      // Aplicamos la animación de aparición
      setTimeout(() => {
        titulo_presentacion.style.transition = 'transform 1.5s ease-out, opacity 1.5s ease-out';
        titulo_presentacion.style.transform = 'scale(1)';
        titulo_presentacion.style.opacity = '1';

        // Una vez finalizada la animación de aparición, iniciamos el latido
        setTimeout(() => {
          titulo_presentacion.style.animation = 'latido 3s ease 0s infinite';//3s: velocidad de latido
        }, 1500); // Se ejecuta después de que la animación de aparición termine

      }, 100);
    }

    // Definir la animación de latido usando CSS desde JS
    const style = document.createElement('style');
    style.innerHTML = `
        @keyframes latido {
            0%, 50%, 100% {
                transform: scale(1);
            }
            30%, 80% {
                transform: scale(0.92, 0.95);
            }
        }
    `;
    document.head.appendChild(style);

    // Iniciar la animación cuando la página cargue
    window.onload = iniciarAnimacion;
  </script>

  <!-- Modal Presentación inicial -->
  <div class="modal fade fondo-negro" id="modal-inv" tabindex="-1" aria-labelledby="modal-invLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content" style="border: none;">
        <div class="modal-body p-0">
          <div class="card" style="border: none;">
            <?php if ($video_activo) : ?>
              <video class="video-rayos" src="<?php echo RUTA_IMG . "video-presentacion-1.mp4"; ?>" autoplay="true" muted="true" loop="true" poster="./templates/template-keila/img/keila-metal.jpg"></video>
            <?php endif; ?>
            <div class="card-img-overlay text-center">
              <div style="display: flex; align-items: center; justify-content: center; height: 100%; padding: 10%;">
                <h1 id="nos_casamos" class="card-title fleur-de-leah-regular latido h1-animado" <?php echo $atributo_cierre_modal; ?> style="font-size: 3.6rem; color: #a88b1e;">
                  ¡Nos Casamos!
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>