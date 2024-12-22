<?php 
$opinion_unete=get_query_var("opinion_unete");
$nombre_opinion_unete=get_query_var("nombre_opinion_unete");
$cargo_opinion_unete=get_query_var("cargo_opinion_unete");
$foto_opinion_unete=get_query_var("foto_opinion_unete");
?>

<section class="modulo-25 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-5">
          <div class="texto"><?php echo $opinion_unete;?></div>
          <div class="nombre"><?php echo $nombre_opinion_unete;?></div>
          <div class="cargo"><?php echo $cargo_opinion_unete;?></div>
        </div>
        <div class="col-12 col-sm-12 col-lg-1"></div>
        <div class="col-12 col-sm-12 col-lg-6">
          <div class="img-holder"><img src="<?php echo $foto_opinion_unete;?>" class="img-fluid" alt="" /></div>
        </div>
      </div>
    </div>
  </section>