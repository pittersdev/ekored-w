<section class="main-contact">
    <div class="container">
      <div class="container-grid">
        <div class="main-contact__img">
          <img alt="Imagen contacto" src="<?php echo get_template_directory_uri(); ?>/assets/img/illustration@3x.png">
        </div>
        <div class="main-contact__form">
          <h3 class="main-general__pretitle wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
            QUIERES
          </h3>
          <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
            Contactarnos
          </h2>
          <p class="main-general__description main-general__description--dark">
          Gracias por tu visita, nos gustaría conocer tus dudas o comentarios acerca de nosotros. Mediante el siguiente formulario puedes enviarnos un mensaje al cual le daremos respuesta tan pronto como sea posible
          </p>
          <!-- <form action="">
            <input placeholder="Nombre" type="text">
            <input placeholder="Teléfono" type="text">
            <input placeholder="Correo" type="email">
            <textarea placeholder="Mensaje"></textarea>
            <div class="d-flex justify-content-center container-form">
              <a class="main-general__button" href="">Enviar</a>
            </div>
          </form> -->
          <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
        </div>
      </div>
    </div>
  </section>