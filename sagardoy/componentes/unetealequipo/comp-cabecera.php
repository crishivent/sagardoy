<?php 
$fondo=get_query_var("fondo_de_cabecera");
$titulounete=get_query_var("unete_titulo");
$subtitulounete=get_query_var("unete_subtitulo");
?>

<section class="section cabecera-interna cabecera">
    <div class="holder">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-7 col-md-7 border-left">
            <div class="label"><?php echo $titulounete; ?></div>
            <div class="titulo"><?php echo $subtitulounete; ?></div>
          </div>
          <div class="col-12 col-sm-5 col-md-5"></div>
        </div>
      </div>
    </div>
    <img src="<?php echo $fondo; ?>" class="img-fluid" alt="" />
  </section>