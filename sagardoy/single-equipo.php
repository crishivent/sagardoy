<?php
/*
Single Equipo
*/

get_header();

$cargo= get_field('cargo');
$formacion= get_field('formacion');
$menciones= get_field('menciones');
$idiomas= get_field('idiomas');
$email= get_field('email');
$telefono= get_field('telefono');
$imagen_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
 $sede = get_field('sedes');



?>

<!-- Cabecera -->
<section class="section cabecera-single">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-8 col-md-8">
          <div class="datos">
            <div class="nombre"><?php the_title();?></div>
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
                <div class="texto"><?php echo $sede;?></div>
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
            <div class="datos">
              <?php echo $formacion;?>
            </div>
            <div class="ico-mas"></div>
          </div>
          <div class="info">
            <h2 class="titulo"><?php _e('Menciones', 'sagardoy'); ?></h2>
            <div class="datos">
              <?php echo $menciones; ?>
            </div>
            <div class="ico-mas"></div>
          </div>
        </div>
        <div class="col-12 col-sm-1 col-md-1"></div>
      </div>
    </div>
  </section>





<?php get_footer(); ?>