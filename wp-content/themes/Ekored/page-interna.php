<?php get_header(); ?>
  
<section class="general-banner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/servicios/image@3x.png')">
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
            Proyectos
          </h2>
          <p class="main-general__description main-general__description--dark">
            Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó
            una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
          </p>
          <p class="main-general__description main-general__description--dark">
            Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó
            una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
          </p>
        </div>
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
        <h2 class="single-phrase__title">
          1,9 millones de botellas diarias
        </h2>
        <p class="single-phrase__subtitle">
          Un aliado estratégico en procesos sociales y ambientales
        </p>
      </div>
    </div>
  </section>
  <section class="single-collapse">
    <div class="container padding-top-bottom">
      <div class="container-grid">
        <div class="single-collapse__img">
          <img alt="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/single/collapse.png">
        </div>
        <div class="single-collapse__text">
          <h3 class="main-general__pretitle wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
            ACERCA DE
          </h3>
          <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
            Nuestros Servicios
          </h2>
          <p class="main-general__description main-general__description--dark">
            Lorem ipsum dolor sit amet consectetur adipiscing elit donec facilisi magna natoque, per eros massa feugiat imperdiet elementum urna nulla erat.
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
Lorem ipsum dolor sit amet consectetur adipiscing
</a>
                  </h4>
                </div>
                <div aria-labelledby="headingOne" class="panel-collapse collapse in" id="collapseOne" role="tabpanel">
                  <div class="panel-body">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit donec facilisi magna natoque, per eros massa feugiat imperdiet elementum urna nulla erat.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" id="headingTwo" role="tab">
                  <h4 class="panel-title">
                    <a aria-controls="collapseTwo" aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo" role="button">
Lorem ipsum dolor sit amet consectetur adipiscing
</a>
                  </h4>
                </div>
                <div aria-labelledby="headingTwo" class="panel-collapse collapse in" id="collapseTwo" role="tabpanel">
                  <div class="panel-body">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit donec facilisi magna natoque, per eros massa feugiat imperdiet elementum urna nulla erat.
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