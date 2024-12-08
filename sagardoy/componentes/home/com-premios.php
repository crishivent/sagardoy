<?php 
$titulopremios=get_query_var("titulo_premios");
$premios=get_query_var("premios");

?>   
   
   
   <section class="modulo-02 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="texto"><?php echo $titulopremios; ?></h2>
        </div>
      </div>
      <div class="slider-logos">
        <div class="slick-slider" data-sizes="100vw">
           <?php 
              foreach ($premios as $premio) {
                $imagen = $premio['premios']['premio'];
                  echo '<div><img src="'.$imagen.'" class="img-fluid" alt=""></div>';
              }
        ?>
        </div>
      </div>
    </div>
  </section>