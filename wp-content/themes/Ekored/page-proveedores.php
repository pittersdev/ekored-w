<?php get_header(); ?>
  <section class="general-banner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/banner/Banners_curvas-04.jpg')">
    <div class="general-banner__mask">
      <h2 class="general-banner__title">
        Proveedores
      </h2>
    </div>
  </section>
  <section class="suppliers-quality">
    <div class="container padding-top-bottom">
      <div class="container-grid">
      <?php $args = array( 'post_type' => 'prove', 'posts_per_page' => 1 ); ?>
            <?php $loop = new WP_Query( $args ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="suppliers-quality__text">
          <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
            <?php the_title(); ?>
          </h2>
          <p class="main-general__description main-general__description--dark">
          <?php the_content(); ?>  
          </p>
        
          <div class="suppliers-quality__grid">
            <div class="suppliers-quality__item">
              <div class="suppliers-quality__icon">
                <img alt="" src="<?php the_field('icono_1');?>">
              </div>
              <h2 class="suppliers-quality__title">
               <?php the_field('titulo_1'); ?>
              </h2>
              <p class="main-general__description main-general__description--dark">
              <?php the_field('contenido_1'); ?> 
              </p>
						      <a data-target="#modal-1" data-toggle="modal">Leer más</a>
          <!-- Modal -->
          <div aria-hidden="<?php if( get_the_ID()): echo "false"; else: echo "true"; endif; ?> " aria-labelledby="<?php echo get_the_ID() . "Title" ?>" class="modal fade" id="modal-1" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title main-value__title" id="exampleModalLabel">  <?php the_field('titulo_1'); ?> </h5>
                  <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                   <span aria-hidden="true">×</span>
                   </button>
                </div>
                <div class="modal-body">
					<p>
						<?php the_field('contenido_1'); ?> 
					</p>
                  
                </div>
                <div class="modal-footer"></div>
              </div>
            </div>
          </div>
            </div>
            <div class="suppliers-quality__item">
              <div class="suppliers-quality__icon">
                <img alt="" src="<?php the_field('icono_0');?>">
              </div>
              <h2 class="suppliers-quality__title">
              <?php the_field('titulo_0'); ?>  
              </h2>
              <p class="main-general__description main-general__description--dark">
              <?php the_field('contenido_0'); ?> 
              </p>
						      <a data-target="#modal-2" data-toggle="modal">Leer más</a>
          <!-- Modal -->
          <div aria-hidden="<?php if( get_the_ID()): echo "false"; else: echo "true"; endif; ?> " aria-labelledby="<?php echo get_the_ID() . "Title" ?>" class="modal fade" id="modal-2" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title main-value__title" id="exampleModalLabel">  <?php the_field('titulo_0'); ?> </h5>
                  <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                   <span aria-hidden="true">×</span>
                   </button>
                </div>
                <div class="modal-body">
					<p>
						<?php the_field('contenido_0'); ?> 
					</p>
                  
                </div>
                <div class="modal-footer"></div>
              </div>
            </div>
          </div>
            </div>
            <div class="suppliers-quality__item">
              <div class="suppliers-quality__icon">
                <img alt="" src="<?php the_field('icono_3');?>">
              </div>
              <h2 class="suppliers-quality__title">
              <?php the_field('titulo_3'); ?> 
              </h2>
              <p class="main-general__description main-general__description--dark">
              <?php the_field('contenido_3'); ?> 
              </p>
						      <a data-target="#modal-3" data-toggle="modal">Leer más</a>
          <!-- Modal -->
          <div aria-hidden="<?php if( get_the_ID()): echo "false"; else: echo "true"; endif; ?> " aria-labelledby="<?php echo get_the_ID() . "Title" ?>" class="modal fade" id="modal-3" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title main-value__title" id="exampleModalLabel">  <?php the_field('titulo_3'); ?> </h5>
                  <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                   <span aria-hidden="true">×</span>
                   </button>
                </div>
                <div class="modal-body">
					<p>
						<?php the_field('contenido_3'); ?> 
					</p>
                  
                </div>
                <div class="modal-footer"></div>
              </div>
            </div>
          </div>
            </div>
            <div class="suppliers-quality__item">
              <div class="suppliers-quality__icon">
                <img alt="" src="<?php the_field('icono_4');?>">
              </div>
              <h2 class="suppliers-quality__title">
              <?php the_field('titulo_4'); ?>  
              </h2>
              <p class="main-general__description main-general__description--dark">
              <?php the_field('contenido_4'); ?>  
              </p>
						      <a data-target="#modal-4" data-toggle="modal">Leer más</a>
          <!-- Modal -->
          <div aria-hidden="<?php if( get_the_ID()): echo "false"; else: echo "true"; endif; ?> " aria-labelledby="<?php echo get_the_ID() . "Title" ?>" class="modal fade" id="modal-4" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title main-value__title" id="exampleModalLabel">  <?php the_field('titulo_4'); ?> </h5>
                  <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                   <span aria-hidden="true">×</span>
                   </button>
                </div>
                <div class="modal-body">
					<p>
						<?php the_field('contenido_4'); ?> 
					</p>
                  
                </div>
                <div class="modal-footer"></div>
              </div>
            </div>
          </div>
            </div>
            <div class="suppliers-quality__item">
              <div class="suppliers-quality__icon">
                <img alt="" src="<?php the_field('icono_5');?>">
              </div>
              <h2 class="suppliers-quality__title">
              <?php the_field('titulo_5'); ?>  
              </h2>
              <p class="main-general__description main-general__description--dark">
              <?php the_field('contenido_5'); ?>  
              </p>
						      <a data-target="#modal-5" data-toggle="modal">Leer más</a>
          <!-- Modal -->
          <div aria-hidden="<?php if( get_the_ID()): echo "false"; else: echo "true"; endif; ?> " aria-labelledby="<?php echo get_the_ID() . "Title" ?>" class="modal fade" id="modal-5" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title main-value__title" id="exampleModalLabel">  <?php the_field('titulo_5'); ?> </h5>
                  <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                   <span aria-hidden="true">×</span>
                   </button>
                </div>
                <div class="modal-body">
					<p>
						<?php the_field('contenido_5'); ?> 
					</p>
                  
                </div>
                <div class="modal-footer"></div>
              </div>
            </div>
          </div>
            </div>
            <div class="suppliers-quality__item">
              <div class="suppliers-quality__icon">
                <img alt="" src="<?php the_field('icono_6');?>">
              </div>
              <h2 class="suppliers-quality__title">
              <?php the_field('titulo_6'); ?> 
              </h2>
              <p class="main-general__description main-general__description--dark">
              <?php the_field('contenido_6'); ?> 
              </p>
				      <a data-target="#modal-6" data-toggle="modal">Leer más</a>
          <!-- Modal -->
          <div aria-hidden="<?php if( get_the_ID()): echo "false"; else: echo "true"; endif; ?> " aria-labelledby="<?php echo get_the_ID() . "Title" ?>" class="modal fade" id="modal-6" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title main-value__title" id="exampleModalLabel">  <?php the_field('titulo_6'); ?> </h5>
                  <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                   <span aria-hidden="true">×</span>
                   </button>
                </div>
                <div class="modal-body">
					<p>
						  <?php the_field('contenido_6'); ?> 
					</p>
                
                </div>
                <div class="modal-footer"></div>
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>
        <div class="suppliers-quality__img">
          <img alt="" src="<?php echo get_the_post_thumbnail_url(); ?>">
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  
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
     <?php if (have_posts() ) : the_post(); ?>
        <div class="single-collapse__img">
              <img alt="" src="<?php the_field('imagen_provee'); ?> ">
        </div>
        <div class="single-collapse__text">
          <h3 class="main-general__pretitle wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
            ACERCA DE
          </h3>
			
          <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
          <?php the_field('titulo_provee'); ?> 
          </h2>
          <p class="main-general__description main-general__description--dark">
          <?php the_field('contenido_provee'); ?>   
          </p>
<?php endif; ?>
          <div class="single-collapse__content" id="faq">
            <div class="accordion-option">
            </div>
            <div class="clearfix"></div>
			  <?php $i = 1; ?>
		     <?php $args = array( 'post_type' => 'PETciclamos' ); ?>
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
    </div>
  </section>
  <?php get_footer(); ?>