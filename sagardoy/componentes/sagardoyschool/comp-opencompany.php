<?php 
$open_company=get_query_var("open_company");
$in_company=get_query_var("in_company");
?>
  <section class="modulo-29 pb-130">
    <div class="container">
      <div class="accesos">
        <div class="acceso left">
          <div class="titulo"><?php echo $open_company['titulo_open'];?></div>
          <img src="<?php echo $open_company['imagen_open'];?>" class="img-fluid" alt="" />
          <div class="holder">
            <p class="texto"><?php echo $open_company['descripcion_open'];?></p>
            <a href="<?php echo $open_company['link_open'];?>" class="btn-link"><?php _e('Descubre más', 'sagardoy'); ?></a>
         
          </div>
        </div>
        <div class="acceso right">
          <div class="titulo"><?php echo $in_company['titulo_open'];?></div>
          <img src="<?php echo $in_company['imagen_open'];?>" class="img-fluid" alt="" />
          <div class="holder">
            <p class="texto"><?php echo $in_company['descripcion_open'];?></p>
            <a href="<?php echo $in_company['link_open'];?>" class="btn-link"><?php _e('Descubre más', 'sagardoy'); ?></a>
           
          </div>
        </div>
      </div>
    </div>
  </section>