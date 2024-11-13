<?php 
$titular=get_query_var("titular_quienes_somos");
$puntosclave=get_query_var("puntos_clave");
$btnservicio=get_query_var("boton_servicios");

?> 
 
 <section id="gsomos" class="modulo-28 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="titulo"><?php echo $titular;?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-4">
          <ul class="lista">
            <li>
              <b><?php echo $puntosclave[0]['titulo_punto']; ?></b><br>
              <?php echo $puntosclave[0]['contenido_punto'];?>
            </li>
            <li>
              <b><?php echo $puntosclave[1]['titulo_punto']; ?></b><br>
              <?php echo $puntosclave[1]['contenido_punto'];?>
            </li>
          </ul>
        </div>
        <div class="col-12 col-sm-12 col-lg-1"></div>
        <div class="col-12 col-sm-12 col-lg-4">
          <ul class="lista">
            <li>
              <b><?php echo $puntosclave[2]['titulo_punto']; ?></b><br>
              <?php echo $puntosclave[2]['contenido_punto'];?>
            </li>
            <li>
              <b><?php echo $puntosclave[3]['titulo_punto']; ?></b><br>
              <?php echo $puntosclave[3]['contenido_punto'];?>
            </li>
          </ul>
        </div>
        <div class="col-12 col-sm-12 col-lg-3"></div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="<?php echo $btnservicio; ?>" class="btn-link"><?php _e('Servicios Sagardoy', 'sagardoy'); ?></a>
        </div>
      </div>
    </div>
  </section>