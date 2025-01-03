 <?php 
$texto_entrada_unete=get_query_var("texto_entrada_unete");
$titulo_unete_bloque_1=get_query_var("titulo_unete_bloque_1");
$enlaces_unete=get_query_var("enlaces_unete");
$imagen_unete_bloque_1=get_query_var("imagen_unete_bloque_1");
$boton_unete_bloque_1=get_query_var("boton_unete_bloque_1");
$enlace_unete_bloque_1=get_query_var("enlace_unete_bloque_1");
?>
 
 
 
 
 <section class="modulo-24 pt-68 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-7">
          <div class="texto"><?php echo $texto_entrada_unete;?></div>
        </div>
        <div class="col-12 col-sm-12 col-lg-5"></Div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-4">
          <h2 class="titulo"><?php echo $titulo_unete_bloque_1;?></h2>
        </div>
        <div class="col-12 col-sm-12 col-lg-1"></div>
        <div class="col-12 col-sm-12 col-lg-7">
          <img src="<?php echo $imagen_unete_bloque_1;?>" class="img-fluid" alt="" />
          <?php echo $enlaces_unete;?>
          <a href="<?php echo $enlace_unete_bloque_1;?>" class="btn-link"><?php echo $boton_unete_bloque_1;?></a>
        </div>
      </div>
    </div>
  </section>