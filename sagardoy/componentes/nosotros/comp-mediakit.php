<?php 
 $titulomedia = get_query_var('titulomedia');
 $descripcionmedia = get_query_var('descripcionmedia');
 $archivomedia = get_query_var('archivomedia');

?> 
 
 <section id="gmediakit" class="modulo-31 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-3"></div>
        <div class="col-12 col-sm-12 col-lg-6 text-center">
          <h2 class="titulo"><?php echo $titulomedia;?></h2>
          <p class="texto"><?php echo $descripcionmedia;?></p>
          <a href="<?php echo $archivomedia; ?>" class="btn-link"><?php _e('Descargar media kit', 'sagardoy'); ?></a>
        </div>
        <div class="col-12 col-sm-12 col-lg-3"></div>
      </div>
    </div>
  </section>