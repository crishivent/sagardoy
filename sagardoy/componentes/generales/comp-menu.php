 <?php 
 $logomenu = get_field('logo_menu', 'option');
 
 ?>
 
 <nav class="navbar navbar-expand-lg">
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



                            echo '<li class="btn-link_ '.$btnn.'"><a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';

                            if ($item->title=='Equipo') {
                              ?>
                              <!-- Desplegable equipo -->
                               <div class="submenu equipo">
                                  <div class="row">
                                      <div class="col-4">
                                          <div class="titulo">Equipo</div>
                                          <div class="texto">
                                              Facilisi vitae suspendisse eget dui donec, a quisque quis in quis integer volutpat. In tellus commodo.
                                          </div>
                                      </div>
                                      <div class="col-2"></div>
                                      <div class="col-6">
                                          <div class="form">
                                              <form id="search-form" method="GET" action="https://sagardoy.neuronalcode.io/equipo/">
                                                  <div class="row">
                                                      <div class="col-12">
                                                          <div class="subtitulo">Buscar abogado</div>
                                                          <div class="input-email">
                                                              <input 
                                                                  type="text" 
                                                                  name="_buscar" 
                                                                  class="input" 
                                                                  value="" 
                                                                  placeholder="Buscar" />
                                                              <a href="#" class="btn-lupa"></a>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-4">
                                                          <div class="select">
                                                              <select name="_cargos" id="cargos-select">
                                                                  <option value="" disabled selected>Cargo</option>
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
                                                                  <option value="" disabled selected>Sede</option>
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
                                                          <button type="submit" class="btn-buscar">Buscar</button>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                          <ul class="btns">
                                              <li><a href="#">Conoce a nuestro equipo</a></li>
                                              <li><a href="#">Únete al equipo</a></li>
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
                                          <div class="titulo">Actualidad</div>
                                          <div class="texto">
                                              Facilisi vitae suspendisse eget dui donec, a quisque quis in quis integer volutpat. In tellus commodo
                                          </div>
                                      </div>
                                      <div class="col-2"></div>
                                      <div class="col-6">
                                          <ul class="btns">
                                              <li><a href="#">Noticias</a></li>
                                              <li><a href="#">Publicaciones</a></li>
                                          </ul>
                                          <div class="subtitulo">Últimas noticias y publicaciones</div>
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
            <div class="idioma-dropdown-menu">
              <a class="btn-idioma" href="#" data-bs-toggle="dropdown">Es</a>
              <ul class="dropdown-menu">
                <li><a href="#">Es</a></li>
                <li class="linea"></li>
                <li><a href="#">En</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="navbar-nav-mobile d-block d-lg-none">
          <?php 
                 $menu_name = 'main';
                    if ($menu_name) {
                        $menu_items = wp_get_nav_menu_items($menu_name);
                        if ($item->title=='Equipo') {
                              $btnn='btn-equipo';
                          }
                          if ($item->title=='Actualidad') {
                              $btnn='btn-actualidad';
                          }
                        
                        foreach ($menu_items as $item) {
                            echo '<a href="' . esc_url($item->url) . '" class="btn-link '.$btnn .'">' . esc_html($item->title) . '</a></li>';

                        }
                    } else {
                        echo 'No se ha encontrado menú.';
                    }
                ?>
          <div class="btn-idiomas">
            <a href="#" class="btn-idioma">Español</a>
            <a href="#" class="btn-idioma activo">English</a>
          </div>
          <a href="#" class="btn-contacto">Contacto</a>
          <div class="holder-equipo">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="titulo"><a href="#" class="btn-volver"></a>Equipo</div>
                  <div class="form">
                    <div class="subtitulo">Buscar abogado</div>
                    <div class="input-email">
                      <input class="input" value="" placeholder="Buscar"></input>
                      <a href="#" class="btn-lupa"></a>
                    </div>
                    <div class="select">
                      <select id="standard-select">
                        <option value="0" disabled selected>Cargo</option>
                        <option value="1">Opción 1</option>
                        <option value="2">Opción 2</option>
                        <option value="3">Opción 3</option>
                        <option value="4">Opción 4</option>
                        <option value="5">Opción 5</option>
                      </select>
                    </div>
                    <div class="select">
                      <select id="standard-select">
                        <option value="0" disabled selected>Sede</option>
                        <option value="1">Opción 1</option>
                        <option value="2">Opción 2</option>
                        <option value="3">Opción 3</option>
                        <option value="4">Opción 4</option>
                        <option value="5">Opción 5</option>
                      </select>
                    </div>
                    <a href="#" class="btn-buscar">Buscar</a>
                  </div>
                  <ul class="btns">
                    <li><a href="equipo.html">Conoce a nuestro equipo</a></li>
                    <li><a href="unete-al-equipo.html">Únete al equipo</a></li>
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
                    <li><a href="noticias.html">Noticias</a></li>
                    <li><a href="publicaciones.html">Publicaciones</a></li>
                  </ul>
                  <div class="subtitulo">Últimas noticias y publicaciones</div>
                  <div class="noticias">
                    <div class="noticia">
                      <div class="row">
                        <div class="col-9">
                          <div class="top">
                            <div class="categoria">NOTICIAS</div>
                            <div class="fecha">25.12.2024</div>
                          </div>
                          <a href="#" class="titulo">Dolor magna diam nunc sed in sit leo. Nec netus a dui ipsum sit diam quam. Erat massa.</a>
                        </div>
                        <div class="col-3">
                          <a href="#"><img src="images/img-publicaciones-06.jpg" class="image" alt="" /></a>
                        </div>
                      </div>
                    </div>
                    <div class="noticia">
                      <div class="row">
                        <div class="col-9">
                          <div class="top">
                            <div class="categoria">NOTICIAS</div>
                            <div class="fecha">25.12.2024</div>
                          </div>
                          <a href="#" class="titulo">Dolor magna diam nunc sed in sit leo. Nec netus a dui ipsum sit diam quam. Erat massa.</a>
                        </div>
                        <div class="col-3">
                          <a href="#"><img src="images/img-publicaciones-07.jpg" class="image" alt="" /></a>
                        </div>
                      </div>
                    </div>
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



