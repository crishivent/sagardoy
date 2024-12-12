 <?php 
 $logomenu = get_field('logo_menu', 'option');

//Submenu equipo
$titulo_izquierda_equipo = get_field('titulo_izquierda_equipo', 'option');
$descripcion_izquierda_equipo = get_field('descripcion_izquierda_equipo', 'option');
$titulo_derecha_equipo = get_field('titulo_derecha_equipo', 'option');
$nombre_enlace_1 = get_field('nombre_enlace_1', 'option');
$enlace_1_submenu = get_field('enlace_1_submenu', 'option');
$nombre_enlace_2 = get_field('nombre_enlace_2', 'option');
$enlace_2_submenu = get_field('enlace_2_submenu', 'option');


// Submenu actualidad
$titulo_actualidad_izquierdo = get_field('titulo_actualidad_izquierdo', 'option');
$descripcion_izquierda_submenu_actualidad = get_field('descripcion_izquierda_submenu_actualidad', 'option');
$titulo_enlace_derecho_actualidad = get_field('titulo_enlace_derecho_actualidad', 'option');
$enlace_actualidad_1 = get_field('enlace_actualidad_1', 'option');
$titulo_segundo_enlace = get_field('titulo_segundo_enlace', 'option');
$enlace_actualidad_2 = get_field('enlace_actualidad_2', 'option');
$titulo_bloque_noticias_submenu = get_field('titulo_bloque_noticias_submenu', 'option');


 
 ?>
 
 <nav class="navbar navbar-expand-lg <?php echo (is_page('contacto') || is_singular('sede')) ? 'texto-gris' : ''; ?>">
    <div class="menu-content">
      <a class="navbar-brand d-block d-lg-none" href="/"><img src="<?php echo $logomenu; ?>" class="logo" alt="" /></a>
      <div id="main-nav" class="collapse navbar-collapse">
        <div class="navbar-nav">
          <div class="col-left">
            <a class="navbar-brand" href="/"><img src="<?php echo $logomenu; ?>" class="logo" alt="" /></a>
          </div>
          <div class="col-right">

          <?php 
                 $menu_name = 'main';
                    if ($menu_name) {
                        $menu_items = wp_get_nav_menu_items($menu_name);
                        echo '<ul class="btns-link">';
                        foreach ($menu_items as $item) {
                          $btnn='';
                          if ($item->title=='Equipo') {
                              $btnn='btn-equipo';
                          }
                          if ($item->title=='Actualidad') {
                              $btnn='btn-actualidad';
                          }
                          if ($item->title=='Contacto') {
                              $btnn='contacto';
                          }



                            echo '<li class="btn-link_ '.$btnn.'"><a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';

                            if ($item->title=='Equipo') {
                              ?>
                              <!-- Desplegable equipo -->
                               <div class="submenu equipo">
                                  <div class="row">
                                      <div class="col-4">
                                          <div class="titulo"><?php echo $titulo_izquierda_equipo;?></div>
                                          <div class="texto">
                                              <?php echo $descripcion_izquierda_equipo;?>
                                          </div>
                                      </div>
                                      <div class="col-2"></div>
                                      <div class="col-6">
                                          <div class="form">
                                              <form id="search-form" method="GET" action="https://sagardoy.neuronalcode.io/equipo/">
                                                  <div class="row">
                                                      <div class="col-12">
                                                          <div class="subtitulo"><?php echo $titulo_derecha_equipo;?></div>
                                                          <div class="input-email">
                                                              <input 
                                                                  type="text" 
                                                                  name="_buscar" 
                                                                  class="input" 
                                                                  value="" 
                                                                  placeholder="<?php _e('Buscar', 'sagardoy'); ?>" />
                                                              <a href="#" class="btn-lupa"></a>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-4">
                                                          <div class="select">
                                                              <select name="_cargos" id="cargos-select">
                                                                  <option value="" disabled selected><?php _e('Cargo', 'sagardoy'); ?></option>
                                                                  <?php
                                                                  global $wpdb;
                                                                  $meta_key = 'cargo';
                                                                  $results = $wpdb->get_col(
                                                                      $wpdb->prepare(
                                                                          "SELECT DISTINCT meta_value 
                                                                          FROM {$wpdb->postmeta} 
                                                                          WHERE meta_key = %s 
                                                                          AND meta_value != ''", 
                                                                          $meta_key
                                                                      )
                                                                  );
                                                                  if (!empty($results)) {
                                                                      foreach ($results as $cargo) {
                                                                          echo '<option value="' . esc_attr($cargo) . '">' . esc_html($cargo) . '</option>';
                                                                      }
                                                                  } else {
                                                                      echo '<option value="0" disabled>No hay cargos disponibles</option>';
                                                                  }
                                                                  ?>
                                                              </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-4">
                                                          <div class="select">
                                                              <select name="_sedes" id="sedes-select">
                                                                  <option value="" disabled selected><?php _e('Sede', 'sagardoy'); ?></option>
                                                                  <?php
                                                                  $args = array(
                                                                      'post_type'      => 'sede',
                                                                      'posts_per_page' => -1,
                                                                      'post_status'    => 'publish',
                                                                      'orderby'        => 'title',
                                                                      'order'          => 'ASC',
                                                                  );

                                                                  $sede_query = new WP_Query($args);
                                                                  if ($sede_query->have_posts()) {
                                                                      while ($sede_query->have_posts()) {
                                                                          $sede_query->the_post();
                                                                          echo '<option value="' . esc_attr(get_the_ID()) . '">' . esc_html(get_the_title()) . '</option>';
                                                                      }
                                                                      wp_reset_postdata();
                                                                  } else {
                                                                      echo '<option value="0" disabled>No hay sedes disponibles</option>';
                                                                  }
                                                                  ?>
                                                              </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-4">
                                                          <button type="submit" class="btn-buscar"><?php _e('Buscar', 'sagardoy'); ?></button>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                          <ul class="btns">
                                              <li><a href="<?php echo $enlace_1_submenu;?>"><?php echo $nombre_enlace_1;?></a></li>
                                              <li><a href="<?php echo $enlace_2_submenu;?>"><?php echo $nombre_enlace_2;?></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>

                              <script>
                                  document.getElementById('search-form').addEventListener('submit', function (e) {
                                      e.preventDefault();
                                      const form = e.target;
                                      const action = form.getAttribute('action');
                                      const params = new URLSearchParams(new FormData(form));
                                      const fullUrl = `${action}?${params.toString()}#equiporesult`;
                                      window.location.href = fullUrl;
                                  });
                              </script>
                              <!-- Fin Desplegable equipo -->



                              <?php
                            }

                            if ($item->title=='Actualidad') {
                              ?>
                              <!-- Desplegable actualidad -->
                               <div class="submenu actualidad">
                                  <div class="row">
                                      <div class="col-4">
                                          <div class="titulo"><?php echo $titulo_actualidad_izquierdo;?></div>
                                          <div class="texto">
                                              <?php echo $descripcion_izquierda_submenu_actualidad;?>
                                          </div>
                                      </div>
                                      <div class="col-2"></div>
                                      <div class="col-6">
                                          <ul class="btns">
                                              <li><a href="<?php echo $enlace_actualidad_1;?>"><?php echo $titulo_enlace_derecho_actualidad;?></a></li>
                                              <li><a href="<?php echo $enlace_actualidad_2;?>"><?php echo $titulo_segundo_enlace; ?></a></li>
                                          </ul>
                                          <div class="subtitulo"><?php echo $titulo_bloque_noticias_submenu;?></div>
                                          <div class="noticias">
                                              <?php
                                              // Consulta para obtener los últimos dos posts
                                              $args = array(
                                                  'post_type'      => 'post', // Tipo de contenido (puede ser 'post', 'noticia', etc.)
                                                  'posts_per_page' => 2,     // Número de posts a obtener
                                                  'post_status'    => 'publish', // Solo mostrar posts publicados
                                                  'orderby'        => 'date',    // Ordenar por fecha
                                                  'order'          => 'DESC',    // Más recientes primero
                                              );

                                              $latest_posts = new WP_Query($args);

                                              // Comprobar si hay resultados
                                              if ($latest_posts->have_posts()) :
                                                  while ($latest_posts->have_posts()) :
                                                      $latest_posts->the_post();
                                              ?>
                                                      <div class="noticia">
                                                          <div class="row">
                                                              <!-- Texto del post -->
                                                              <div class="col-8">
                                                                  <div class="texto">
                                                                      <a href="<?php the_permalink(); ?>">
                                                                          <?php the_title(); ?>
                                                                      </a>
                                                                  </div>
                                                              </div>
                                                              <!-- Imagen destacada -->
                                                              <div class="col-4 text-end">
                                                                  <?php if (has_post_thumbnail()) : ?>
                                                                      <a href="<?php the_permalink(); ?>">
                                                                          <?php the_post_thumbnail('thumbnail', ['class' => 'img-fluid', 'alt' => get_the_title()]); ?>
                                                                      </a>
                                                                  <?php else : ?>
                                                                      <img src="path-to-default-image.jpg" class="img-fluid" alt="Default Image" />
                                                                  <?php endif; ?>
                                                              </div>
                                                          </div>
                                                      </div>
                                              <?php
                                                  endwhile;
                                                  wp_reset_postdata(); // Restablecer datos del post
                                              else :
                                              ?>
                                                  <p>No hay noticias disponibles en este momento.</p>
                                              <?php endif; ?>
                                          </div>
                                      </div>
                                  </div>
                              </div>


                            <!-- Fin desplegable actualidad -->

                              <?php
                            }
                            
                            echo '</li>';

                        }
                        echo '</ul>';
                    } else {
                        echo 'No se ha encontrado menú.';
                    }
                ?>

                  <!-- Selector de idiomas -->
            <div class="idioma-dropdown-menu">
              <?php
              // Obtener los idiomas activos
              $languages = apply_filters('wpml_active_languages', NULL, array('skip_missing' => 0, 'orderby' => 'id'));

              if (!empty($languages)) :
                  // Idioma actual
                  $current_language = '';
                  foreach ($languages as $language) {
                      if ($language['active']) {
                          $current_language = $language['language_code'];
                          break;
                      }
                  }
              ?>
                  <!-- Botón para el idioma actual -->
                  <a class="btn-idioma" href="#" data-bs-toggle="dropdown">
                      <?php echo strtoupper($current_language); ?>
                  </a>

                  <!-- Lista desplegable con idiomas -->
                  <ul class="dropdown-menu">
                      <?php foreach ($languages as $language) : ?>
                          <li>
                              <a href="<?php echo esc_url($language['url']); ?>">
                                  <?php echo strtoupper($language['language_code']); ?>
                              </a>
                          </li>
                          <!-- Añadir línea de separación solo entre elementos -->
                          <?php if (next($languages)) : ?>
                              <li class="linea"></li>
                          <?php endif; ?>
                      <?php endforeach; ?>
                  </ul>
              <?php endif; ?>
          </div>
          <!-- Fin Selector de idiomas -->
          </div>
        </div>
        <div class="navbar-nav-mobile d-block d-lg-none">
          <?php 
                 $menu_name = 'main';
                    if ($menu_name) {
                        $menu_items = wp_get_nav_menu_items($menu_name);
                        
                        
                        foreach ($menu_items as $item) {

                          $btnn='';
                          if ($item->title=='Equipo') {
                              $btnn='btn-equipo';
                          }
                          if ($item->title=='Actualidad') {
                              $btnn='btn-actualidad';
                          }
                          if ($item->title=='Contacto') {
                              $btnn='contacto';
                          }
                          
                            echo '<a href="' . esc_url($item->url) . '" class="btn-link '.$btnn .'">' . esc_html($item->title) . '</a></li>';

                        }
                    } else {
                        echo 'No se ha encontrado menú.';
                    }
                ?>
          <div class="btn-idiomas">
              <?php
              // Obtener los idiomas activos
              $languages = apply_filters('wpml_active_languages', NULL, array('skip_missing' => 0, 'orderby' => 'id'));

              if (!empty($languages)) :
                  foreach ($languages as $language) :
                      // Determinar si el idioma es el activo
                      $is_active = $language['active'] ? 'activo' : '';
              ?>
                      <a href="<?php echo esc_url($language['url']); ?>" class="btn-idioma <?php echo $is_active; ?>">
                          <?php echo esc_html($language['native_name']); ?>
                      </a>
              <?php
                  endforeach;
              endif;
              ?>
          </div>

          <a href="/contacto/" class="btn-contacto"><?php _e('Contacto', 'sagardoy'); ?></a>
          <div class="holder-equipo">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="titulo"><a href="/equipo/" class="btn-volver"></a><?php _e('Equipo', 'sagardoy'); ?></div>
                  <div class="form">
    <div class="subtitulo"><?php _e('Buscar abogado', 'sagardoy'); ?></div>
    <form id="search-form" method="GET" action="https://sagardoy.neuronalcode.io/equipo/">
        <div class="input-email">
            <input 
                type="text" 
                name="_buscar" 
                class="input" 
                value="" 
                placeholder="Buscar" />
        </div>
        <div class="select">
            <select name="_cargos" id="cargos-select">
                <option value="" disabled selected>Cargo</option>
                <?php
                // Obtener los valores únicos del campo personalizado 'cargo'
                global $wpdb;

                $meta_key = 'cargo'; // Nombre del campo personalizado
                $results = $wpdb->get_col(
                    $wpdb->prepare(
                        "SELECT DISTINCT meta_value 
                        FROM {$wpdb->postmeta} 
                        WHERE meta_key = %s 
                        AND meta_value != ''", 
                        $meta_key
                    )
                );

                // Verificar si hay resultados y crear opciones
                if (!empty($results)) {
                    foreach ($results as $cargo) {
                        echo '<option value="' . esc_attr($cargo) . '">' . esc_html($cargo) . '</option>';
                    }
                } else {
                    echo '<option value="0" disabled>No hay cargos disponibles</option>';
                }
                ?>
            </select>
        </div>
        <div class="select">
            <select name="_sedes" id="sedes-select">
                <option value="" disabled selected>Sede</option>
                <?php
                // Obtener todos los posts del custom post type 'sede'
                $args = array(
                    'post_type'      => 'sede',
                    'posts_per_page' => -1,
                    'post_status'    => 'publish',
                    'orderby'        => 'title',
                    'order'          => 'ASC',
                );

                $sede_query = new WP_Query($args);

                // Verificar si hay resultados y crear opciones
                if ($sede_query->have_posts()) {
                    while ($sede_query->have_posts()) {
                        $sede_query->the_post();
                        echo '<option value="' . esc_attr(get_the_ID()) . '">' . esc_html(get_the_title()) . '</option>';
                    }
                    wp_reset_postdata();
                } else {
                    echo '<option value="0" disabled>No hay sedes disponibles</option>';
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn-buscar"><?php _e('Buscar', 'sagardoy'); ?></button>
    </form>
</div>

<script>
    document.getElementById('search-form').addEventListener('submit', function (e) {
        // Prevenir el envío por defecto para modificar la URL
        e.preventDefault();

        // Obtener la acción del formulario y los parámetros del formulario
        const form = e.target;
        const action = form.getAttribute('action');
        const params = new URLSearchParams(new FormData(form));

        // Añadir el anclaje manualmente
        const fullUrl = `${action}?${params.toString()}#equiporesult`;

        // Redirigir a la URL final
        window.location.href = fullUrl;
    });
</script>

                  <ul class="btns">
                    <li><a href="<?php echo $enlace_1_submenu;?>"><?php echo $nombre_enlace_1;?></a></li>
                    <li><a href="<?php echo $enlace_2_submenu;?>"><?php echo $nombre_enlace_2;?></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="holder-actualidad">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="titulo"><a href="#" class="btn-volver"></a>Actualidad</div>
                  <ul class="btns">
                    <li><a href="<?php echo $enlace_actualidad_1;?>"><?php echo $titulo_enlace_derecho_actualidad;?></a></li>
                    <li><a href="<?php echo $enlace_actualidad_2;?>"><?php echo $titulo_segundo_enlace; ?></a></li>
                  </ul>
                  <div class="subtitulo"><?php echo $titulo_bloque_noticias_submenu;?></div>
                  <div class="noticias">
    <?php
    // Argumentos para obtener los dos últimos posts
    $args = array(
        'post_type'      => 'post', // Tipo de post (puedes cambiarlo si es un custom post type)
        'posts_per_page' => 2,     // Número de posts a mostrar
        'post_status'    => 'publish', // Solo posts publicados
        'orderby'        => 'date',    // Ordenar por fecha
        'order'          => 'DESC',    // De más reciente a más antiguo
    );

    $query = new WP_Query($args);

    // Verificar si hay posts y mostrar contenido
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="noticia">
                <div class="row">
                    <div class="col-9">
                        <div class="top">
                            <div class="categoria">
                                <?php
                                // Obtener y mostrar la primera categoría del post
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo esc_html($categories[0]->name);
                                } else {
                                    echo 'Sin categoría';
                                }
                                ?>
                            </div>
                            <div class="fecha"><?php echo get_the_date(); ?></div>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="titulo"><?php the_title(); ?></a>
                    </div>
                    <div class="col-3">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            // Mostrar la imagen destacada, si existe
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('medium', array('class' => 'image'));
                            } else {
                                echo '<img src="images/default-image.jpg" class="image" alt="Imagen por defecto" />';
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    else : ?>
        <p>No hay noticias disponibles.</p>
    <?php endif; ?>
</div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"  aria-expanded="false" aria-label="" title="navbar-toggler"><i class="ico-menu"></i><i class="ico-cerrar"></i></button>
    </div>
  </nav>



