<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Ekored</title>
  <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="shortcut icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">
  <?php wp_head(); ?>

</head>

<body>

<?php if ( is_home() ) : ?>
<header class="fixed-top navbar-fixed-js">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <div class="main-brand__top">
          <div class="main-brand">
            <a class="navbar-brand" href="<?php bloginfo('url')?>">
<img alt="Logo Ekored" id="iso" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_2@2x.png">
</a>
          </div>
        </div>
        <div class="main-brand__fixed">
          <div class="main-brand">
            <a class="navbar-brand" href="<?php bloginfo('url')?>">
<img alt="Logo Ekored" id="iso" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_2@2x.png">
</a>
          </div>
        </div>
        <div class="main-brand brand-responsive">
          <a class="navbar-brand" href="<?php bloginfo('url')?>">
<img alt="Logo Ekored" id="iso" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_2@2x.png">
</a>
          <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas" type="button">
<span class="hamburger-box"></span>
<span class="hamburger-inner"></span>
</button>
        </div>
        <div class="navbar-collapse offcanvas-collapse">
          <ul class="navbar-nav mr-autos">
            <li class="nav-item">
              <a class="nav-link nav-link-p" data="offcanvas" href="<?php bloginfo('url')?>/nosotros">
Quiénes Somos
</a>
            </li>
                      <li class="dropdown nav-item">
            <button class="dropdown-toggle nav-link " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Servicios
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item nav-link-p" href="#">Pet</a>
              <a class="dropdown-item nav-link-p" href="#">Servicios</a>
            </div>
          </li>
            <!-- <li class="nav-item">
              <a aria-expanded="false" aria-haspopup="true" class="nav-link nav-link-p" data-toggle="dropdown" href="#" role="button">
PET
</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link nav-link-p" data="offcanvas" href="<?php bloginfo('url')?>/publicaciones" role="button">
Publicaciones
</a>
            </li>
            <li class="nav-item">
        
              <a class="nav-link nav-link-p" data="offcanvas" href="<?php bloginfo('url')?>/prensas" role="button">
Prensa

</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-p" data="offcanvas" href="<?php bloginfo('url')?>/proveedores">Proveedores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-p main-general__button" data="offcanvas" href="<?php bloginfo('url')?>/contacto">Contáctanos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	</header>
  
  
	<?php else: ?> 
	<header class="fixed-top navbar-fixed-js navbar-fixed-js--custom">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <div class="main-brand__top">
          <div class="main-brand">
            <a class="navbar-brand" href="<?php bloginfo('url')?>">
              <img alt="Logo Ekored" id="iso" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_2@2x.png">
            </a>
          </div>
        </div>
        <div class="main-brand__fixed">
          <div class="main-brand">
            <a class="navbar-brand" href="<?php bloginfo('url')?>">
              <img alt="Logo Ekored" id="iso" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_2@2x.png">
            </a>
          </div>
        </div>
        <div class="main-brand brand-responsive">
          <a class="navbar-brand" href="<?php bloginfo('url')?>">
            <img alt="Logo Ekored" id="iso" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_2@2x.png">
          </a>
          <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas"
            type="button">
            <span class="hamburger-box"></span>
            <span class="hamburger-inner"></span>
          </button>
        </div>
        <div class="navbar-collapse offcanvas-collapse">
          <ul class="navbar-nav mr-autos">
            <li class="nav-item">
              <a class="nav-link nav-link-p fixed--link" data="offcanvas" href="<?php bloginfo('url')?>/nosotros">
                Quiénes Somos
              </a>
            </li>

<li class="dropdown nav-item">
            <button class="dropdown-toggle nav-link  fixed--link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Servicios
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item nav-link-p" href="#">Pet</a>
              <a class="dropdown-item nav-link-p" href="#">Servicios</a>
            </div>
          </li>
            <li class="nav-item">
              <a class="nav-link nav-link-p fixed--link" data="offcanvas" href="<?php bloginfo('url')?>/publicaciones" role="button">
                Publicaciones
              </a>
            </li>
            <li class="nav-item">
          
              <a class="nav-link nav-link-p fixed--link" data="offcanvas" href="<?php bloginfo('url')?>/prensas" role="button">
Prensa
</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-p fixed--link" data="offcanvas" href="<?php bloginfo('url')?>/proveedores">Proveedores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-p fixed--link main-general__button" data="offcanvas"
                href="<?php bloginfo('url')?>/contacto">¡Ayúdanos a mejorar!</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  
		<?php endif; ?>
		
<style>
	.nav-link {
    
		font-size: 1rem!important;}
	</style>
  