      <?php while (have_posts() ) : the_post(); ?>
        <div class="general-colum__text">
          <h3 class="main-general__pretitle wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
            ACERCA DE
          </h3>
          <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        
            <?php the_title(); ?>
        
          </h2>
          <p class="main-general__description main-general__description--dark">
          
          <?php the_content(); ?>
          </p>
         
        </div>
<div class="general-colum__img services-contain__img">
          <span class="service-particle--1" ></span>
          <span class="service-particle--2" ></span>
          <img class="service-particle" src="<?php echo get_template_directory_uri(); ?>/assets/img/servicios/2.png">
          <img class="services-img"  alt="img" src="<?php echo get_the_post_thumbnail_url(); ?>">
        </div>       

        
 <?php endwhile; ?>