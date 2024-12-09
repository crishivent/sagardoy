<?php
/*
Archive Equipo
*/

get_header();


// Cabecera
$titulo_equipo = get_field('titulo_equipo', 'option');
$fondo_equipo = get_field('fondo_equipo', 'option');

set_query_var('descripcion_equipo',get_field('descripcion_equipo', 'option'));





?>



<!-- Equipo Cabecera -->
<section class="section cabecera-interna cabecera">
    <div class="holder">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-7 col-md-7 border-left">
            <div class="label"><?php _e('Equipo', 'sagardoy'); ?></div>
            <div class="titulo"><?php echo $titulo_equipo;?></div>
          </div>
          <div class="col-12 col-sm-5 col-md-5"></div>
        </div>
      </div>
    </div>
    <img src="<?php echo $fondo_equipo; ?>" class="img-fluid" alt="" />
  </section>



<!-- Contador gris -->
<?php get_template_part('componentes/nosotros/comp','experiencia'); ?>


<!-- Filtros profesionales -->

<section class="modulo-11 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-1"></div>
        <div class="col-12 col-sm-12 col-lg-10 text-center">
          <h2 class="titulo">Buscar abogados y profesionales</h2>
          <div class="form">
            <div class="row">
              <div class="col-12 col-sm-4 col-md-4">
                <div class="input-email">
                  <input class="input" value="" placeholder="Buscar"></input>
                  <a href="#" class="btn-link"></a>
                </div>
              </div>
              <div class="col-12 col-sm-3 col-md-3">
                <div class="select">
                  <?php echo do_shortcode('[facetwp facet="cargos"]');?>
                  <select id="standard-select">
                    <option value="0" disabled selected>Cargo</option>
                    <option value="1">Opción 1</option>
                    <option value="2">Opción 2</option>
                    <option value="3">Opción 3</option>
                    <option value="4">Opción 4</option>
                    <option value="5">Opción 5</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-sm-3 col-md-3">
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
              </div>
              <div class="col-12 col-sm-2 col-md-2">
                <a href="#" class="btn-buscar">Buscar</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-1"></div>
      </div>
    </div>
  </section>


<!-- Resultado -->


<section class="modulo-11 pt-130 pb-130 buscador-resultado">
    <div class="container">
        <div class="row">
            <?php
            // Consulta personalizada para obtener los miembros del equipo
            $args = array(
                'post_type' => 'equipo', // Custom post type 'equipo'
                'posts_per_page' => -1, // Traer todos los posts
                'post_status' => 'publish', // Solo los publicados
            );

            if (function_exists('facetwp_is_main_query') && facetwp_is_main_query()) {
                $args['facetwp'] = true;
            }

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();

                    $cargo = get_field('cargo'); // Campo personalizado 'cargo'
                    $imagen = get_the_post_thumbnail_url(get_the_ID(), 'full'); // URL de la imagen destacada
                    $nombre = get_the_title(); // Título del post
            ?>
                    <div class="col-12 col-sm-4 col-lg-3 mb-5">
                        <img src="<?php echo esc_url($imagen); ?>" class="img-fluid" alt="<?php echo esc_attr($nombre); ?>" />
                        <div class="nombre"><?php echo esc_html($nombre); ?></div>
                        <div class="cargo"><?php echo esc_html($cargo); ?></div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata(); // Resetea la consulta
            else :
                echo '<div class="col-12"><p>No hay miembros del equipo disponibles.</p></div>';
            endif;
            ?>
        </div>
        <div class="text-center">
            <a href="#" class="btn-ver-mas">Ver más</a>
        </div>
    </div>
</section>









   <?php get_footer(); ?>