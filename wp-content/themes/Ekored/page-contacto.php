<?php get_header(); ?>

  <section class="general-banner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/banner/Banners_curvas-05.jpg')">
    <div class="general-banner__mask">
      <h2 class="general-banner__title">
        Contacto
      </h2>
    </div>
  </section>
  <section class="contact-us">
    <div class="container padding-top-bottom">
		 <?php if (have_posts() ) : the_post(); ?>
      <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
         <?php the_field('titulo_contacto'); ?>
      </h2>
      <div class="d-flex justify-content-center">
        <div class="main-general__description">
			<?php the_field('contenido_contacto'); ?>
        </div>
      </div>
      <div class="container-grid">
        <div class="contact-us__img general-colum__img">
          <div class="about-circulo circulo-1"></div>
          <div class="about-circulo circulo-2"></div>
          <div class="about-circulo circulo-3"></div>
          <div class="about-circulo circulo-4"></div>
          <div class="about-circulo circulo-5"></div>
          <img alt="img" class="about-custom__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/nosotros/about-1.png">
          <div class="about-particle">
            <img alt="" src="<?php the_field('imagen_contacto'); ?>">
          </div>
			
			
          
        </div>
        <div class="contact-us__form">
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
          <!-- <form>
            <input placeholder="Nombre" type="text">
            <input placeholder="Correo" type="text">
            <input placeholder="Teléfono" type="text">
            <input placeholder="Asunto" type="text">
            <textarea placeholder="Mensaje"></textarea>
            <label for="vehicle1">
<input id="vehicle1" name="vehicle1" type="checkbox" value="Bike">
Estoy de acuerdo con los
<span>
términos condiciones
</span>
y
<span>
políticas privacidad
</span>
</label>
            <a class="main-general__button" href="">ENVIAR</a>
          </form> -->
        </div>
      </div>
		<?php endif; ?>
    </div>
  </section>
  <section class="contact-info">
    <div class="container padding-top-bottom">
      <div class="container-grid">
        <div class="contact-info__item">
          <div class="contact-info__icon">
            <a href="">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacto/place@3x.png">
</a>
          </div>
          <p class="contact-info__title">
            Medellín
          </p>
          <a class="contact-info__link" >
Carrera 51b #78-40 Barrio Miranda                                                                                                                                                                                                                                                                                 
</a>
			    <a class="contact-info__link" href="tel:57 4 4443569">
Teléfono: (4) 4443569
</a>
			
			
			 
        </div>
        <div class="contact-info__item">
          <div class="contact-info__icon">
            <a href="">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacto/place@3x.png">
</a>
          </div>
          <p class="contact-info__title">
            Bogotá
          </p>
			<a class="contact-info__link">
				 Carrera 50 # 5C – 64 Barrio San Francisco                                                                                                                                                                                                                                                                                                                              
</a>
				    <a class="contact-info__link" href="tel:57 1 8058537">
Teléfono: (1) 8058537 
</a>
        </div>
        <div class="contact-info__item">
          <div class="contact-info__icon">
            <a href="">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacto/place@3x.png">
</a>
          </div>
          <p class="contact-info__title">
            Cali
          </p>
						 <a class="contact-info__link" >
Calle 11A N° 37-93 Acopi Yumbo                                                                                                                                                                                                                                                                                                                 
</a>
			
          <a class="contact-info__link" href="tel:57 2 3827520">
Teléfono: (2) 3827520
</a>
        </div>
		    <div class="contact-info__item">
          <div class="contact-info__icon">
            <a href="">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacto/place@3x.png">
</a>
          </div>
          <p class="contact-info__title">
            Barranquilla
          </p>
				 <a class="contact-info__link" >Calle 110 # 9G-390 Avenida Circunvalar Kilometro Nueve                                                                                                                                                                                                                                                                                                  
</a>
          <a class="contact-info__link" href="tel:57311 6632761">
Teléfono: 311 6632761
</a>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <a class="main-general__button" href="">AGENDA TU VISITA GUIADA</a>
      </div>
    </div>
  </section>
  <section class="contact-map">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacto/map.png">
    <div class="contact-map__mask"></div>
    <div class="contact-map__info">
      <ul>
        <li>
          <b>
ekored
</b>
        </li>
        <li>
          Carrera 51b #78-40
        </li>
        <li>
          Medellín
        </li>
      </ul>
      <div class="contact-map__triangle"></div>
    </div>
  </section>
  <?php get_footer(); ?>
