
<?php
/*
Template Name: Blog template
*/

get_header();


 ?>

<!-- cabecera -->
<section class="section cabecera-interna cabecera">
    <div class="holder">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-7 col-md-7 border-left">
            <div class="titulo">Actualidad</div>
          </div>
          <div class="col-12 col-sm-5 col-md-5"></div>
        </div>
      </div>
    </div>
    <img src="images/img-cabecera-actualidad.jpg" class="img-fluid" alt="" />
  </section>

<!-- enlaces -->
  <section class="modulo-17">
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <a href="#" class="btn-link activo">Noticias</a> <a href="#" class="btn-link">Publicaciones</a>
        </div>
      </div>
    </div>
  </section>


<!-- buscador -->
<section class="modulo-18 pt-70 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="input-email">
                    <!-- Formulario de búsqueda de WordPress -->
                    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <input type="text" class="input" name="s" value="" placeholder="Buscar" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- primer bloque de noticias -->

<section class="modulo-13 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-2"></div>
            <div class="col-12 col-sm-12 col-lg-8">
                <div class="articulos">
                    <?php

                    $paged = get_query_var('paged') ? get_query_var('paged') : 1; // Obtiene la página actual

                    $args = array(
                        'posts_per_page' => 9, // 9 posts por página
                        'post_status'    => 'publish',
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'paged'          => $paged, // Paginación
                    );

                    $all_posts = new WP_Query($args);

                    if ($all_posts->have_posts()){
                        $post_count = 0;
                        $block1 = array();
                        $block2 = array();
                        $block3 = array();

                        // Recorremos todos los posts obtenidos
                        while ($all_posts->have_posts()) : $all_posts->the_post();
                            $post_count++;

                            if ($post_count <= 3) {
                                $block1[] = $post;  // Primer bloque (posts 1-3)
                            } elseif ($post_count <= 6) {
                                $block2[] = $post;  // Segundo bloque (posts 4-6)
                            } else {
                                $block3[] = $post;  // Tercer bloque (posts 7-9)
                            }
                        endwhile;

                    }
                        






                    //$paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    //$posts_per_page = 9; // Número de publicaciones por bloque

                     /*   $args = array(
                        'posts_per_page' => $posts_per_page,
                        'post_status'    => 'publish',
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'offset'         => $paged, // Normal offset
                        );*/
                    

                    

                    //$latest_posts = new WP_Query($args);

                    // Comprobamos si hay posts
                    if ($latest_posts->have_posts()) :
                        while ($latest_posts->have_posts()) : $latest_posts->the_post();
                            // Obtener la URL de la miniatura del post
                            $img = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                            // Obtener las categorías del post
                            $post_categories = get_the_category();
                            $category_name = !empty($post_categories) ? $post_categories[0]->name : 'Sin categoría';
                            // Obtener la fecha de publicación
                            $post_date = get_the_date('d.m.Y');
                            // Enlace del post
                            $post_link = get_permalink();
                    ?>
                            <div class="articulo">
                                <div class="row">
                                    <div class="col-7 col-sm-8 col-md-8">
                                        <div class="top">
                                            <!-- Mostrar la categoría del post -->
                                            <div class="categoria"><?php echo esc_html($category_name); ?></div>
                                            <!-- Mostrar la fecha del post -->
                                            <div class="fecha"><?php echo esc_html($post_date); ?></div>
                                        </div>
                                        <!-- Enlace y título del post -->
                                        <a href="<?php echo esc_url($post_link); ?>" class="titulo"><?php the_title(); ?></a>
                                    </div>
                                    <div class="col-5 col-sm-4 col-md-4">
                                        <!-- Imagen destacada del post -->
                                        <a href="<?php echo esc_url($post_link); ?>"><img src="<?php echo esc_url($img); ?>" class="img-fluid" alt="<?php the_title(); ?>" /></a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    else :
                        echo '<p>No hay publicaciones.</p>';
                    endif;

                    // Restaurar los datos del post original
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-2"></div>
        </div>
    </div>
</section>


<!-- Destacados -->
<section class="modulo-15 pt-130 pb-130 mb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6">
          <h2 class="titulo">Destacado</h2>
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
          <div>
            <a href="#">
              <div class="line-border">
                <div class="row">
                  <div class="col-7 col-sm-8 col-md-8">
                    <div class="data">
                      <div>
                        <div class="top"><h2 class="subtitulo">NOTICIAS</h2> <div class="fecha">25.12.2024</div></div>
                        <h2 class="titulo">Dolor magna diam nunc sed in sit leo. Nec netus a dui ipsum sit diam quam. Erat massa.</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-5 col-sm-4 col-md-4">
                    <img src="images/img-publicaciones-04.jpg" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div class="line-border">
                <div class="row">
                  <div class="col-7 col-sm-8 col-md-8">
                    <div class="data">
                      <div>
                        <div class="top"><h2 class="subtitulo">NOTICIAS</h2> <div class="fecha">25.12.2024</div></div>
                        <h2 class="titulo">Dolor magna diam nunc sed in sit leo. Nec netus a dui ipsum sit diam quam. Erat massa.</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-5 col-sm-4 col-md-4">
                    <img src="images/img-publicaciones-05.jpg" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div class="line-border">
                <div class="row">
                  <div class="col-7 col-sm-8 col-md-8">
                    <div class="data">
                      <div>
                        <div class="top"><h2 class="subtitulo">NOTICIAS</h2> <div class="fecha">25.12.2024</div></div>
                        <h2 class="titulo">Dolor magna diam nunc sed in sit leo. Nec netus a dui ipsum sit diam quam. Erat massa.</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-5 col-sm-4 col-md-4">
                    <img src="images/img-publicaciones-06.jpg" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div class="line-border">
                <div class="row">
                  <div class="col-7 col-sm-8 col-md-8">
                    <div class="data">
                      <div>
                        <div class="top"><h2 class="subtitulo">NOTICIAS</h2> <div class="fecha">25.12.2024</div></div>
                        <h2 class="titulo">Dolor magna diam nunc sed in sit leo. Nec netus a dui ipsum sit diam quam. Erat massa.</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-5 col-sm-4 col-md-4">
                    <img src="images/img-publicaciones-04.jpg" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- segundo bloque -->
  <section class="modulo-13 pt-70 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-2"></div>
            <div class="col-12 col-sm-12 col-lg-8">
                <div class="articulos">
                    <?php
                    // Realizamos una consulta para obtener los 9 posts (todos) de la página actual
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1; // Obtener la página actual
                    $posts_per_page = 9; // 9 posts por página
                    
                    // Ajustamos la consulta para obtener los 9 posts de la página actual
                    $args = array(
                        'posts_per_page' => $posts_per_page, // Obtener los 9 posts
                        'post_status'    => 'publish',
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'paged'          => $paged,
                    );

                    $all_posts = new WP_Query($args);

                    // Comprobamos si hay posts
                    if ($all_posts->have_posts()) :
                        $post_count = 0;
                        $block2 = array(); // Array para el segundo bloque

                        // Recorrer todos los posts obtenidos
                        while ($all_posts->have_posts()) : $all_posts->the_post();
                            $post_count++;

                            // Dividimos los posts en bloques
                            if ($post_count < 4) { // Del post 0 al 6
                                $block[] = $post; // Añadimos los posts al segundo bloque
                            }
                        endwhile;

                        // Mostrar los posts del segundo bloque
                        foreach ($block as $post) : setup_postdata($post); ?>
                            <div class="articulo">
                                <div class="row">
                                    <div class="col-7 col-sm-8 col-md-8">
                                        <div class="top">
                                            <!-- Mostrar la categoría del post -->
                                            <div class="categoria"><?php echo esc_html(get_the_category()[0]->name); ?></div>
                                            <!-- Mostrar la fecha del post -->
                                            <div class="fecha"><?php echo esc_html(get_the_date('d.m.Y')); ?></div>
                                        </div>
                                        <!-- Enlace y título del post -->
                                        <a href="<?php the_permalink(); ?>" class="titulo"><?php the_title(); ?></a>
                                    </div>
                                    <div class="col-5 col-sm-4 col-md-4">
                                        <!-- Imagen destacada del post -->
                                        <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumbnail')); ?>" class="img-fluid" alt="<?php the_title(); ?>" /></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; wp_reset_postdata(); 
                    else :
                        echo '<p>No hay más publicaciones.</p>';
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-2"></div>
        </div>
    </div>
</section>


<!-- Segundo bloque -->
<section class="modulo-13 pt-70 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-2"></div>
            <div class="col-12 col-sm-12 col-lg-8">
                <div class="articulos">
                    <?php
                    // Realizamos una consulta para obtener los 9 posts (todos) de la página actual
                   /* $paged = get_query_var('paged') ? get_query_var('paged') : 1; // Obtener la página actual
                    $posts_per_page = 9; // 9 posts por página
                    
                    // Ajustamos la consulta para obtener los 9 posts de la página actual
                    $args2 = array(
                        'posts_per_page' => $posts_per_page, // Obtener los 9 posts
                        'post_status'    => 'publish',
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'paged'          => $paged,
                    );

                    $all_posts = new WP_Query($args2);*/

                    // Comprobamos si hay posts
                    if ($all_posts->have_posts()) :
                        $post_count = 0;
                        $block2 = array(); // Array para el segundo bloque

                        // Recorrer todos los posts obtenidos
                        while ($all_posts->have_posts()) : $all_posts->the_post();
                            $post_count++;

                            // Dividimos los posts en bloques
                            if ($post_count > 3 && $post_count <= 6) { // Del post 4 al 6
                                $block2[] = $post; // Añadimos los posts al segundo bloque
                            }
                        endwhile;

                        // Mostrar los posts del segundo bloque
                        foreach ($block2 as $post) : setup_postdata($post); ?>
                            <div class="articulo">
                                <div class="row">
                                    <div class="col-7 col-sm-8 col-md-8">
                                        <div class="top">
                                            <!-- Mostrar la categoría del post -->
                                            <div class="categoria"><?php echo esc_html(get_the_category()[0]->name); ?></div>
                                            <!-- Mostrar la fecha del post -->
                                            <div class="fecha"><?php echo esc_html(get_the_date('d.m.Y')); ?></div>
                                        </div>
                                        <!-- Enlace y título del post -->
                                        <a href="<?php the_permalink(); ?>" class="titulo"><?php the_title(); ?></a>
                                    </div>
                                    <div class="col-5 col-sm-4 col-md-4">
                                        <!-- Imagen destacada del post -->
                                        <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumbnail')); ?>" class="img-fluid" alt="<?php the_title(); ?>" /></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; wp_reset_postdata(); 
                    else :
                        echo '<p>No hay más publicaciones.</p>';
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-2"></div>
        </div>
    </div>
</section>





<!-- suscribete -->
<section class="modulo-16">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-2"></div>
        <div class="col-12 col-sm-12 col-lg-8 text-center">
          <div class="bg">
            <div class="row">
              <div class="col-12 col-sm-1 col-lg-2"></div>
              <div class="col-12 col-sm-10 col-lg-8">
                <h2 class="titulo"><u>Suscríbete</u> a la última hora en información y actualidad Jurídica</h2>
                <div class="input-email">
                  <input class="input" value="" placeholder="Email"></input>
                  <a href="#" class="btn-link"></a>
                </div>
                <div class="politica">
                  <label class="checkbox-holder">
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                  </label>
                  <div class="label">Enviando este formulario estoy aceptando la <a href="#">política de privacidad</a></div>
                </div>
              </div>
              <div class="col-12 col-sm-1 col-lg-2"></div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-2"></div>
      </div>
    </div>
  </section>



<!-- tercer bloque -->
 <!-- Tercer bloque -->
<section class="modulo-13 pt-70 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-2"></div>
            <div class="col-12 col-sm-12 col-lg-8">
                <div class="articulos">
                    <?php
                    // Realizamos una consulta para obtener los 9 posts (todos) de la página actual
                   /* $paged = get_query_var('paged') ? get_query_var('paged') : 1; // Obtener la página actual
                    $posts_per_page = 9; // 9 posts por página
                    
                    // Ajustamos la consulta para obtener los 9 posts de la página actual
                    $args3 = array(
                        'posts_per_page' => $posts_per_page, // Obtener los 9 posts
                        'post_status'    => 'publish',
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'paged'          => $paged,
                    );

                    $all_posts = new WP_Query($args3);*/

                    // Comprobamos si hay posts
                    if ($all_posts->have_posts()) :
                        $post_count = 0;
                        $block3 = array(); // Array para el tercer bloque

                        // Recorrer todos los posts obtenidos
                        while ($all_posts->have_posts()) : $all_posts->the_post();
                            $post_count++;

                            // Dividimos los posts en bloques
                            if ($post_count > 6 && $post_count <= 9) { // Del post 7 al 9
                                $block3[] = $post; // Añadimos los posts al tercer bloque
                            }
                        endwhile;

                        // Mostrar los posts del tercer bloque
                        foreach ($block3 as $post) : setup_postdata($post); ?>
                            <div class="articulo">
                                <div class="row">
                                    <div class="col-7 col-sm-8 col-md-8">
                                        <div class="top">
                                            <!-- Mostrar la categoría del post -->
                                            <div class="categoria"><?php echo esc_html(get_the_category()[0]->name); ?></div>
                                            <!-- Mostrar la fecha del post -->
                                            <div class="fecha"><?php echo esc_html(get_the_date('d.m.Y')); ?></div>
                                        </div>
                                        <!-- Enlace y título del post -->
                                        <a href="<?php the_permalink(); ?>" class="titulo"><?php the_title(); ?></a>
                                    </div>
                                    <div class="col-5 col-sm-4 col-md-4">
                                        <!-- Imagen destacada del post -->
                                        <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumbnail')); ?>" class="img-fluid" alt="<?php the_title(); ?>" /></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; wp_reset_postdata(); 
                    else :
                        echo '<p>No hay más publicaciones.</p>';
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-2"></div>
        </div>
    </div>
</section>






<!-- paginacion -->
<section class="modulo-19 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <div class="d-flex flex-row align-items-center justify-content-center gap-1">
            <?php
            // Paginación de WordPress
            global $wp_query;

            // Configurar la paginación
            $big = 999999999; // Necesario para que funcione correctamente en URLs con parámetros
            $args = array(
                'base'      => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                'format'    => '',
                'current'   => max(1, $paged),
                'total'     => $latest_posts->max_num_pages, // Basado en el total del primer bloque
                'prev_text' => __('&laquo; Anterior'),
                'next_text' => __('Siguiente &raquo;'),
                'type'      => 'array',
            );

            // Mostrar la paginación
            $pagination_links = paginate_links($args);

            if ( !empty( $pagination_links ) ) {
                foreach ( $pagination_links as $link ) {
                    // Verificar que el enlace no contenga "previous" o "next" en las clases
                    if ( strpos($link, 'prev') === false && strpos($link, 'next') === false ) {
                        echo $link;
                    }
                }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
</section>



<?php get_footer(); ?>