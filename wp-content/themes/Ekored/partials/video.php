<section class="main-video">
    <div class="container padding-top-bottom">
      <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        Nuestros videos
      </h2>
      <div class="d-flex justify-content-center">
        <p class="main-general__description">
        Conoce más sobre nuestra organización 
        </p>
      </div>
      <div class="container-grid">
       <div class="main-video_item wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
          
        <img class="main-video__img" src="http://servertest.sytes.net/Ekored-w/wp-content/uploads/2020/04/DSC_0131-1-min.jpg">
		    <a>
		    <img class="main-video__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_7@3x.png">
				</a>
        <?php $args = array( 'post_type' => 'video' , 'posts_per_page' => 1); ?>
                            <?php $loop = new WP_Query( $args ); ?>
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
		   
        <a type="" class="" data-toggle="modal" data-target="#exampleModal">
  <img class="main-video__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_7@3x.png">
</a>
		    <?php endwhile; ?>
        </div>
		   <div class="main-video_item wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
          <img class="main-video__img" src="http://servertest.sytes.net/Ekored-w/wp-content/uploads/2020/04/Gestión-con-recicladores-min-scaled.jpg">
			 <a>
			   <img class="main-video__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_7@3x.png">
</a>
        <?php $args = array( 'post_type' => 'video' , 'posts_per_page' => 1 ); ?>
                            <?php $loop = new WP_Query( $args ); ?>
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
          
          <a type="" class="" data-toggle="modal" data-target="#exampleModal2">

<img class="main-video__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_7@3x.png">
</a>
			   <?php endwhile; ?>
 
        </div> 
		  
      </div>
    </div>
  </section>

  <!-- Modal 1 -->
<div class="modal  modal-video fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
  <?php the_field('agregar_video');?>

      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal  modal-video fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
         <?php the_field('agregar_video_2');?>
     
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
