<section class="main-banner">
<?php $args = array( 'post_type' => 'banner',  'posts_per_page' => 1  ); ?>
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="main-banner__content">
    
      <div class="main-banner__item">
        <div class="main-banner__text wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
          <div class="container">
            <div class="main-banner__title">
              <p>
              <?php the_title(); ?>              
            </p>
            </div>
            <div class="main-banner__subtitle">
                <p>
                 <?php the_content(); ?>         
                </p>
            </div>
            <br>
            <a class="main-general__button" href="<?php bloginfo('url')?>/nosotros">VER MÁS</a>
          </div>
        </div>
       <?php if( get_field('select_imagen') ): ?> 
		   <div class="main-banner__img">
          <img alt="" src="<?php the_field('imagen');?>">
          </div>
		  <?php else: ?>  
		   <div class="main-banner__img">
			   <video autoplay loop src="<?php the_field('video');?>" >
			   
			   </video>
          </div>
		  
        
		   <?php endif; ?>
      </div>
     
    </div>
    <?php endwhile; ?>
  </section>
