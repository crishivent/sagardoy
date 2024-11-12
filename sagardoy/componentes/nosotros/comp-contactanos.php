 <?php 
  $imagen_informacion = get_query_var('imagen_informacion');
  $titulo_informacion = get_query_var('titulo_informacion');
  $pagina_informacion = get_query_var('pagina_informacion');
 
 ?>
 
 
 <section class="modulo-09 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-5 col-md-5">
          <img src="<?php echo $imagen_informacion; ?>" class="img-fluid" alt="" />
        </div>
        <div class="col-12 col-sm-1 col-md-1"></div>
        <div class="col-12 col-sm-6 col-md-6">
          <h2 class="titulo"><?php echo $titulo_informacion;?></h2>
          <a href="<?php echo $pagina_informacion; ?>" class="btn-link"><?php _e('CONTÁCTANOS', 'sagardoy'); ?></a>
        </div>
      </div>
    </div>
  </section>