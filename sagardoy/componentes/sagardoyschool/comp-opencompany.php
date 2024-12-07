<?php 
$open_company=get_query_var("open_company");
$in_company=get_query_var("in_company");
?>
  <section class="modulo-29 pb-130">
    <div class="container">
      <div class="accesos">
        <div class="acceso left">
        <?php foreach ($open_company as $open) {?>
          <div class="titulo"><?php echo $open['open_company']['titulo_open'];?></div>
          <img src="<?php echo $open['open_company']['imagen_open'];?>" class="img-fluid" alt="" />
          <div class="holder">
            <p class="texto"><?php echo $open['open_company']['descripcion_open'];?></p>
            <a href="<?php echo $open['open_company']['link_open'];?>" class="btn-link"><?php _e('Saber más', 'sagardoy'); ?></a>
            <?php }?>
          </div>
        </div>
        <div class="acceso right">
          <?php foreach ($in_company as $in) {?>
          <div class="titulo"><?php echo $in['in_company']['titulo_open'];?></div>
          <img src="<?php echo $in['in_company']['imagen_open'];?>" class="img-fluid" alt="" />
          <div class="holder">
            <p class="texto"><?php echo $in['in_company']['descripcion_open'];?></p>
            <a href="<?php echo $in['in_company']['link_open'];?>" class="btn-link"><?php _e('Saber más', 'sagardoy'); ?></a>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </section>