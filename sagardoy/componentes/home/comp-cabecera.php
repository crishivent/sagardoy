<?php 
$fondo=get_query_var("fondo_de_cabecera");
$titulonosotros=get_query_var("nosotros_titulo");
$subtitulonosotros=get_query_var("nosotros_subtitulo");

?>
<section class="section cabecera-home cabecera">
    <div class="data">
      <h2 class="titulo"><?php echo $titulonosotros;?></h2>
      <p class="texto"><?php echo $subtitulonosotros;?></p>
    </div>
    <img src="<?php echo $fondo; ?>" class="img-fluid" alt="" />
  </section>