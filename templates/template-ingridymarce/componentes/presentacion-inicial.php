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
       .fondo-negro {background-color: #000;}
    </style>

    

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
                                <h1 class="card-title fleur-de-leah-regular" <?php echo $atributo_cierre_modal; ?> style="font-size: 3.6rem; color: #a88b1e;">
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