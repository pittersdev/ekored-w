<?php get_header(); ?>
  <section class="general-banner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/banner/Banners_curvas-03.jpg')">
    <div class="general-banner__mask">
      <h2 class="general-banner__title">
        Publicaciones
      </h2>
    </div>
  </section>

  <section class="publications-notice">
    <div class="container padding-top-bottom"> 
		 <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        Nuestras noticias
      </h2>
      <div class="d-flex justify-content-center">
        <p class="main-general__description">
         Conoce toda la actualidad sobre sostenibilidad
        </p>
      </div>
		
      <div class="publications-notice__carousel">
      <?php $args = array( 'post_type' => 'post'); ?>
      <?php $loop = new WP_Query( $args ); ?>
       <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="publications-notice__item wow animated fadeInRight" style="visibility: visible; animation-delay: .1s  ;">
          <a href="<?php the_permalink(); ?>">
            <div class="publications-notice__img">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>">
              <div class="publications-notice__etiq">
                <span>Eko</span>
              </div>
            </div>
            <div class="publications-notice__body">
              <div class="publications-notice__info">
                <div class="publications-notice__user">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/publicaciones/user-3@3x.png"><?php the_field(' autor_noticia'); ?>
					<?php the_field('agregue_un_autor'); ?>
					 <?php the_field('autor_noticia'); ?>
                </div>
                <div class="publications-notice__date">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/publicaciones/calendar-1@3x.png">
                 <?php the_field('fecha_noticia'); ?>
                </div>
              </div>
              <h2 class="publications-notice__title">
              <?php the_title(); ?>
              </h2>
              <p class="main-general__description">
              <?php echo excerpt(20); ?>        
              </p>
              <a class="publications-notice__btn" href="<?php the_permalink(); ?>">Leer más →</a>
            </div>
          </a>
        </div>
		 	
        <?php endwhile; ?>
		</div>
</div>	
  </section>

<?php  get_template_part('partials/video'); ?>

  <section class="publications-norma">
    <div class="publications-norma__bg"></div>
    <div class="container padding-top-bottom">
      <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        Normatividad
      </h2>
      <div class="d-flex justify-content-center">
        <p class="main-general__description">
         Conoce las normas que regulan nuestro sector
        </p>
      </div>
      <div class="container-grid">
      <?php $args = array( 'post_type' => 'normatividad' ); ?>
     <?php $loop = new WP_Query( $args ); ?>
     <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="publications-norma__item wow animated fadeInRight" style="visibility: visible; animation-delay: .1s  ;">
          <h2 class="publications-norma__title">
             <?php the_title(); ?>
          </h2>
          <p class="main-general__description">
          <?php echo excerpt(10); ?> 
          </p>
          <div class="publications-norma__btn">
            <a class="main-general__button", target="_blank"  href="<?php the_field('adjuntar_archivo'); ?>">DESCARGAR</a>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>


  <section class="publications-info">
    <div class="container padding-top-bottom">
      <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        Informes de sostenibilidad
      </h2>
      <div class="d-flex justify-content-center">
        <p class="main-general__description">
       ¡Conoce nuestro informe de sostenibilidad! 
        </p>
      </div>
      <div class="container-grid">
      <?php $args = array( 'post_type' => 'sostenibilidad' ); ?>
     <?php $loop = new WP_Query( $args ); ?>
     <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="publications-info__item">
          <div class="publications-info__icon">
            <img src="<?php the_field('icono'); ?>">
          </div>
          <div class="publications-info__body">
            <h2 class="publications-info__title">
            <?php the_title(); ?>
              
            </h2>
            <div class="main-general__description">
            <?php the_field('descripcion'); ?>
            </div>
            
            <a class="main-general__button" target="_blank" href="<?php the_field('ver_ahora'); ?>">VER AHORA</a>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>

  <section class="publications-events">
    <div class="publications-events__bg">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/publicaciones/bg.png">
      <div class="publications-events__mask"></div>
    </div>
    <div class="container padding-top-bottom">
      <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        Nuestros eventos
      </h2>
      <div class="d-flex justify-content-center">
        <p class="main-general__description">
        ¡Prográmate con nuestros eventos!
        </p>
      </div>
      <div class="container-grid">
      <?php $args = array( 'post_type' => 'eventos', 'posts_per_page' => 3  ); ?>
     <?php $loop = new WP_Query( $args ); ?>
     <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="publications-events__item wow animated fadeInRight" style="visibility: visible; animation-delay: .1s  ;">
          <a href="<?php the_permalink() ; ?>">
            <div class="publications-events__img">
              <img src="<?php the_field('imagen_3'); ?>">
            </div>
            <div class="publications-events__body">
              <h2 class="publications-events__title">
            <?php the_title(); ?>
              </h2>
              <div class="main-general__description">
              <?php the_field('descripcion_2'); ?>
              </div>
              <div class="publications-events__site">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/publicaciones/place@3x.png"> <?php the_field('direccion_2'); ?>
              </div>
              <div class="publications-events__date">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/publicaciones/calendar-1@3x.png"> <?php the_field('fecha_del_evento'); ?>
              </div>
              <a class="main-general__button" href="<?php the_permalink() ; ?>">PARTICIPAR</a>
            </div>
          </a>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>