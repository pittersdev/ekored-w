<section class="main-services">
    <div class="main-services__bg"></div>
    <div class="container padding-top-bottom">
	 
	
      <h2 class="main-general__title wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
      Reducción del Impacto Ambiental 
      </h2>
      <div class="d-flex justify-content-center">
        <p class="main-general__description main-general__description--bold">
        Nos enfocamos en que productos y servicios cuenten con altos índices de calidad que reduzcan el impacto ambiental.

        </p>
      </div>

      <div class="container-grid wow animated fadeInRight" style="visibility: visible; animation-delay: .3s  ;">
      <?php $args = array( 'post_type' => 'service2', 'posts_per_page' => 3 ); ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="main-services__item">
          <div class="d-flex justify-content-center">
            <img alt="Icono de Servicio" class="main-services__icon" src="<?php echo get_the_post_thumbnail_url(); ?>">
          </div>
          <h2 class="main-general__title--small main-general__title">
            <?php the_title(); ?>
          </h2>
          <div class="main-general__description main-general__description--dark">
              <?php the_content(); ?>
</div>
         
        </div>
        <?php endwhile; ?>
<!-- 
         <div class="main-services__item">
          <div class="d-flex justify-content-center">
            <img alt="Icono de Servicio" class="main-services__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_12@3x.png">
          </div>
          <h2 class="main-general__title--small main-general__title">
            Separación
          </h2>
          <p class="main-general__description main-general__description--dark">
            Con un personal altamente calificado y una eficiente maquinaria se realiza la clasificación del material, (separación por colores, etiquetas y tipos de plásticos) de acuerdo a las condiciones de calidad determinadas por Enka de Colombia.
          </p>
        </div>
        <div class="main-services__item">
          <div class="d-flex justify-content-center">
            <img alt="Icono de Servicio" class="main-services__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_13@3x.png">
          </div>
          <h2 class="main-general__title--small main-general__title">
            Compactación
          </h2>
          <p class="main-general__description main-general__description--dark">
            Este proceso consiste en el prensaje que se le hace a las botellas ya clasificadas, con el fin de reducir el espacio en el transporte y poder desplazar más material en menos viajes.
          </p>
        </div> -->
      </div>
    </div>
  </section>