<section class="main-about">
	 <?php $args = array( 'post_type' => 'servicios', 'posts_per_page' => 1 ); ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <img alt="" class="main-about__img" src="http://servertest.sytes.net/Ekored-w/wp-content/uploads/2020/03/DSC_0131-min.jpg">
	<img alt="" class="onda" src="http://servertest.sytes.net/Ekored-w/wp-content/uploads/2020/03/formagene.png">
	
	<?php endwhile;  ?>
	
    <div class="container padding-top-bottom">
      <h3 class="main-general__pretitle wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        ACERCA DE
      </h3>
      <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        Nuestros Servicios
      </h2>
      <p class="main-general__description main-general__description--dark">
      Somos una compañía enfocada en el diseño y operación de un modelo sostenible que nos permite que el reciclaje de productos posindustriales se puedan incorporar a la cadena de abastecimiento mediante un modelo de economía circular que incluye recicladores, bodegas e industria; permitiendo reducir el impacto ambiental y generar una transformación social y ambiental.
      <br>  
      Siendo una filial de Enka de Colombia, contamos con el reconocimiento nacional por el aporte al progreso sostenible, a través de la captación, separación, compactación y comercialización de material reciclado, aportando en la disminución de la explotación de los recursos naturales y la generación de empleo.
      </p>
      

      <div class="container-grid">
      <?php //start by fetching the terms for the animal_cat taxonomy
$terms = get_terms( 'servicio', array(
    'orderby'    => 'count',
    'hide_empty' => 0
) );

?>
<?php
// now run a query for each animal family
foreach( $terms as $term ) {
 
    // Define the query
    $args = array(
        'post_type' => 'servicios',
        'servicio' => $term->slug
    );
    $query = new WP_Query( $args );
    ?>
        <div class="main-about__item">
          <a href="<?php echo $url_category = get_term_link( $term ) ;?>
">
<img alt="" src="<?php the_field('agregar_icono',  $term ); ?>">
 <?php echo  $term->name;  ?>
</a>


        </div>
 <?php }


?>
       
      </div>
    </div>
  </section>
  