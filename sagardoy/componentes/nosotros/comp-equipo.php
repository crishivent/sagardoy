<?php 
 $tituloequipo = get_query_var('titulo_equipo_expertos');
 $descripcionequipo = get_query_var('descripcion_equipo_de_expertos');
 $enlacequipo = get_query_var('enlace_equipo_de_expertos');
 $imagenequipo = get_query_var('imagen_equipo_de_expertos');
?>  
  
  <section class="modulo-12 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-4">
          <h2 class="titulo"><?php echo $tituloequipo;?></h2>
        </div>
        <div class="col-12 col-sm-12 col-lg-1"></div>
        <div class="col-12 col-sm-12 col-lg-7">
          <img src="<?php echo $imagenequipo; ?>" class="img-fluid" alt="" />
          <p class="texto"><?php echo $descripcionequipo;?></p>
          <a href="<?php echo $enlacequipo; ?>" class="btn-link"><?php _e('Conoce nuestro equipo', 'sagardoy'); ?></a>
        </div>
      </div>
    </div>
  </section>