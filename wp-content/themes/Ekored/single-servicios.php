<?php get_header(); ?>
  
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
        <?php endwhile; ?>

        <div class="general-colum__img">
          <img alt="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/single/project.png">
        </div>
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
   
        <div class="single-collapse__img">
          <img alt="img" src="<?php the_field('imagen_prove'); ?> ">
        </div>
        <div class="single-collapse__text">
          <h3 class="main-general__pretitle wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
            ACERCA DE
          </h3>
          <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
          ¿Qué es el PET?
          </h2>
          <p class="main-general__description main-general__description--dark">
          PET (polietileno tereftalato): Es un polímero plástico que se obtiene mediante
un proceso de polimerización de ácido tereftálico y monoetilenglicol. Es un polímero lineal, con un alto grado de cristalinidad y termoplástico en su comportamiento, lo cual lo hace apto para ser transformado mediante procesos de extrusión, inyección, inyección-soplado y termoformado.
          </p>
          <div class="single-collapse__content">
            <div class="accordion-option">
            </div>
            <div class="clearfix"></div>
            <div aria-multiselectable="true" class="panel-group" id="accordion" role="tablist">
              <div class="panel panel-default">
                <div class="panel-heading" id="headingOne" role="tab">
                  <h4 class="panel-title">
                    <a aria-controls="collapseOne" aria-expanded="false" data-parent="#accordion" data-toggle="collapse" href="#collapseOne" role="button">
                    Beneficios
</a>
                  </h4>
                </div>
                <div aria-labelledby="headingOne" class="panel-collapse collapse in" id="collapseOne" role="tabpanel">
                  <div class="panel-body">
                  Reduce el impacto ambiental y evita el uso de los recursos naturales.
 Genera empleos, más de 50.000 familias viven del reciclaje en Colombia.
 Ahorra consumo de energía mejorando así la economía.
 Se implementa el concepto de ecología industrial.
 Se trabaja en el cuidado del medio ambiente.
 Evita que materia aprovechable se vaya para los rellenos sanitarios, evitando la formación de nuevos basureros.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" id="headingTwo" role="tab">
                  <h4 class="panel-title">
                    <a aria-controls="collapseTwo" aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo" role="button">
                    ¿Por qué reciclar el PET?
</a>
                  </h4>
                </div>
                <div aria-labelledby="headingTwo" class="panel-collapse collapse in" id="collapseTwo" role="tabpanel">
                  <div class="panel-body">
                  EKO RED es una empresa verde, amigable con el medio ambiente que se dedica a la
recolección de material PET para integrarlo nuevamente a un ciclo de productividad como materia prima.
Es uno de los materiales utilizados en la industria embotelladora de bebidas y empresas fabricantes de fibra textil.
Al ser un producto con muy alto consumo, reciclarlo se vuelve una necesidad económica y aprovecharlo una necesidad ambiental.
                                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>   
    </div>
  </section>

  <?php get_footer(); ?>