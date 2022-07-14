<?php get_header(); ?>

  <section class="general-banner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/servicios/image@3x.png')">
    <div class="general-banner__mask">
      <h2 class="general-banner__title">
        Prensa
      </h2>
    </div>
  </section>
  <section class="post-detail">
    <div class="container padding-top-bottom">
      <div class="container-grid">
    <?php if ( have_posts() ) : ?>
      <div class="main-noticias__grid">
        <?php  $args = array(
                's' => $_POST['cadena'],
                'post_type' => 'post',
             
              );
              $query = new WP_query($args);
              ?>
        <?php while ( $query -> have_posts() ) :  $query ->the_post(); 
		   $query -> the_post(); 
           $post_id = get_the_ID();
		  ?>
        <div class="publications-notice__item wow animated fadeInRight" style="visibility: visible; animation-delay: .1s  ;">
          <a href="<?php the_permalink(); ?>">
            <div class="publications-notice__img">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>">
              <div class="publications-notice__etiq">
                <span>Eco</span>
              </div>
            </div>
            <div class="publications-notice__body">
              <div class="publications-notice__info">
                <div class="publications-notice__user">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/publicaciones/user-3@3x.png"> <?php the_author(); ?>
                </div>
                <div class="publications-notice__date">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/publicaciones/calendar-1@3x.png">
                  <?php echo get_the_time('j'); ?>
                 <?php echo get_the_time('M'); ?>
                 <?php echo get_the_time('Y'); ?>
                </div>
              </div>
              <h2 class="publications-notice__title">
              <?php the_title(); ?>
              </h2>
              <p class="main-general__description">
              <?php echo excerpt(20); ?>        
              </p>
              <a class="publications-notice__btn" href="<?php the_permalink(); ?>">Read more →</a>
            </div>
          </a>
        </div>
		  
          <?php endwhile; ?>
		
          </div>
		
          <?php else:  ?>
          <h2>
          No se han encontrado Noticias. Prueba una búsqueda diferente.
        </h2>
        <?php endif;  ?>
		     <div class="post-detail__sidebar">
          
            <?php get_sidebar(); ?>
        </div>
          </div>
          </div>
  </section>
  <?php get_footer(); ?>

<style>
.post-detail .container-grid {
	grid-template-columns: 60% 1fr;}
	
	.publications-notice__item {
		height: 29rem;
	}
</style>