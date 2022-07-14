<section class="main-metrics">
    <div class="container">
      <div class="container-grid">
      <?php $args = array( 'post_type' => 'procesos', 'posts_per_page' => 5, 'order' => 'asc'); ?>
             <?php $loop = new WP_Query( $args ); ?>
             <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="main-metrics__item wow animated fadeInRight" style="visibility: visible; animation-delay: .1s  ;">
          <img src=" <?php the_field('metrica');?>">
          <p class="main-metrics__number">
          <?php the_field('cantidad');?>
          </p>
          <p class="main-metrics__description">
            <?php the_title(); ?>
          </p>
        </div>
        <?php endwhile; ?>
      </div>
      <div class="main-metrics__btn">
        <p>Conoce nuestro proceso de calidad</p>
        <a class="main-general__button" href="<?php bloginfo('url')?>/nosotros">Aqui</a>
      </div>
    </div>
  </section>