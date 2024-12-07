<?php 
$fondo=get_query_var("fondo_school");
$titulo=get_query_var("titulo_school");
$link=get_query_var("link_school");
$logomenu = get_field('logo_menu', 'option');

?>


<section class="section cabecera-interna cabecera">
    <div class="holder">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-10 border-left">
            <div class="label"><img src="<?php echo $logomenu; ?>" class="logo" alt="" /></div>
            <div class="titulo"><?php echo $titulo;?></div>
            <a href="<?php echo $link; ?>" class="btn-link"><?php _e('Acceder', 'sagardoy'); ?></a>
          </div>
          <div class="col-12 col-sm-12 col-lg-2"></div>
        </div>
      </div>
    </div>
    <img src="<?php echo $fondo; ?>" class="img-fluid" alt="" />
  </section>