<section class="main-gallery">
    <div class="main-gallery__bg"></div>
    <div class="container padding-top-bottom">
      <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
      ¡Nosotros PETciclamos!
      </h2>
      <div class="d-flex justify-content-center">
        <p class="main-general__description">
        Comprometidos con el fortalecimiento continuo a favor de la población recicladora.
        </p>
      </div>
      <div class="main-gallery__carousel wow animated fadeInRight" style="visibility: visible; animation-delay: .3s  ;">
      <?php $args = array( 'post_type' => 'galeria' ); ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="main-gallery__item">
          <img  src="<?php the_post_thumbnail_url('medium-large');?>">
        </div>
        <?php endwhile; ?>
        
        <!-- <div class="main-gallery__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_4@3x.png">
        </div>
        <div class="main-gallery__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_5@3x.png">
        </div>
        <div class="main-gallery__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_6@3x.png">
        </div>
        <div class="main-gallery__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_6@3x.png">
        </div> -->
      </div>
    </div>
  </section>