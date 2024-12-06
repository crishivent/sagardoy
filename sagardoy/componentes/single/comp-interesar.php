

<section class="modulo-04 pt-130 pb-130 bg-gris">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-4 col-md-4">
          <div class="titulo">También te puede interesar</div>
          <a href="#" class="btn-ver-mas">VER MÁS NOTICIAS</a>
        </div>
        <div class="col-12 col-sm-2 col-md-2"></div>
        <div class="col-12 col-sm-6 col-md-6">
          <div class="noticias">


           <?php 
            // Obtener las categorías del post actual
                $categories = wp_get_post_categories( get_the_ID() );

                if ( $categories ) {
                    // Crear consulta para posts relacionados
                    $args = array(
                        'category__in'   => $categories,     // Coincidir con las categorías del post actual
                        //'post__not_in'   => array( get_the_ID() ), // Excluir el post actual
                        'posts_per_page' => 4,               // Número de posts relacionados a mostrar
                        'orderby'        => 'rand',
                        'ignore_sticky_posts' => 1           // Ignorar posts fijos
                    );
                    $related_posts = new WP_Query( $args );

                    // Verificar si hay posts relacionados
                    if ( $related_posts->have_posts() ) {
                        while ( $related_posts->have_posts() ) {
                            $related_posts->the_post();
                            $img=$thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
                             $post_categories = get_the_category();
                             $category_name = !empty($post_categories) ? $post_categories[0]->name : 'Sin categoría';

                             // Obtener la fecha de publicación
                             $post_date = get_the_date('d.m.Y'); // Formato: día.mes.año
                            ?>


                          <div class="noticia">
                            <div class="row">
                              <div class="col-7 col-sm-8 col-md-8">
                                <div class="top">
                                  <div class="categoria"><?php echo esc_html($category_name); ?></div>
                                  <div class="fecha"><?php echo esc_html($post_date); ?></div>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="titulo"><?php the_title(); ?></a>
                              </div>
                              <div class="col-5 col-sm-4 col-md-4">
                                <a href="#"><img src="<?php echo $img; ?>" class="image" alt="" /></a>
                              </div>
                            </div>
                          </div>





                            <div class="noticia">
                        <div class="row">
                            <div class="col-8 col-sm-9 col-md-9 d-lg-flex align-items-center">
                            <a href="<?php the_permalink(); ?>" class="titulo"><?php the_title(); ?></a>
                            </div>
                            <div class="col-4 col-sm-3 col-md-3">
                            <a href="#"><img src="<?php echo $img; ?>" class="image" alt="" /></a>
                            </div>
                        </div>
                        </div>
                            <?php
                        }
                    
                    } else {
                        echo '<p>No hay posts relacionados.</p>';
                    }

                    // Restaurar postdata original después de la consulta personalizada
                    wp_reset_postdata();
                }
            
            
            ?>


          </div>
          <a href="#" class="btn-ver-mas mobile">VER MÁS NOTICIAS</a>
        </div>
      </div>
      <div class="row">
        <div class="col-12"><a href="#" class="btn-conoce">Conoce nuestras publicaciones</a></div>
      </div>
    </div>
  </section>