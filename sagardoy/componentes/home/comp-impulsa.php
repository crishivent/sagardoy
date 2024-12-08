  <?php 
   $logomenu = get_field('logo_menu', 'option');
   $imagen_impulsa = get_query_var('imagen_impulsa');
   $titulo_impulsa = get_query_var('titulo_impulsa');
   $subtitulo_impulsa = get_query_var('subtitulo_impulsa');
   $enlace_impulsa = get_query_var('enlace_impulsa');
   $link_impulsa = get_query_var('link_impulsa');
  ?>
  
  <section class="modulo-07 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-5 col-md-5">
          <img src="<?php echo $logomenu;  ?>" class="logo" alt="" />
          <img src="images/img-school.jpg" class="img-fluid" alt="" />
        </div>
        <div class="col-12 col-sm-1 col-md-1"></div>
        <div class="col-12 col-sm-6 col-md-6">
          <h2 class="titulo"><?php echo $titulo_impulsa;?></h2>
          <p class="texto"><?php echo $subtitulo_impulsa;?></p>
          <a href="<?php echo $link_impulsa; ?>" class="btn-link"><?php echo $enlace_impulsa;?></a>
        </div>
      </div>
    </div>
  </section>