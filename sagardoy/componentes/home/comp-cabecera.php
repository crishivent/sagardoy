<?php 
$fondo=get_query_var("video_de_cabecera");
$titulohome=get_query_var("titulo_home");
$subtitulohome=get_query_var("subtitulo_home");

?>
<section class="section cabecera-home cabecera">
    <div class="data">
      <h2 class="titulo"><?php echo $titulohome;?></h2>
      <p class="texto"><?php echo $subtitulohome;?></p>
    </div>
    <video class="img-fluid" autoplay muted loop>
        <source src="<?php echo $fondo; ?>" type="video/mp4">
        Tu navegador no soporta la reproducción de videos.
    </video>
  </section>