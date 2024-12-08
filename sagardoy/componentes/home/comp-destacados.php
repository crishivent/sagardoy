

<section class="modulo-15 pt-130 pb-130 mb-130">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-6">
        <h2 class="titulo"><?php _e('Destacado', 'sagardoy'); ?></h2>
      </div>
      <div class="col-12 col-sm-6 col-md-6 text-end">
        <div class="d-inline-flex align-items-center">
          <div id="btns_slider_01" class="btns-slider">
            <a href="#" class="icons ico-flecha-left btn-prev"></a>
            <a href="#" class="icons ico-flecha-right btn-next"></a>
          </div>
        </div>
      </div>
    </div>
    
    <div id="slider_01" class="slider-publicaciones">
      <div class="slick-slider" data-sizes="100vw">

        <?php
        $destacado = array(
          'post_type' => 'post',           // Tipo de post
          'posts_per_page' => -1,          // Mostrar todos los posts
          'meta_key' => 'destacado',       // El nombre del campo personalizado
          'meta_value' => '1',             // Valor del checkbox "destacado"
        );
        
        $des = new WP_Query($destacado);

                    if ($des->have_posts()){
                        $post_count = 0;
                        $bloque = array();

                        // Recorremos todos los posts obtenidos
                        while ($des->have_posts()) : $des->the_post();
                                $bloque[] = $post;
                        endwhile;

                    } 
		  
        foreach ($bloque as $post) : setup_postdata($post); ?>

			 <div>
            <a href="<?php the_permalink(); ?>">
              <div class="line-border">
                <div class="row">
                  <div class="col-7 col-sm-8 col-md-8">
                    <div class="data">
                      <div>
                        <div class="top"><h2 class="subtitulo"><?php echo esc_html(get_the_category()[0]->name); ?></h2> <div class="fecha"><?php echo esc_html(get_the_date('d.m.Y')); ?></div></div>
                        <h2 class="titulo"><?php the_title(); ?></h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-5 col-sm-4 col-md-4">
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumbnail')); ?>" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </a>
          </div>
			   <?php endforeach; wp_reset_postdata(); ?>
           
          </div>
      </div>
    </div>
  </div>
</section>