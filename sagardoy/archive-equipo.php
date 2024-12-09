<?php
/*
Archive Equipo
*/

get_header();


// Cabecera
$titulo_equipo = get_field('titulo_equipo', 'option');
$fondo_equipo = get_field('fondo_equipo', 'option');

set_query_var('descripcion_equipo',get_field('descripcion_equipo', 'option'));

//Talento
$titulo_talento = get_field('titulo_talento', 'option');
$imagen_talento = get_field('imagen_talento', 'option');
$descripcion_talento = get_field('descripcion_talento', 'option');
$texto_boton_talento = get_field('texto_boton_talento', 'option');
$enlace_boton_talento = get_field('enlace_boton_talento', 'option');




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
                  <?php echo do_shortcode('[facetwp facet="buscar"]');?>
                 <!-- <input class="input" value="" placeholder="Buscar"></input>-->
                  <a href="#" class="btn-link"></a>
                </div>
              </div>
              <div class="col-12 col-sm-3 col-md-3">
                <div class="select">
                  <?php echo do_shortcode('[facetwp facet="cargos"]');?>
                  
                </div>
              </div>
              <div class="col-12 col-sm-3 col-md-3">
                <div class="select">
                  <?php echo do_shortcode('[facetwp facet="sedes"]');?>
                 
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
            if (have_posts()) :
                while (have_posts()) : the_post();

                    $cargo = get_field('cargo'); // Campo personalizado 'cargo'
                    $imagen = get_the_post_thumbnail_url(get_the_ID(), 'full'); // URL de la imagen destacada
                    $nombre = get_the_title(); // Título del post
            ?>
                    
                      <div class="col-12 col-sm-4 col-lg-3 mb-5">
                        <a href="<?php the_permalink(); ?>">
                          <img src="<?php echo esc_url($imagen); ?>" class="img-fluid" alt="<?php echo esc_attr($nombre); ?>" />
                          <div class="nombre"><?php echo esc_html($nombre); ?></div>
                          <div class="cargo"><?php echo esc_html($cargo); ?></div>
                          </a>
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



          <!-- Buscamos talento -->
  <section class="modulo-12 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-4">
          <h2 class="titulo"><?php echo $titulo_talento;?></h2>
        </div>
        <div class="col-12 col-sm-12 col-lg-1"></div>
        <div class="col-12 col-sm-12 col-lg-7">
          <img src="<?php echo $imagen_talento; ?>" class="img-fluid" alt="" />
          <p class="texto"><?php echo $descripcion_talento;?></p>
          <a href="<?php echo $enlace_boton_talento; ?>" class="btn-link"><?php echo $texto_boton_talento;?></a>
        </div>
      </div>
    </div>
  </section>




<!-- Quienes opiniones OK -->
<?php get_template_part('componentes/generales/comp','opiniones');?>



   <?php get_footer(); ?>