<?php
/*
Single Equipo
*/

get_header();

$cargo= get_field('cargo');
$formacion= get_field('formacion');
$menciones= get_field('menciones');
$publicaciones= get_field('publicaciones');
$actividad_docente= get_field('actividad_docente');
$idiomas= get_field('idiomas');
$email= get_field('email');
$telefono= get_field('telefono');
$imagen_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
$sede = get_field('sedes');
$nombre=get_the_title(get_the_ID());
$post = $sede[0];


?>

<!-- Cabecera -->
<section class="section cabecera-single">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-8 col-md-8">
          <div class="datos">
            <div class="nombre"><?php echo $nombre;?></div>
            <div class="cargo"><?php echo $cargo;?></div>
            <img src="<?php echo $imagen_url; ?>" class="img-fluid mobile" alt="" />
            <div class="row">
              <div class="col-12 col-sm-4 col-md-4">
                <div class="titulo-top"><?php _e('CONTACTO', 'sagardoy'); ?></div>
                <a href="mailto:<?php echo $email; ?>" class="btn-email"><?php echo $email; ?></a>
                <a href="tel:<?php echo $telefono; ?>" class="btn-telefono"><?php echo $telefono;?></a>
              </div>
              <div class="col-12 col-sm-4 col-md-4">
                <div class="titulo-top"><?php _e('SEDES', 'sagardoy'); ?></div>
                <div class="texto"><?php echo esc_html($post->post_title);?></div>
              </div>
              <div class="col-12 col-sm-4 col-md-4">
                <div class="titulo-top"><?php _e('IDIOMAS', 'sagardoy'); ?></div>
                <div class="texto"><?php echo $idiomas;?></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-1 col-md-1"></div>
        <div class="col-12 col-sm-3 col-md-3">
          <img src="<?php echo $imagen_url; ?>" class="img-fluid" alt="" />
        </div>
      </div>
    </div>
  </section>


<!-- Formación y menciones -->
 <section class="modulo-22 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6">
          <h2 class="titulo"><?php _e('Presentación', 'sagardoy'); ?></h2>
          <p class="texto">
            <?php the_content();?>
          </p>
        </div>
        <div class="col-12 col-sm-1 col-md-1"></div>
        <div class="col-12 col-sm-4 col-md-4">
          <div class="info">
            <h2 class="titulo"><?php _e('Formación', 'sagardoy'); ?></h2>
            <div class="datos duno">
              <?php echo $formacion;?>
            </div>
            <button class="toggle-btn">+</button>
            <div class="ico-mas"></div>
          </div>
          <div class="info">
            <h2 class="titulo"><?php _e('Menciones', 'sagardoy'); ?></h2>
            <div class="datos duos">
              <?php echo $menciones; ?>
            </div>
            <button class="toggle-btndos">+</button>
            <div class="ico-mas"></div>
          </div>
<!-- -->
          <div class="info">
            <h2 class="titulo"><?php _e('Publicaciones', 'sagardoy'); ?></h2>
            <div class="datos tres">
              <?php echo $publicaciones; ?>
            </div>
            <button class="toggle-btntres">+</button>
            <div class="ico-mas"></div>
          </div>
<!-- -->
          <!-- -->
          <div class="info">
            <h2 class="titulo"><?php _e('Actividad Docente', 'sagardoy'); ?></h2>
            <div class="datos cuatro">
              <?php echo $actividad_docente; ?>
            </div>
            <button class="toggle-btncuat">+</button>
            <div class="ico-mas"></div>
          </div>
<!-- -->
        </div>
        <div class="col-12 col-sm-1 col-md-1"></div>
      </div>
    </div>
  </section>


<!-- Articulos relacionados -->

<section class="modulo-14 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-4 col-md-4">
          <div class="titulo"><?php _e('Artículos relacionados', 'sagardoy'); ?></div>
        </div>
        <div class="col-12 col-sm-2 col-md-2"></div>
        <div class="col-12 col-sm-6 col-md-6">
          <div class="articulos">
            <?php 

            // Query para obtener las últimas 3 noticias
              $query = new WP_Query([
                  'post_type' => 'post',
                  'posts_per_page' => 2,
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


                      echo '<div class="articulo">
                                <div class="row">
                                    <div class="col-7 col-sm-8 col-md-8">
                                    <div class="top">
                                        <div class="categoria">' . esc_html($categoria_nombre) . '</div>
                                        <div class="fecha">' . esc_html($fecha) . '</div>
                                    </div>
                                    <div class="titulo">' . esc_html($titulo) . '</div>
                                    </div>
                                    <div class="col-5 col-sm-4 col-md-4">
                                    <img src="' . esc_url($imagen) . '" class="image" alt="" />
                                    </div>
                                </div>
                                </div>';
                  }
                  wp_reset_postdata();
              } else {
                  echo '<p>No hay noticias recientes.</p>';
              }
            ?>
            
          </div>
        </div>
      </div>
    </div>
  </section>


            <!-- Buscar otro abogado -->
<section class="modulo-11 pt-130 pb-130 bg-gris">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-1 col-md-1"></div>
            <div class="col-12 col-sm-10 col-md-10 text-center">
                <h2 class="titulo"><?php _e('Buscar otro abogado', 'sagardoy'); ?></h2>
                <form id="search-form" method="GET" action="https://sagardoy.neuronalcode.io/equipo/">
                    <div class="form">
                        <div class="row">
                            <!-- Campo de búsqueda -->
                            <div class="col-12 col-sm-4 col-md-4">
                                <div class="input-email">
                                    <input 
                                        type="text" 
                                        name="_buscar" 
                                        class="input" 
                                        value="" 
                                        placeholder="Buscar por nombre" />
                                </div>
                            </div>

                            <!-- Selección de cargos -->
                            <div class="col-12 col-sm-3 col-md-3">
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
                            </div>

                            <!-- Selección de sedes -->
                            <div class="col-12 col-sm-3 col-md-3">
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
                            </div>

                            <!-- Botón de buscar -->
                            <div class="col-12 col-sm-2 col-md-2">
                                <button type="submit" class="btn-buscar">Buscar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-sm-1 col-md-1"></div>
        </div>
    </div>
</section>

<script>
    document.getElementById('search-form').addEventListener('submit', function (e) {
        // Prevenir envío por defecto para modificar la URL
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
    <script>
        const button = document.querySelector('.toggle-btn');
        const buttondos = document.querySelector('.toggle-btndos');
        const buttontres = document.querySelector('.toggle-btntres');
        const buttoncuatro = document.querySelector('.toggle-btncuat');
        const paragraphs = document.querySelectorAll('.duno p');
        const paragraphsdos = document.querySelectorAll('.duos p');
        const paragraphstres = document.querySelectorAll('.tres p');
        const paragraphscuatro = document.querySelectorAll('.cuatro p');
        let isExpanded = false;
        let isExpandedDos = false;

        button.addEventListener('click', () => {
            isExpanded = !isExpanded;
            paragraphs.forEach((p, index) => {
                if (index !== 0) { // Saltar el primer párrafo
                    p.style.display = isExpanded ? 'block' : 'none';
                }
            });
            button.textContent = isExpanded ? '-' : '+'; // Cambiar texto del botón
        });
        buttondos.addEventListener('click', () => {
            isExpandedDos = !isExpandedDos;
            paragraphsdos.forEach((p, index) => {
                if (index !== 0) { // Saltar el primer párrafo
                    p.style.display = isExpandedDos ? 'block' : 'none';
                }
            });
            buttondos.textContent = isExpandedDos ? '-' : '+'; // Cambiar texto del botón
        });
        buttontres.addEventListener('click', () => {
            isExpandedDos = !isExpandedDos;
            paragraphstres.forEach((p, index) => {
                if (index !== 0) { // Saltar el primer párrafo
                    p.style.display = isExpandedDos ? 'block' : 'none';
                }
            });
            buttontres.textContent = isExpandedDos ? '-' : '+'; // Cambiar texto del botón
        });
        buttoncuatro.addEventListener('click', () => {
            isExpandedDos = !isExpandedDos;
            paragraphscuatro.forEach((p, index) => {
                if (index !== 0) { // Saltar el primer párrafo
                    p.style.display = isExpandedDos ? 'block' : 'none';
                }
            });
            buttoncuatro.textContent = isExpandedDos ? '-' : '+'; // Cambiar texto del botón
        });
    </script>



<?php get_footer(); ?>