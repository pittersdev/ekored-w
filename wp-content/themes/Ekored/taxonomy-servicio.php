<?php get_header();


?>




<section class="general-banner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/banner/Banners_curvas-02.jpg')">
    <div class="general-banner__mask">
      <h2 class="general-banner__title">
        Servicios
      </h2>
    </div>
  </section>
<section class="general-colum">
    <div class="container padding-top-bottom">
      <div class="container-grid">
		 
        <div class="general-colum__text">
          <h3 class="main-general__pretitle wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
            ACERCA DE
          </h3>
          <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
          <?php echo single_term_title(); ?>

          </h2>
          <p class="main-general__description main-general__description--dark">
        <?php echo category_description(); ?>
          </p>
        </div>

          <?php 
            $id_taxonomia = get_queried_object_id();
           $meta_key = img_taxo;
           $imagen = termmeta($meta_key, $id_taxonomia );    
          ?>
		  
		  <div class="general-colum__img services-contain__img">
          <span class="service-particle--1" ></span>
          <span class="service-particle--2" ></span>
          <img class="service-particle" src="<?php echo get_template_directory_uri(); ?>/assets/img/servicios/2.png">
          <img class="services-img"  alt="img" src="<?php  echo $imagen ?>">
        </div>
		  
		  <?php include('archive-servicios.php'); ?>
      </div>
    </div>
  </section>

<?php  get_template_part('partials/video'); ?>
  <?php  get_template_part('partials/gallery'); ?>

  <section class="single-phrase">
    <div class="single-phrase__mask">
      <div class="container">
      <?php $args = array( 'post_type' => 'prove', 'posts_per_page' => 1 ); ?>
            <?php $loop = new WP_Query( $args ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <h2 class="single-phrase__title">
        <?php the_field('titulo_records'); ?> 
        </h2>
        <p class="single-phrase__subtitle">
        <?php the_field('descripcion_records'); ?> 
        </p>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
   <section class="single-collapse">
    <div class="container padding-top-bottom">
      <div class="container-grid">
		   <?php $args = array( 'post_type' => 'PETciclamosservicio' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
            <?php if ( $loop->have_posts() ) : $loop->the_post(); ?>
	   <div class="single-collapse__img">
              <img alt="" src="<?php the_field('imagen_1'); ?> ">
        </div>
        <div class="single-collapse__text">
			
          <h3 class="main-general__pretitle wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
            ACERCA DE
          </h3>
		
          <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
          <?php the_field('titulo_1'); ?> 
          </h2>
          <p class="main-general__description main-general__description--dark">
          <?php the_field('contenido_1'); ?></p>
			<?php endif; ?>
          <div class="single-collapse__content" id="faq">
            <div class="accordion-option">
            </div>
            <div class="clearfix"></div>
			  <?php $i = 1; ?>
		     <?php $args = array( 'post_type' => 'PETciclamosservicio' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div aria-multiselectable="true" class="panel-group" id="<?php echo "heading-0".$i;?>" role="tablist">
			
              <div class="panel panel-default">
                <div class="panel-heading" id="headingOne" role="tab">
                  <h4 class="panel-title">
                  
					   <a style ="cursor: pointer;"
						  aria-controls="collapse-0<?php echo $i . "";?>" 
                         aria-expanded="<?php if($i == 1): echo "true"; else: echo "false"; endif; ?> " 
                         data-target="#collapse-<?php echo $i . "";?>" 
                         data-toggle="collapse" 
                         role="button">
                    <?php the_title(); ?> 
                    </a>
                  </h4>
                </div>
                <div aria-labelledby="<?php echo "heading-0".$i;?>" class="<?php if($i == 1) echo "show";  ?> panel-collapse collapse in" id="collapse-<?php echo $i . "";?>" data-parent="#faq" role="tabpanel">
                  <div class="panel-body">
                  <?php the_content(); ?> 
                  </div>
                </div>
              </div>
				   
            </div>
			  <?php $i++; ?>
					<?php endwhile; ?>
          </div>
		
        </div>
       
      </div>   
  
  </section>

  <?php get_footer(); ?>