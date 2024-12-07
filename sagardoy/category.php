<?php
/*
category
*/


get_header();

?>

<?php get_template_part('componentes/category/comp','cabecera');?>

<!-- post de la categoria -->
<section class="modulo-20 pt-130 pb-130">
    <div class="container">
      <div class="row">




       <?php 
            // Obtener las categorías del post actual
                //$categories = wp_get_post_categories( get_the_ID() );
                $category = get_queried_object();

                if ( $category ) {
                    // Crear consulta para posts relacionados
                    $args = array(
                        'post_type' => 'post',           // Tipo de post
                        'posts_per_page' => -1,          // Mostrar todos los posts
                        'tax_query' => array(           // Agregar filtro por categoría
                            array(
                                'taxonomy' => 'category',  // Tipo de taxonomía (en este caso, categorías)
                                'field'    => 'slug',      // Filtrar por slug
                                'terms'    => $category->slug,   // Slug de la categoría
                                'operator' => 'IN',        // Operador para asegurar que se traigan los posts de esta categoría
                            ),
                        ),
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
                             // Obtener el enlace del post
                            $post_link = get_permalink();
                            ?>

                             <div class="col-12 col-sm-6 col-lg-4 mb-4">
                                <a href="<?php echo esc_url($post_link); ?>">
                                    <div class="line-border">
                                    <div class="row">
                                        <div class="col-5 col-sm-4 col-md-4">
                                        <img src="<?php echo $img; ?>" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-7 col-sm-8 col-md-8">
                                        <div class="data">
                                            <div class="d-flex flex-column justify-content-between">
                                            <div>
                                                <h2 class="subtitulo"><?php echo esc_html($category->name); ?></h2>
                                                <h2 class="titulo"><?php the_title(); ?></h2>
                                            </div>
                                            <div>
                                                <div class="fecha"><?php echo esc_html($post_date); ?></div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                    
                    } else {
                        echo '<p>No hay posts.</p>';
                    }

                    // Restaurar postdata original después de la consulta personalizada
                    wp_reset_postdata();
                }
            
            
            ?>

      </div>
    </div>
  </section>
<!-- fin post de la categoria -->

            <!-- otras publicaciones -->
  <section class="modulo-21 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6">
          <h2 class="titulo"><?php _e('Otras publicaciones', 'sagardoy'); ?></h2>
        </div>
        <div class="col-12 col-sm-6 col-md-6">
          <div class="btns">
                <?php
                    // Obtener la categoría actual
                    $current_category = get_queried_object_id();

                    // Obtener solo 3 categorías, excluyendo la actual
                    $categories = get_categories(array(
                        'number'  => 3,             // Mostrar solo 3 categorías
                        'exclude' => array($current_category), // Excluir la categoría actual
                    ));

                    // Generar enlaces para las categorías seleccionadas
                    foreach ($categories as $category) {
                        $category_link = get_category_link($category->term_id);
                        ?>
                        <a href="<?php echo esc_url($category_link); ?>" class="btn-link">
                            <?php echo esc_html($category->name); ?>
                        </a>
                        <?php
                    }
                    ?>
          </div>
        </div>
      </div>
    </div>
  </section>



<?php get_footer(); ?>