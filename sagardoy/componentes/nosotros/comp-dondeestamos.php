<?php 
$sedes = get_field('sedes', 'option');
$titulo1=get_query_var("titulo_donde_estamos");
$imagendondeestamos=get_query_var("imagen_donde_estamos");
$tituloderechadondeestamos=get_query_var("titulo_derecha_donde_estamos");
$descripcionderechadondeestamos=get_query_var("descripcion_derecha_donde_estamos");
$descripciondondeestamos=get_query_var("descripcion_donde_estamos");
?>
<section class="modulo-06 pt-65 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-5">
          <h2 class="titulo"><?php echo $titulo1;?></h2>
          <p class="texto"><?php echo $descripciondondeestamos;?></p>
        </div>
        <div class="col-12 col-sm-12 col-lg-7">
          <img src="<?php echo $imagendondeestamos; ?>" class="img-fluid" alt="" />
        </div>
      </div>
      <div class="cols-bottom">
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-6">
            <h2 class="titulo">Sedes en España</h2>
            <p class="texto">Encuentra nuestras sedes en: <?php echo $sedes[0]['nombre']; ?></p>
            <ul class="lista">

            <?php 
                foreach ($sedes as $sede) {
                    if($i==1){}else{
                    echo '<li><a href="#">'.htmlspecialchars($sede['nombre']).'</a></li>';
                    }
                }?>
            </ul>
          </div>
          <div class="col-12 col-sm-12 col-lg-6">
            <h2 class="titulo"><?php echo $tituloderechadondeestamos;?></h2>
            <p class="texto"><?php echo $descripcionderechadondeestamos;?></p>
          </div>
        </div>
      </div>
    </div>
  </section>