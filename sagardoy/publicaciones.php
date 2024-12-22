<?php
/*
Template Name: Publicaciones
*/

get_header();


 ?>

<!-- cabecera -->
  <section class="section cabecera-interna cabecera">
    <div class="holder">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-7 col-md-7 border-left">
            <div class="titulo"><?php _e('Actualidad', 'sagardoy'); ?></div>
          </div>
          <div class="col-12 col-sm-5 col-md-5"></div>
        </div>
      </div>
    </div>
    <img src="https://sagardoy.neuronalcode.io/wp-content/uploads/2024/12/img-cabecera-actualidad.jpg" class="img-fluid" alt="" />
  </section>


  <!-- selector -->
  <section class="modulo-17 mb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <a href="https://sagardoy.neuronalcode.io/blog/" class="btn-link"><?php _e('Noticias', 'sagardoy'); ?></a> <a href="https://sagardoy.neuronalcode.io/publicaciones/" class="btn-link activo"><?php _e('Publicaciones', 'sagardoy'); ?></a>
        </div>
      </div>
    </div>
  </section>

  <!-- categoria 1 -->

<?php 
$category = get_term_by( 'slug', 'actualidad', 'category' );
?>

<section class="modulo-23 pb-130">
    <div class="container d-flex flex-column">
      <div class="row">
        <div class="col-12 col-sm-7 col-md-7">
          <h2 class="titulo mb-4"><?php echo $category_name = $category->name;?></h2>
        </div>
        <div class="col-12 col-sm-5 col-md-5"></div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6">
          <p class="texto"><?php echo $category_description = $category->description;?></p>
        </div>
        <div class="col-12 col-sm-6 col-md-6"></div>
      </div>
      <div class="row mtmb">
        <div class="col-12 col-sm-6 col-md-6"></div>
        <div class="col-12 col-sm-6 col-md-6 text-end">
          <div class="d-inline-flex align-items-center gap-3">
            <a href="<?php echo get_term_link( $category ) ?>" class="btn-ver-mas"><?php _e('Ver todas', 'sagardoy'); ?> <?php //echo $category->count?></a>
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
        $actualidad = array(
                'post_type' => 'post',           // Tipo de post
                'posts_per_page' => -1,          // Mostrar todos los posts
                'tax_query' => array(           // Agregar filtro por categoría
                    array(
                        'taxonomy' => 'category',  // Tipo de taxonomía (en este caso, categorías)
                        'field'    => 'slug',      // Filtrar por slug
                        'terms'    => 'actualidad',   // Slug de la categoría
                        'operator' => 'IN',        // Operador para asegurar que se traigan los posts de esta categoría
                    ),
                ),
            );

              $act = new WP_Query($actualidad);

                    if ($act->have_posts()){
                        $post_count = 0;
                        $bloque = array();

                        // Recorremos todos los posts obtenidos
                        while ($act->have_posts()) : $act->the_post();
                                $bloque[] = $post;
                        endwhile;

                    } 
		  
        foreach ($bloque as $post) : setup_postdata($post); ?>

         <div>
            <a href="<?php the_permalink(); ?>">
              <div class="line-border">
                <div class="row">
                  <div class="col-5 col-sm-4 col-lg-4">
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumbnail')); ?>" class="img-fluid" alt="">
                  </div>
                  <div class="col-7 col-sm-8 col-lg-8">
                    <div class="data">
                      <div class="d-flex flex-column justify-content-between">
                        <div>
                          <h2 class="subtitulo"><?php echo esc_html(get_the_category()[0]->name); ?></h2>
                          <h2 class="titulo"><?php the_title(); ?></h2>
                        </div>
                        <div>
                          <div class="fecha"><?php echo esc_html(get_the_date('d.m.Y')); ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>

        </div>
      </div>
    </div>
  </section>

  <!-- Categoria 2 -->
<?php 
$category2 = get_term_by( 'slug', 'eventos', 'category' );
?>
  <section class="modulo-23 pb-130">
    <div class="container d-flex flex-column">
      <div class="row">
        <div class="col-12 col-sm-7 col-md-7">
          <h2 class="titulo mb-4"><?php echo $category_name = $category2->name;?></h2>
        </div>
        <div class="col-12 col-sm-5 col-md-5"></div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6">
          <p class="texto"><?php echo $category_description = $category2->description;?></p>
        </div>
        <div class="col-12 col-sm-6 col-md-6"></div>
      </div>
      <div class="row mtmb">
        <div class="col-12 col-sm-6 col-md-6"></div>
        <div class="col-12 col-sm-6 col-md-6 text-end">
          <div class="d-inline-flex align-items-center gap-3">
            <a href="<?php echo get_term_link( $category2 ) ?>" class="btn-ver-mas"><?php _e('Ver todas', 'sagardoy'); ?> <?php //echo $category2->count?></a>
            <div id="btns_slider_02" class="btns-slider">
              <a href="#" class="icons ico-flecha-left btn-prev"></a>
              <a href="#" class="icons ico-flecha-right btn-next"></a>
            </div>
          </div>
        </div>
      </div>
      <div id="slider_02" class="slider-publicaciones">
        <div class="slick-slider" data-sizes="100vw">
           <?php 
        $eventos = array(
                'post_type' => 'post',           // Tipo de post
                'posts_per_page' => -1,          // Mostrar todos los posts
                'tax_query' => array(           // Agregar filtro por categoría
                    array(
                        'taxonomy' => 'category',  // Tipo de taxonomía (en este caso, categorías)
                        'field'    => 'slug',      // Filtrar por slug
                        'terms'    => 'eventos',   // Slug de la categoría
                        'operator' => 'IN',        // Operador para asegurar que se traigan los posts de esta categoría
                    ),
                ),
            );

              $even = new WP_Query($eventos);

                    if ($even->have_posts()){
                        $post_count = 0;
                        $bloque2 = array();

                        // Recorremos todos los posts obtenidos
                        while ($even->have_posts()) : $even->the_post();
                                $bloque2[] = $post;
                        endwhile;

                    } 
		  
        foreach ($bloque2 as $post) : setup_postdata($post); ?>

         <div>
            <a href="<?php the_permalink(); ?>">
              <div class="line-border">
                <div class="row">
                  <div class="col-5 col-sm-4 col-lg-4">
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumbnail')); ?>" class="img-fluid" alt="">
                  </div>
                  <div class="col-7 col-sm-8 col-lg-8">
                    <div class="data">
                      <div class="d-flex flex-column justify-content-between">
                        <div>
                          <h2 class="subtitulo"><?php echo esc_html(get_the_category()[0]->name); ?></h2>
                          <h2 class="titulo"><?php the_title(); ?></h2>
                        </div>
                        <div>
                          <div class="fecha"><?php echo esc_html(get_the_date('d.m.Y')); ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>
          
          
         
        </div>
      </div>
    </div>
  </section>


  <!-- Categoria 3 -->
   <?php 
$category3 = get_term_by( 'slug', 'novedades-normativas', 'category' );
?>
<section class="modulo-23 pb-130">
    <div class="container d-flex flex-column">
      <div class="row">
        <div class="col-12 col-sm-7 col-md-7">
          <h2 class="titulo mb-4"><?php echo $category_name = $category3->name;?></h2>
        </div>
        <div class="col-12 col-sm-5 col-md-5"></div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6">
          <p class="texto"><?php echo $category_description = $category3->description;?></p>
        </div>
        <div class="col-12 col-sm-6 col-md-6"></div>
      </div>
      <div class="row mtmb">
        <div class="col-12 col-sm-6 col-md-6"></div>
        <div class="col-12 col-sm-6 col-md-6 text-end">
          <div class="d-inline-flex align-items-center gap-3">
            <a href="<?php echo get_term_link( $category3 ) ?>" class="btn-ver-mas"><?php _e('Ver todas', 'sagardoy'); ?> <?php //echo $category3->count?></a>
            <div id="btns_slider_03" class="btns-slider">
              <a href="#" class="icons ico-flecha-left btn-prev"></a>
              <a href="#" class="icons ico-flecha-right btn-next"></a>
            </div>
          </div>
        </div>
      </div>
      <div id="slider_03" class="slider-publicaciones">
        <div class="slick-slider" data-sizes="100vw">


        <?php 
        $normativas = array(
                'post_type' => 'post',           // Tipo de post
                'posts_per_page' => -1,          // Mostrar todos los posts
                'tax_query' => array(           // Agregar filtro por categoría
                    array(
                        'taxonomy' => 'category',  // Tipo de taxonomía (en este caso, categorías)
                        'field'    => 'slug',      // Filtrar por slug
                        'terms'    => 'novedades-normativas',   // Slug de la categoría
                        'operator' => 'IN',        // Operador para asegurar que se traigan los posts de esta categoría
                    ),
                ),
            );

              $norma = new WP_Query($normativas);

                    if ($norma->have_posts()){
                        $post_count = 0;
                        $bloque3 = array();

                        // Recorremos todos los posts obtenidos
                        while ($norma->have_posts()) : $norma->the_post();
                                $bloque3[] = $post;
                        endwhile;

                    } 
		  
        foreach ($bloque3 as $post) : setup_postdata($post); ?>

         <div>
            <a href="<?php the_permalink(); ?>">
              <div class="line-border">
                <div class="row">
                  <div class="col-5 col-sm-4 col-lg-4">
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumbnail')); ?>" class="img-fluid" alt="">
                  </div>
                  <div class="col-7 col-sm-8 col-lg-8">
                    <div class="data">
                      <div class="d-flex flex-column justify-content-between">
                        <div>
                          <h2 class="subtitulo"><?php echo esc_html(get_the_category()[0]->name); ?></h2>
                          <h2 class="titulo"><?php the_title(); ?></h2>
                        </div>
                        <div>
                          <div class="fecha"><?php echo esc_html(get_the_date('d.m.Y')); ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>
          




        </div>
      </div>
    </div>
  </section>





<!-- Categoria 4 -->

  <?php 
$category4 = get_term_by( 'slug', 'sentencias', 'category' );
?>


<section class="modulo-23 pb-130">
    <div class="container d-flex flex-column">
      <div class="row">
        <div class="col-12 col-sm-7 col-md-7">
          <h2 class="titulo mb-4"><?php echo $category_name = $category4->name;?></h2>
        </div>
        <div class="col-12 col-sm-5 col-md-5"></div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6">
          <p class="texto"><?php echo $category_description = $category4->description;?></p>
        </div>
        <div class="col-12 col-sm-6 col-md-6"></div>
      </div>
      <div class="row mtmb">
        <div class="col-12 col-sm-6 col-md-6"></div>
        <div class="col-12 col-sm-6 col-md-6 text-end">
          <div class="d-inline-flex align-items-center gap-3">
            <a href="<?php echo get_term_link( $category4 ) ?>" class="btn-ver-mas"><?php _e('Ver todas', 'sagardoy'); ?> <?php //echo $category4->count?></a>
            <div id="btns_slider_04" class="btns-slider">
              <a href="#" class="icons ico-flecha-left btn-prev"></a>
              <a href="#" class="icons ico-flecha-right btn-next"></a>
            </div>
          </div>
        </div>
      </div>
      <div id="slider_04" class="slider-publicaciones">
        <div class="slick-slider" data-sizes="100vw">


        <?php 
        $sentencias = array(
                'post_type' => 'post',           // Tipo de post
                'posts_per_page' => -1,          // Mostrar todos los posts
                'tax_query' => array(           // Agregar filtro por categoría
                    array(
                        'taxonomy' => 'category',  // Tipo de taxonomía (en este caso, categorías)
                        'field'    => 'slug',      // Filtrar por slug
                        'terms'    => 'sentencias',   // Slug de la categoría
                        'operator' => 'IN',        // Operador para asegurar que se traigan los posts de esta categoría
                    ),
                ),
            );

              $sent = new WP_Query($sentencias);

                    if ($sent->have_posts()){
                        $post_count = 0;
                        $bloque4 = array();

                        // Recorremos todos los posts obtenidos
                        while ($sent->have_posts()) : $sent->the_post();
                                $bloque4[] = $post;
                        endwhile;

                    } 
		  
        foreach ($bloque4 as $post) : setup_postdata($post); ?>

         <div>
            <a href="<?php the_permalink(); ?>">
              <div class="line-border">
                <div class="row">
                  <div class="col-5 col-sm-4 col-lg-4">
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumbnail')); ?>" class="img-fluid" alt="">
                  </div>
                  <div class="col-7 col-sm-8 col-lg-8">
                    <div class="data">
                      <div class="d-flex flex-column justify-content-between">
                        <div>
                          <h2 class="subtitulo"><?php echo esc_html(get_the_category()[0]->name); ?></h2>
                          <h2 class="titulo"><?php the_title(); ?></h2>
                        </div>
                        <div>
                          <div class="fecha"><?php echo esc_html(get_the_date('d.m.Y')); ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>

        </div>
      </div>
    </div>
  </section>




  <?php get_template_part('componentes/generales/comp','newsletter');?>





<?php get_footer(); ?>