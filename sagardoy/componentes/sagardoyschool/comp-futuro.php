 <?php 
$titulo_futuro=get_query_var("titulo_futuro");
$descripcion_futuro=get_query_var("descripcion_futuro");
$imagen_futuro=get_query_var("imagen_futuro");
$titulo_imagen_futuro=get_query_var("titulo_imagen_futuro");
$descripcion_imagen_futuro=get_query_var("descripcion_imagen_futuro");

?>
 
 
 
 
 <section class="modulo-33 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-4">
          <h2 class="titulo"><?php echo $titulo_futuro;?></h2>
          <div class="texto"><?php echo $descripcion_futuro;?></div>
        </div>
        <div class="col-12 col-sm-12 col-lg-1"></div>
        <div class="col-12 col-sm-12 col-lg-7">
          <img src="<?php echo $imagen_futuro; ?>" class="img-fluid" alt="" />
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-10">
              <div class="subtitulo"><?php echo $titulo_imagen_futuro;?></div>
              <div class="subtexto"><?php echo $descripcion_imagen_futuro;?></div>
            </div>
            <div class="col-12 col-sm-12 col-lg-2"></div>
          </div>
        </div>
      </div>
    </div>
  </section>