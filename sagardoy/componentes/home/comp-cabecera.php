<?php 
$fondo=get_query_var("imagen_fondo_home");
$titulohome=get_query_var("titulo_home");
$subtitulohome=get_query_var("subtitulo_home");

?>
<section class="section cabecera-home cabecera">
    <div class="data">
      <h2 class="titulo"><?php echo $titulohome;?></h2>
      <p class="texto"><?php echo $subtitulohome;?></p>
    </div>
    <img src="<?php echo $fondo; ?>" class="img-fluid" alt="" />
  </section>