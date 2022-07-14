<?php get_header(); ?>

  <section class="general-banner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/banner/Banners_curvas-06.jpg')">
    <div class="general-banner__mask">
      <h2 class="general-banner__title">
        Prensa
      </h2>
    </div>
  </section>
  <section class="post-detail">
    <div class="container padding-top-bottom">
      <div class="container-grid">
      <?php while (have_posts() ) : the_post(); ?>
        <div class="press-detail__content">
          <div class="post-detail__img">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
          </div>
         
          <div class="post-detail__body">
            <div class="publications-notice__info">
              <div class="publications-notice__user">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/publicaciones/user-3@3x.png">
				 
					<?php the_field('agregue_un_autor'); ?>
					 <?php the_field('autor_noticia'); ?>
              </div>
              <div class="publications-notice__date">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prensa/calendar-1@3x.png">
				  <?php the_field('agregue_fecha_de_la_noticia'); ?>
              </div>
            </div>
            <p class="main-general__description">
            <?php the_content();?>
            </p>
          
           
          </div>
          <?php endwhile; ?>
	<div class="post-detail__body">
         <div class="post-detail__btn">
	<?php if (strlen(get_previous_post()->post_title) > 0) { ?>	 		
 <?php previous_post_link('%link', 'Anterior') ?>
 <?php }?>
 <?php if (strlen(get_next_post()->post_title) > 0) { ?>
 <?php next_post_link('%link', 'Después') ?>
 <?php }?>
			 </div>
        </div>
          <div class="post-detail__body">
            <div class="post-detail__form">
              <h3 class="main-general__pretitle wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
                ¡COMUNÍCATE
              </h3>
              <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
                con nosotros! 
              </h2>
              <p class="main-general__description main-general__description--dark mb-3">
                Mediante el siguiente formulario puede solicitar información sobre nuestra organización, le daremos respuesta lo más rápido posible
              </p>
              <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 4, 'title' => false, 'description' => false ) ); ?>
            </div>
          </div>
        </div>
		   <div class="post-detail__sidebar">
			   
		 <?php get_sidebar(); ?>
		   </div>
		  
      </div>
    </div>
  </section>
  <?php get_footer(); ?>
