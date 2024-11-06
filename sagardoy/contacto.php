<?php
/*
Template Name: Página de contacto
*/

get_header();

$sedes = get_field('sedes', 'option');
$email = get_field('email_general', 'option');
$telefono = get_field('telefono_general', 'option');

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
                $i=1;
                foreach ($sedes as $sede) {
                    if($i==1){$activo='activo';}else{$activo='';}
                    echo '<li><a href="#" data-id="0'.$i.'" class="btn-link '.$activo.'">'.htmlspecialchars($sede['nombre']).'</a></li>';
                    $i++;
                }?>
              
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
                    <?php 
                $i=1;
                foreach ($sedes as $sede) {
                    if($i==1){$activo='show';}else{$activo='';}
                    echo '<div class="imagen-holder '.$activo.'" id="img-0'.$i.'">
                    <div class="titulo">'.htmlspecialchars($sede['titulo_derecha']).'</div>
                    <img src="'.htmlspecialchars($sede['imagen']).'" class="img-fluid" />
                  </div>';
                    $i++;
                }?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-12 col-lg-5">
                <div class="infos-holder">
                <?php 
                $i=1;
                foreach ($sedes as $sede) {
                    if($i==1){$activo='show';}else{$activo='';}
                    echo '<div class="info-holder '.$activo.'" id="info-0'.$i.'">
                    <div class="texto">'.htmlspecialchars($sede['descripcion']).'</div>
                    <div class="info">
                      <a href="#" class="btn-direccion">'.htmlspecialchars($sede['direccion']).'</a><br><br>
                      <a href="tel:'.htmlspecialchars($sede['telefono']).'">'.htmlspecialchars($sede['telefono']).'</a><br>
                      <a href="mailto:'.htmlspecialchars($sede['email']).'" class="btn-email">'.htmlspecialchars($sede['email']).'</a>
                    </div>
                  </div>';
                    $i++;
                }?>

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
                $i=1;
                foreach ($sedes as $sede) {
                    if($i==1){$activo='activo';}else{$activo='';}
                    echo '<li><a href="#" data-id="0'.$i.'" class="btn-link '.$activo.'">'.htmlspecialchars($sede['nombre']).'</a></li>';
                    $i++;
                }?>
          </ul>
        </div>
        <div class="holder">
          <div class="container">
            <div class="datas">

            <?php 
                $i=1;
                foreach ($sedes as $sede) {
                    if($i==1){$activo='show';}else{$activo='';}
                    echo '
                  <div class="data '.$activo.'" id="data-0'.$i.'">
                <div class="titulo"><a href="#" class="btn-volver"></a>'.htmlspecialchars($sede['nombre']).'</div>
                <div class="texto">'.htmlspecialchars($sede['descripcion']).'</div>
                <div class="info">
                  <a href="#" class="btn-direccion">'.htmlspecialchars($sede['direccion']).'</a><br><br>
                  <a href="tel:'.htmlspecialchars($sede['telefono']).'">'.htmlspecialchars($sede['telefono']).'</a><br>
                  <a href="mailto:'.htmlspecialchars($sede['email']).'" class="btn-email">'.htmlspecialchars($sede['email']).'</a>
                </div>
              </div>';
                    $i++;
                }
                ?>
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