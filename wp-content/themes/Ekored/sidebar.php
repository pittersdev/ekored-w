	<form action="<?php bloginfo('url'); ?>">
            <div class="post-detail__search">
          
				<input  name="s" type="search" placeholder="Noticias" aria-label="Search">
                <input type="submit" value="Buscar" class="button-search">
             
            </div>
          </form>
          <p class="post-sidebar__title">
            Noticias recientes
          </p>
	 
          <ul class="site-map">
			  <?php $args = array( 'post_type' => 'post',
      'posts_per_page' => 4); ?>
    <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post();?>
            <li>
             <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
			   <?php endwhile; ?>
          </ul>
          <p class="post-sidebar__title">
            Comentarios
          </p>
          <ul class="site-map comment">
            
	<?php $args = array( 'post_type' => 'comentarios',
      'posts_per_page' => 4 ); ?>
    <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post();?>
			  <li>
				   <?php the_excerpt(); ?>
			
            </li>
             <?php endwhile; ?>
          </ul>
          <p class="post-sidebar__title">
            Noticias
          </p>
        
          <ul class="site-map">
			   <?php $args = array( 'post_type' => 'post',
      'posts_per_page' => 4 ,  'order' => 'ASC'); ?>
    <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post();?>
            <li>
             <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
			   <?php endwhile; ?>
          </ul>
       