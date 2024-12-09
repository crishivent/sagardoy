<?php
/*
Single Sede
*/

get_header();

$sedes = get_field('sedes', 'option');
$email = get_field('email_general', 'option');
$telefono = get_field('telefono_general', 'option');

$email = get_field('email');
$telefono = get_field('telefono');
$direccion = get_field('direccion');
$descripcion = get_field('descripcion');
$titulo_derecha = get_field('titulo_derecha');
$imagen_url = get_the_post_thumbnail_url(get_the_ID(), 'full');



 ?>

  <section class="modulo-35 pt-130 pb-130">
    <div class="desktop">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-3 col-left">
            <h2 class="titulo"><?php _e('Contacto', 'sagardoy'); ?></h2>
            <div class="subtitulo"><?php _e('Nuestras Sedes', 'sagardoy'); ?></div>
            <ul class="lista">
                <?php
                // Realiza una consulta personalizada para obtener los posts del custom post type 'sedes'
                $args = array(
                    'post_type' => 'sede', // Nombre del custom post type
                    'posts_per_page' => -1, // Trae todos los posts
                    'post_status' => 'publish', // Solo los publicados
                );
                $current_id = get_the_ID();
                $query = new WP_Query($args);
                $i = 1; // Contador para identificar el índice

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                    $activo = (get_the_ID() == $current_id) ? 'activo' : '';
                        ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" data-id="01" class="btn-link <?php echo $activo; ?>">
                                <?php echo esc_html(get_the_title()); // Muestra el título del post ?>
                            </a>
                        </li>
                        <?php
                        $i++; // Incrementa el contador
                    endwhile;
                    ?>
                    <li>
                            <a href="https://sagardoy.neuronalcode.io/contacto/" class="btn-link">
                                <?php _e('Internacional', 'sagardoy'); ?>
                            </a>
                    </li>

                    <?php
                    wp_reset_postdata(); // Resetea la consulta
                else :
                    echo '<li>No hay sedes disponibles.</li>';
                endif;
                ?>
            </ul>

            <div class="info">
              <a href="mailto:<?php echo $email;?>" class="btn-email"><?php echo $email;?></a><br>
              <a href="tel:<?php echo $telefono; ?>" class="btn-tel"><?php echo $telefono;?></a>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-lg-1"></div>
          <div class="col-12 col-sm-12 col-lg-8 col-right">
            <div class="row">
              <div class="col-12">
                <div class="imagenes-holder">
                    <div class="imagen-holder show" id="img-01">
                    <div class="titulo"><?php echo $titulo_derecha;?></div>
                    <img src="<?php echo $imagen_url; ?>" class="img-fluid" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-12 col-lg-5">
                <div class="infos-holder">
                    <div class="info-holder show" id="info-01">
                        <div class="texto"><?php echo $descripcion;?></div>
                        <div class="info">
                        <a href="#" class="btn-direccion"><?php echo $direccion;?></a><br><br>
                        <a href="tel:<?php echo $telefono;?>"><?php echo $telefono;?></a><br>
                        <a href="mailto:<?php echo $email;?>" class="btn-email"><?php echo $email;?></a>
                        </div>
                    </div>

                </div>
              </div>
              <div class="col-12 col-sm-12 col-lg-1"></div>
              <div class="col-12 col-sm-12 col-lg-6">
                <?php echo do_shortcode('[contact-form-7 id="d2f90d9" title="Contacto Sedes"]');?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mobile">
      <div class="layer">
        <div class="holder">
          <div class="data">
            <h2 class="titulo"><?php _e('Contacto', 'sagardoy'); ?></h2>
            <div class="info">
              <a href="mailto:<?php echo $email;?>" class="btn-email"><?php echo $email;?></a><br>
              <a href="tel:<?php echo $telefono;?>" class="btn-tel"><?php echo $telefono;?></a>
            </div>
            <div class="subtitulo"><?php _e('Nuestras Sedes', 'sagardoy'); ?></div>
          </div>
          <ul class="lista">
             <?php
                // Realiza una consulta personalizada para obtener los posts del custom post type 'sedes'
                $args = array(
                    'post_type' => 'sedes', // Nombre del custom post type
                    'posts_per_page' => -1, // Trae todos los posts
                    'post_status' => 'publish', // Solo los publicados
                );
                $current_i = get_the_ID();
                $query = new WP_Query($args);
                $i = 1; // Contador para identificar el índice

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $activo = (get_the_ID() == $current_i) ? 'activo' : '';
                        ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" data-id="01" class="btn-link <?php echo $activo; ?>">
                                <?php echo esc_html(get_the_title()); // Muestra el título del post ?>
                            </a>
                        </li>
                        <?php
                        $i++; // Incrementa el contador
                    endwhile;
                    wp_reset_postdata(); // Resetea la consulta
                else :
                    echo '<li>No hay sedes disponibles.</li>';
                endif;
                ?>
          </ul>
        </div>
        <div class="holder">
          <div class="container">
            <div class="datas">




             <div class="data show" id="data-01">
                <div class="titulo"><a href="#" class="btn-volver"></a><?php the_title();?></div>
                <div class="texto"><?php echo $descripcion;?></div>
                <div class="info">
                  <a href="#" class="btn-direccion"><?php echo $direccion;?></a><br><br>
                  <a href="tel:<?php echo $telefono;?>"><?php echo $telefono;?></a><br>
                  <a href="mailto:<?php echo $email;?>" class="btn-email"><?php echo $email;?></a>
                </div>
              </div>
            </div>

            <?php echo do_shortcode('[contact-form-7 id="55dd754" title="Contacto sedes movil"]');?>
          </div>
        </div>
      </div>
    </div>
  </section>



<!-- Newsletter -->
<?php get_template_part('componentes/generales/comp','newsletter');?>

 <?php get_footer(); ?>
