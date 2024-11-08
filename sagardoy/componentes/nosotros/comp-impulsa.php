 <?php 
 $impulsa = get_query_var('impulsa');
 $impulsa2 = get_query_var('impulsa2'); ?>
 
 <section class="modulo-29 pt-130 pb-130 bg-gris">
    <div class="container">
      <div class="accesos">
        <div class="acceso left">
          <div class="titulo"><?php echo $impulsa['titulo'];?></div>
          <img src="<?php echo $impulsa['imagen_impulsa_tu_carrera'];?>" class="img-fluid" alt="" />
          <div class="holder">
            <p class="texto"><?php echo $impulsa['descripcion_impulsa'];?></p>
            <a href="<?php echo $impulsa['enlace_boton_impulsa'];?>" class="btn-link"><?php _e('Saber más', 'sagardoy'); ?></a>
          </div>
        </div>
        <div class="acceso right">
          <div class="titulo"><?php echo $impulsa2['titulo'];?></div>
          <img src="<?php echo $impulsa2['imagen_impulsa_tu_carrera'];?>" class="img-fluid" alt="" />
          <div class="holder">
            <p class="texto"><?php echo $impulsa2['descripcion_impulsa'];?></p>
            <a href="<?php echo $impulsa2['enlace_boton_impulsa'];?>" class="btn-link"><?php _e('Saber más', 'sagardoy'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>