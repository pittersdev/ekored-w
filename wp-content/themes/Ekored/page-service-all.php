<?php get_header(); ?>

  <section class="general-banner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/banner/Banners_curvas-02.jpg')">
    <div class="general-banner__mask">
      <h2 class="general-banner__title">
        Servicios
      </h2>
    </div>
  </section>
  <section class="services-content">
    <div class="container padding-top-bottom">
      <div class="container-grid">
      <?php //start by fetching the terms for the animal_cat taxonomy
      $terms = get_terms( 'servicio', array( 'orderby'    => 'count', 'hide_empty' => 0
       ) ); ?>
<?php
// now run a query for each animal family
foreach( $terms as $term ) {
    // Define the query
    $args = array( 'post_type' => 'servicios', 'servicio' => $term->slug );
    $query = new WP_Query( $args );
    ?>
        <div class="services-card">
          <span class="service-card__line"></span>
          <div class="services-card__img">
            <img alt="" src="<?php the_field('img_taxo', $term ); ?>">
          </div>
          <div class="services-card__body">
            <a class="services-title" href="<?php echo $url_category = get_term_link( $term ) ;?>

">
<img alt="" src="<?php the_field('agregar_icono',  $term ); ?>">
 <?php echo  $term->name;  ?>
</a>
            <p class="services-description">
            <?php  echo  $term->description;  ?> 
            </p>
          </div>
        </div>		   
    <?php }


?>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>