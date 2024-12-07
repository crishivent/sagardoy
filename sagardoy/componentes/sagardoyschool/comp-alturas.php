<?php 
$imagen_alturas=get_query_var("imagen_alturas");
$titulo_alturas=get_query_var("titulo_alturas");
$enlace_alturas=get_query_var("enlace_alturas");
$direccion_alturas=get_query_var("direccion_alturas");
$email_alturas=get_query_var("email_alturas");
$telefono_alturas=get_query_var("telefono_alturas");
$enlace_maps_alturas=get_query_var("enlace_maps_alturas");
?>

<section class="modulo-34 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-5">
          <img src="<?php echo $imagen_alturas; ?>" class="img-fluid" alt="" />
        </div>
        <div class="col-12 col-sm-12 col-lg-1"></div>
        <div class="col-12 col-sm-12 col-lg-5 d-flex justify-content-between flex-column gap-3">
          <div>
            <h2 class="titulo"><?php echo $titulo_alturas;?></h2>
            <a href="<?php echo $enlace_alturas; ?>" class="btn-link"><?php _e('Acceder a Sagardoy School', 'sagardoy'); ?></a>
          </div>
          <div class="info">
            <a href="<?php echo $enlace_maps_alturas ?>" class="btn-direccion" target="_blank"><?php echo $direccion_alturas;?></a><br>
            <a href="mailto:<?php echo $email_alturas;?>" class="btn-email"><?php echo $email_alturas;?></a><br>
            <a href="tel:<?php echo $telefono_alturas;?>"><?php echo $telefono_alturas;?></a>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-1"></div>
      </div>
    </div>
  </section>