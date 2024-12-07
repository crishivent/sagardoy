 <?php 
$descripcion_areas=get_query_var("descripcion_areas");
$imagen_areas=get_query_var("imagen_areas");
$titulo_areas=get_query_var("titulo_areas");
$lista_areas=get_query_var("lista_areas");

?>  
  
  
  
  
  <section class="modulo-24 pt-68 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-7">
          <div class="texto"><?php echo $descripcion_areas;?></div>
        </div>
        <div class="col-12 col-sm-12 col-lg-5"></Div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-5">
          <img src="<?php echo $imagen_areas; ?>" class="img-fluid" alt="" />
        </div>
        <div class="col-12 col-sm-12 col-lg-1"></div>
        <div class="col-12 col-sm-12 col-lg-6">
          <h2 class="titulo"><?php echo $titulo_areas;?></h2>
          <ul class="lista">
            <?php echo $lista_areas;?>
          </ul>
        </div>
      </div>
    </div>
  </section>