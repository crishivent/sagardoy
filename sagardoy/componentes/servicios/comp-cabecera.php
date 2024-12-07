<?php 
$fondo=get_query_var("servicios_fondo_de_cabecera");
$tituloservicios=get_query_var("servicios_titulo");
$subtituloservicios=get_query_var("servicios_subtitulo");
?>
<section class="section cabecera-interna cabecera">
    <div class="holder">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-7 col-md-7 border-left">
            <div class="label"><?php echo $tituloservicios;?></div>
            <div class="titulo"><?php echo $subtituloservicios;?></div>
          </div>
          <div class="col-12 col-sm-5 col-md-5"></div>
        </div>
      </div>
    </div>
    <img src="<?php echo $fondo; ?>" class="img-fluid" alt="" />
  </section>