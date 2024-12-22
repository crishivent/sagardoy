<section class="modulo-04 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-4 col-md-4">
         <!-- <div class="subtitulo"><?php //_e('Últimas noticias', 'sagardoy'); ?></div>-->
          <div class="titulo"><?php _e('Lo último, primero en Sagardoy', 'sagardoy'); ?></div>
          <a href="<?php  get_permalink(get_option('page_for_posts')) ?>" class="btn-ver-mas"><?php _e('VER MÁS NOTICIAS', 'sagardoy'); ?></a>
        </div>
        <div class="col-12 col-sm-2 col-md-2"></div>
        <div class="col-12 col-sm-6 col-md-6">
          <div class="noticias">
            <?php 

            // Query para obtener las últimas 3 noticias
              $query = new WP_Query([
                  'post_type' => 'post',
                  'posts_per_page' => 3,
              ]);

              if ($query->have_posts()) {
                  while ($query->have_posts()) {
                      $query->the_post();
                      $categoria = get_the_category();
                      $categoria_nombre = $categoria ? $categoria[0]->name : '';
                      $fecha = get_the_date('d.m.Y');
                      $titulo = get_the_title();
                      $link = get_permalink();
                      $imagen = get_the_post_thumbnail_url(get_the_ID(), 'medium');

                      echo '<div class="noticia">';
                      echo '<div class="row">';
                      echo '<div class="col-7 col-sm-8 col-md-8">';
                      echo '<div class="top">';
                      echo '<div class="categoria">' . esc_html($categoria_nombre) . '</div>';
                      echo '<div class="fecha">' . esc_html($fecha) . '</div>';
                      echo '</div>';
                      echo '<a href="' . esc_url($link) . '" class="titulo">' . esc_html($titulo) . '</a>';
                      echo '</div>';
                      echo '<div class="col-5 col-sm-4 col-md-4">';
                      echo '<a href="' . esc_url($link) . '"><img src="' . esc_url($imagen) . '" class="image" alt="' . esc_attr($titulo) . '" /></a>';
                      echo '</div>';
                      echo '</div>';
                      echo '</div>';
                  }
                  wp_reset_postdata();
              } else {
                  echo '<p>No hay noticias recientes.</p>';
              }
            ?>
          </div>
          <a href="<?php  get_permalink(get_option('page_for_posts')) ?>" class="btn-ver-mas mobile"><?php _e('VER MÁS NOTICIAS', 'sagardoy'); ?></a>
        </div>
      </div>
    </div>
  </section>