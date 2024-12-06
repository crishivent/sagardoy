<?php
/*
Single de post
*/


get_header();


//Cabecera
set_query_var("titulo", get_the_title());
set_query_var("tags", get_the_tags());
set_query_var("fecha", get_the_date( 'd.m.Y' ));


?>

<!-- Cabecera ok-->
<?php get_template_part('componentes/single/comp','cabecera');?>

<!-- the content -->
<section class="modulo-36 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-6">
          <?php the_content();?>

          <div class="btns-redes">
            <div class="titulo"><?php _e('Compartir', 'sagardoy'); ?></div>
            <div class="btns-holder">
              <div class="btns">
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>" class="btn-linkedin"></a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" class="btn-facebook"></a>
                <a href="https://wa.me/?text=<?php the_permalink();?>" class="btn-whatsapp"></a>
              </div>
              <a href="javascript:void(0);" onclick="copyLink('<?php echo esc_url( the_permalink() ); ?>', event.target)" class="btn-copiar copy-link"><?php _e('Copiar Link', 'sagardoy'); ?></a>
            </div>
          </div>

        </div>
        <div class="col-12 col-sm-12 col-lg-1"></div>



        <div class="col-12 col-sm-4 col-lg-4 d-none d-lg-block">
          <div class="noticias-relacionadas">
            <div class="titulo"><?php _e('Noticias relacionadas', 'sagardoy'); ?></div>
            <?php 
            // Obtener las categorías del post actual
                $categories = wp_get_post_categories( get_the_ID() );

                if ( $categories ) {
                    // Crear consulta para posts relacionados
                    $args = array(
                        'category__in'   => $categories,     // Coincidir con las categorías del post actual
                        'post__not_in'   => array( get_the_ID() ), // Excluir el post actual
                        'posts_per_page' => 4,               // Número de posts relacionados a mostrar
                        'ignore_sticky_posts' => 1           // Ignorar posts fijos
                    );
                    $related_posts = new WP_Query( $args );

                    // Verificar si hay posts relacionados
                    if ( $related_posts->have_posts() ) {
                        while ( $related_posts->have_posts() ) {
                            $related_posts->the_post();
                            $img=$thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
                            ?>
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

          <div class="newletter">
            <div class="title">Suscríbete a la última hora en información y actualidad Jurídica</div>
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

        </div>
        <div class="col-12 col-sm-12 col-lg-1"></div>
      </div>
    </div>
  </section>




<?php get_footer(); ?>