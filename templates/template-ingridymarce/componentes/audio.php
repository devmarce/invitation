<?php
// Configuración del audio
$controles_audio = 1;
$autoplay_audio = 1;  // Habilitado para reproducir automáticamente
$mute_audio = 0;
?>

<audio id="controller-audio" style="display: none;"
    src="<?php echo RUTA_RELATIVA ?>img/AUD-keila.mp3"
    <?= $autoplay_audio ? 'autoplay ' : ''; ?>
    <?= $controles_audio ? 'controls ' : ''; ?>
    <?= $mute_audio ? 'muted ' : ''; ?>>
</audio>

<!-- script js Audio -->
<script>
    /*
    # LEVANTA EL MODAL DE FORMA AUTOMATICA 
    */
    document.addEventListener("DOMContentLoaded", function() {
        var myModal = new bootstrap.Modal(document.getElementById('modal-inv'));
        myModal.show();
    });

    /*
    # Función para iniciar la animación de aparición
    */
    function iniciarAnimacionTitulo() {
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
                titulo_presentacion.style.animation = 'latido 3s ease 0s infinite'; //3s: velocidad de latido
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
    window.onload = iniciarAnimacionTitulo;
</script>