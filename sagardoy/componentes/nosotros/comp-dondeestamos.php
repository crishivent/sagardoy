<?php 

$titulo1=get_query_var("titulo_donde_estamos");
$imagendondeestamos=get_query_var("imagen_donde_estamos");
$tituloderechadondeestamos=get_query_var("titulo_derecha_donde_estamos");
$descripcionderechadondeestamos=get_query_var("descripcion_derecha_donde_estamos");
$descripciondondeestamos=get_query_var("descripcion_donde_estamos");
?>
<section id="gdondeestamos" class="modulo-06 pt-65 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-5">
          <h2 class="titulo"><?php echo $titulo1;?></h2>
          <p class="texto"><?php echo $descripciondondeestamos;?></p>
        </div>
        <div class="col-12 col-sm-12 col-lg-7">
          <img src="<?php echo $imagendondeestamos; ?>" class="img-fluid" alt="" />
        </div>
      </div>
      <div class="cols-bottom">
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-6">
            <h2 class="titulo">Sedes en España</h2>
            <p class="texto">Encuentra nuestras sedes en: <?php echo $sedes[0]['nombre']; ?></p>
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
                          <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_the_title()); // Muestra el título del post ?></a>
                        </li>
                        <?php
                        $i++; // Incrementa el contador
                    endwhile;
                    ?>
                    <li>
                            <a href="https://sagardoy.neuronalcode.io/contacto/" data-id="02" class="btn-link">
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
          </div>
          <div class="col-12 col-sm-12 col-lg-6">
            <h2 class="titulo"><?php echo $tituloderechadondeestamos;?></h2>
            <p class="texto"><?php echo $descripcionderechadondeestamos;?></p>
          </div>
        </div>
      </div>
    </div>
  </section>